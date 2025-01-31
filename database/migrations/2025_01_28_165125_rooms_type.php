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
        Schema::create('rooms_type', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nom unique du type de chambre
            $table->string('Description'); // Brève description
            $table->integer('Maximumcapacity'); // Capacité max aléatoire (entre 1 et 10)
            $table->float('price', 8, 2); // Prix aléatoire
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms_type');
    }
};
