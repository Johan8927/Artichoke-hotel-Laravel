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
        if (!Schema::hasTable('room')) {
            Schema::create('room', function (Blueprint $table) {
                $table->id();
                $table->integer('id_Room');
                $table->integer('id_RoomType');
                $table->integer('id_Hotel');
                $table->integer('RoomNumber');
                $table->timestamps();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('room');
    }
};
