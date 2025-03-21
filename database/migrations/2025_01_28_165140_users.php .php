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
            $table->string('civility')->nullable();
            $table->string('firstName');
            $table->string('lastName');
            $table->string('password');
            $table->string('address');
            $table->string('ZIP_code');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->boolean('admin_status');
            $table->string('client_status')->nullable();
            $table->timestamp('email_verified_at');
            $table->rememberToken();
            $table->timestamps();
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        //
    }
};
