<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Créer la table 'pictures' si elle n'existe pas déjà
        if (!Schema::hasTable('pictures')) {
            Schema::create('pictures', function (Blueprint $table) {
                $table->id(); // Clé primaire
                $table->string('name'); // Nom de l'image
                $table->string('path'); // Chemin de l'image
                $table->timestamps(); // Champs 'created_at' et 'updated_at'
            });
        }

        // Créer la table 'landing_page_hero' avec une relation vers 'pictures'
        if (!Schema::hasTable('landing_page_hero')) {
            Schema::create('landing_page_hero', function (Blueprint $table) {
                $table->id(); // Clé primaire
                $table->string('section_name'); // Nom de la section
                $table->text('section_content'); // Contenu de la section
                $table->foreignId('picture_id') // Référence vers la table 'pictures'
                ->constrained('pictures') // Contrainte de clé étrangère
                ->onDelete('cascade'); // Suppression en cascade
                $table->timestamps(); // Champs 'created_at' et 'updated_at'
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Supprimer les tables dans l'ordre inverse des dépendances
        Schema::dropIfExists('landing_page_hero');
        Schema::dropIfExists('pictures');
    }
};
