<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->string('sid_img')->nullable();
            $table->string('filter')->nullable();
            $table->boolean('darkMode')->default(false);
            $table->boolean('admin')->default(false);
            $table->boolean('blogs_control')->default(false);
            $table->boolean('projects_control')->default(false);
            $table->boolean('about_control')->default(false);
            $table->boolean('testimonial_control')->default(false);
            $table->boolean('exp_control')->default(false);
            $table->boolean('skils_control')->default(false);
            $table->boolean('user_control')->default(false);
            $table->boolean('service_control')->default(false);
            $table->boolean('contact_control')->default(false);
            $table->rememberToken()->nullable();
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
