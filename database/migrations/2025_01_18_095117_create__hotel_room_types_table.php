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
        Schema::create('_hotel_room_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('content');
            $table->integer('capacity');
            $table->float('price');
            $table->integer('room_type_pictures_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_hotel_room_types');
    }
};
