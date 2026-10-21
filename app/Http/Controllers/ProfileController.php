<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function edit(Request $request): View|RedirectResponse
    {
        if ($request->user()->isAdmin()) {
            return redirect()->route('admin.approvals');
        }

        if ($request->user()->hasCompletedProfile()) {
            return $request->user()->isApproved()
                ? redirect()->route('dashboard')
                : redirect()->route('approval.pending');
        }

        return view('auth.profile-complete');
    }

    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^[0-9+().\-\s]{7,30}$/'],
            'education' => ['required', 'string', 'max:150'],
            'location' => ['required', 'string', 'max:150'],
        ]);

        $request->user()->update($validated);

        return redirect()->route('approval.pending')->with('success', 'Your details are submitted. An administrator will review your request.');
    }
}
