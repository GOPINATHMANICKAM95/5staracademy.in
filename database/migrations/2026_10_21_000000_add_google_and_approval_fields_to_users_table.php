<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->string('google_id')->nullable()->unique();
            $table->string('phone', 30)->nullable();
            $table->string('education', 150)->nullable();
            $table->string('location', 150)->nullable();
            $table->timestamp('approved_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table): void {
            $table->dropUnique(['google_id']);
            $table->dropColumn(['google_id', 'phone', 'education', 'location', 'approved_at']);
        });
    }
};
