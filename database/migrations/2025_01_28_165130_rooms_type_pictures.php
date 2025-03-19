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
        Schema::create('rooms_type_pictures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rooms_type')->constrained('rooms_type')->onDelete('cascade');;
            $table->foreignId('id_pictures')->constrained('pictures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_type_pictures');
        //
    }
};
