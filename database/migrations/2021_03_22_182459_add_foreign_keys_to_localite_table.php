<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLocaliteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('localites', function (Blueprint $table) {
            $table->foreign('entreprise_id', 'Localite_Entreprise_FK')->references('entreprise_id')->on('entreprises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
           
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localites', function (Blueprint $table) {
            $table->dropForeign('Localite_Entreprise_FK');
        });
    }
}
