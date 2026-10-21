<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureLearnerApproved
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user->isAdmin()) {
            return $next($request);
        }

        if (! $user->hasCompletedProfile()) {
            return redirect()->route('profile.complete');
        }

        if (! $user->isApproved()) {
            return redirect()->route('approval.pending');
        }

        return $next($request);
    }
}
