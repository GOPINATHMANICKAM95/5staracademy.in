<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(): RedirectResponse
    {
        abort_unless(config('services.google.client_id') && config('services.google.client_secret'), 503, 'Google sign-in is not configured yet.');

        return Socialite::driver('google')
            ->scopes(['openid', 'email', 'profile'])
            ->redirect();
    }

    public function callback(): RedirectResponse
    {
        if (request()->filled('error')) {
            return redirect()->route('home')->with('error', 'Google sign-in was cancelled. You can try again whenever you are ready.');
        }

        $googleUser = Socialite::driver('google')->user();
        $email = strtolower(trim((string) $googleUser->getEmail()));
        $emailVerified = filter_var(
            $googleUser->user['email_verified'] ?? $googleUser->user['verified_email'] ?? false,
            FILTER_VALIDATE_BOOLEAN,
        );

        abort_unless(filter_var($email, FILTER_VALIDATE_EMAIL) && $emailVerified, 403, 'Use a verified Google account to continue.');

        $user = User::where('email', $email)->first();

        if ($user && $user->google_id && ! hash_equals($user->google_id, (string) $googleUser->getId())) {
            abort(403, 'This email is already connected to a different Google account. Contact 5StarAcadem for help.');
        }

        if (! $user) {
            $user = User::create([
                'name' => $googleUser->getName() ?: $googleUser->getNickname() ?: 'Learner',
                'email' => $email,
                'email_verified_at' => now(),
                'google_id' => (string) $googleUser->getId(),
                'password' => Str::random(64),
            ]);
        } elseif (! $user->google_id) {
            $user->forceFill([
                'google_id' => (string) $googleUser->getId(),
                'email_verified_at' => now(),
            ])->save();
        }

        Auth::login($user, remember: true);
        request()->session()->regenerate();

        if ($user->isAdmin()) {
            return redirect()->intended(route('admin.approvals'));
        }

        if (! $user->hasCompletedProfile()) {
            return redirect()->route('profile.complete');
        }

        return $user->isApproved()
            ? redirect()->intended(route('dashboard'))
            : redirect()->route('approval.pending');
    }
}
