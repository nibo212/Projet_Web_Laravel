<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRechercherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recherchers', function (Blueprint $table) {
            $table->foreign('competence_id', 'Rechercher_Competences_FK')->references('competence_id')->on('competences')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('offre_id', 'Rechercher_Offre0_FK')->references('offre_id')->on('offres')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recherchers', function (Blueprint $table) {
            $table->dropForeign('Rechercher_Competences_FK');
            $table->dropForeign('Rechercher_Offre0_FK');
        });
    }
}
