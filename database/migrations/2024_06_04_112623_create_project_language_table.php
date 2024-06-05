<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectLanguageTable extends Migration
{
    public function up()
    {
        Schema::create('project_language', function (Blueprint $table) {
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('language_id');
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->primary(['project_id', 'language_id']);
            // Ajoutez d'autres colonnes si nécessaire
            // $table->timestamps(); si vous souhaitez inclure les colonnes created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_language');
    }
}
