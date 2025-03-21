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
        Schema::create('amenities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('id_picture'); // Assurez-vous que cette colonne est définie
            $table->text('content');
            $table->timestamps();

            // Si c'est une clé étrangère
            $table->foreign('id_picture')->references('id')->on('pictures')->onDelete('cascade');
        });



        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amenities');
        //
    }
};
