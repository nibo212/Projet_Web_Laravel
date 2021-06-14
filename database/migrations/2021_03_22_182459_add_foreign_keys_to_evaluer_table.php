<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEvaluerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluers', function (Blueprint $table) {
            $table->foreign('entreprise_id', 'Evaluer_Entreprise_FK')->references('entreprise_id')->on('entreprises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id', 'Evaluer_User0_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluers', function (Blueprint $table) {
            $table->dropForeign('Evaluer_Entreprise_FK');
            $table->dropForeign('Evaluer_User0_FK');
        });
    }
}
