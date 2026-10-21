<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ApprovalController extends Controller
{
    public function index(): View
    {
        $pendingLearners = User::query()
            ->whereNull('approved_at')
            ->whereNotNull('phone')
            ->whereNotNull('education')
            ->whereNotNull('location')
            ->whereNotIn('email', config('academy.admin_emails', []))
            ->latest()
            ->paginate(12);

        return view('admin.approvals', [
            'pendingLearners' => $pendingLearners,
            'pendingCount' => User::query()
                ->whereNull('approved_at')
                ->whereNotNull('phone')
                ->whereNotNull('education')
                ->whereNotNull('location')
                ->whereNotIn('email', config('academy.admin_emails', []))
                ->count(),
            'approvedCount' => User::query()->whereNotNull('approved_at')->count(),
        ]);
    }

    public function approve(User $user): RedirectResponse
    {
        abort_if($user->isAdmin(), 422, 'Administrator accounts do not need learner approval.');

        if (! $user->hasCompletedProfile()) {
            return back()->with('error', 'This learner has not completed their details yet.');
        }

        $user->forceFill(['approved_at' => now()])->save();

        return back()->with('success', $user->name.' now has access to the learner dashboard.');
    }
}
