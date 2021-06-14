<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPossederDroitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posseder_droits', function (Blueprint $table) {
            $table->foreign('gestion_id', 'Posseder_Droit_Droit_FK')->references('id')->on('droits')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id', 'Posseder_Droit_User0_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posseder_droits', function (Blueprint $table) {
            $table->dropForeign('Posseder_Droit_Droit_FK');
            $table->dropForeign('Posseder_Droit_User0_FK');
        });
    }
}
