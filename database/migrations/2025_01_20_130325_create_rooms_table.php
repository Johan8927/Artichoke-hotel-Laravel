<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id(); // Clé primaire
            $table->string('name'); // Nom de la chambre
            $table->text('description')->nullable(); // Description (facultative)
            $table->decimal('price', 8, 2); // Prix
            $table->integer('capacity'); // Capacité de la chambre (nombre de personnes)
            $table->unsignedBigInteger('hotel_id'); // Référence vers la table 'hotels'
            $table->timestamps();

            // Définir une clé étrangère vers la table 'hotels'
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
