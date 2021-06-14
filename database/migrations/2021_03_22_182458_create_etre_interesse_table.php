<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtreInteresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etre_interesses', function (Blueprint $table) {
            $table->integer('entreprise_id');
            $table->integer('competence_id')->index('Etre_interesse_Competences0_FK');
            $table->primary(['entreprise_id', 'competence_id']);
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
        Schema::dropIfExists('etre_interesses');
    }
}
