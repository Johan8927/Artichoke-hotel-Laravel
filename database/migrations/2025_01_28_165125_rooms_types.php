<?php
// Exemple de migration pour la table rooms_types
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rooms_types', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('Description');
            $table->integer('Maximumcapacity');
            $table->decimal('price', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms_types');
    }
};
