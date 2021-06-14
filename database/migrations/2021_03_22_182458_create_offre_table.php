<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->integer('offre_id', true);
            $table->string('offre_promotion')->nullable();
            $table->integer('offre_duree')->nullable();
            $table->integer('offre_remuneration')->nullable();
            $table->date('offre_date')->nullable();
            $table->integer('offre_place')->nullable();
            $table->string('offre_titre')->nullable();
            $table->string('offre_description')->nullable();
            $table->integer('entreprise_id')->index('Offre_Entreprise_FK');
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
        Schema::dropIfExists('offres');
    }
}
