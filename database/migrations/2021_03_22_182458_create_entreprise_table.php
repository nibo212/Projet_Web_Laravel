<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrepriseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreprises', function (Blueprint $table) {
            $table->integer('entreprise_id', true);
            $table->string('entreprise_nom')->nullable();
            $table->string('email')->nullable();
            $table->string('entreprise_secteur')->nullable();
            $table->integer('entreprise_nb_stagiaires')->nullable();
            $table->string('entreprise_description')->nullable();
            $table->tinyInteger('entreprise_visible')->nullable();
            $table->string('localite_ville')->nullable();
            $table->bigInteger('localite_cp')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entreprises');
    }
}
