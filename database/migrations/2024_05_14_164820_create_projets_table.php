<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom du projet
            $table->string('type_projet'); // Type du projet
            $table->text('description'); // Description du projet
            $table->string('technologies')->nullable(); // Technologies utilisées dans le projet
            $table->string('design_preference'); // Préférence de design
            $table->string('pages'); // Pages du projet
            $table->integer('additional_pages'); // Pages supplémentaires du projet
            $table->foreignId('client_id')->constrained()->onDelete('cascade'); // Lier le projet au client
            $table->timestamps(); // Créé à et Mis à jour à
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets');
    }
}
