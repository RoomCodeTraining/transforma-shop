<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('identifier')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('full_name')->virtualAs('concat(first_name, " ", last_name)');
            $table->string('email')->unique();
            $table->string('city')->nullable();
            $table->string(('contact'))->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('current_role_id')->nullable();
            $table->string('profile_photo_path')->nullable();
            $table->timestamp('last_login_at')->nullable();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};