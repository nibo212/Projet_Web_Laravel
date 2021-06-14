<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEtreInteresseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etre_interesses', function (Blueprint $table) {
            $table->foreign('competence_id', 'Etre_interesse_Competences0_FK')->references('competence_id')->on('competences')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('entreprise_id', 'Etre_interesse_Entreprise_FK')->references('entreprise_id')->on('entreprises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('etre_interesses', function (Blueprint $table) {
            $table->dropForeign('Etre_interesse_Competences0_FK');
            $table->dropForeign('Etre_interesse_Entreprise_FK');
        });
    }
}
