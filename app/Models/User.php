<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'email_verified_at', 'google_id', 'phone', 'education', 'location'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'approved_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isAdmin(): bool
    {
        return in_array(strtolower($this->email), config('academy.admin_emails', []), true);
    }

    public function hasCompletedProfile(): bool
    {
        return filled($this->name) && filled($this->phone) && filled($this->education) && filled($this->location);
    }

    public function isApproved(): bool
    {
        return $this->approved_at !== null;
    }
}
