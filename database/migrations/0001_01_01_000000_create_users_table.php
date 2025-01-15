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
        // Create the 'users' table
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('name')->nullable(); // Name can be null
            $table->string('email')->unique(); // Email must be unique
            $table->timestamp('email_verified_at')->nullable(); // Nullable for unverified emails
            $table->string('password'); // Password field
            $table->rememberToken(); // Token for "remember me" functionality
            $table->timestamps(); // Created and updated timestamps
        });

        // Create the 'password_reset_tokens' table
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary(); // Primary key on email
            $table->string('token'); // Reset token
            $table->timestamp('created_at')->nullable(); // Nullable created_at timestamp
        });

        // Create the 'sessions' table
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Session ID as primary key
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete(); // Foreign key to users table
            $table->string('ip_address', 45)->nullable(); // IP address (supports IPv4 and IPv6)
            $table->text('user_agent')->nullable(); // User agent details
            $table->longText('payload'); // Session payload
            $table->integer('last_activity')->index(); // Last activity timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop tables in reverse order to handle foreign key constraints
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
