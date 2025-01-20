<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        if (!Schema::hasTable('landing_page_hero')) {
            Schema::create('landing_page_hero', function (Blueprint $table) {
                $table->id();
                $table->string('section_name');
                $table->text('section_content');
                $table->foreignId('picture_id')->constrained('pictures')->onDelete('cascade');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('landing_page_hero');
    }
};
