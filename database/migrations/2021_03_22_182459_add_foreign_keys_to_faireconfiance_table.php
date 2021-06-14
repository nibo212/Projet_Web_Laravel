<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFaireconfianceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faireconfiances', function (Blueprint $table) {
            $table->foreign('entreprise_id', 'Faireconfiance_Entreprise_FK')->references('entreprise_id')->on('entreprises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id', 'Faireconfiance_User0_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faireconfiances', function (Blueprint $table) {
            $table->dropForeign('Faireconfiance_Entreprise_FK');
            $table->dropForeign('Faireconfiance_User0_FK');
        });
    }
}
