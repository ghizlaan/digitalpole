<?php 


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstimationsTable extends Migration
{
    public function up()
    {
        Schema::create('estimations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_client');
            $table->unsignedBigInteger('id_projet');
            $table->decimal('cout', 8, 2);
            $table->integer('délais');
            $table->timestamps();

            // Définition des clés étrangères
            $table->foreign('id_client')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('id_projet')->references('id')->on('projets')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('estimations', function (Blueprint $table) {
            $table->dropForeign(['id_client']);
            $table->dropForeign(['id_projet']);
        });
        Schema::dropIfExists('estimations');
    }
}

