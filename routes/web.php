<?php

use App\Http\Controllers\Admin\ApprovalController;
use App\Http\Controllers\Auth\GoogleAuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::view('/', 'landing')->name('home');

Route::get('/login', fn () => redirect()->route('google.redirect'))->name('login');
Route::get('/auth/google/redirect', [GoogleAuthController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'callback'])->name('google.callback');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('home')->with('success', 'You have been signed out.');
})->middleware('auth')->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/profile/complete', [ProfileController::class, 'edit'])->name('profile.complete');
    Route::post('/profile/complete', [ProfileController::class, 'update'])->name('profile.save');

    Route::get('/approval-pending', function () {
        $user = request()->user();

        if ($user->isAdmin()) {
            return redirect()->route('admin.approvals');
        }

        if (! $user->hasCompletedProfile()) {
            return redirect()->route('profile.complete');
        }

        if ($user->isApproved()) {
            return redirect()->route('dashboard');
        }

        return view('auth.pending');
    })->name('approval.pending');

    Route::get('/dashboard', function () {
        $user = request()->user();

        if ($user->isAdmin()) {
            return redirect()->route('admin.approvals');
        }

        return view('dashboard');
    })->middleware('learner.approved')->name('dashboard');

    Route::prefix('admin')->name('admin.')->middleware('administrator')->group(function () {
        Route::get('/approvals', [ApprovalController::class, 'index'])->name('approvals');
        Route::post('/learners/{user}/approve', [ApprovalController::class, 'approve'])->name('learners.approve');
    });
});
