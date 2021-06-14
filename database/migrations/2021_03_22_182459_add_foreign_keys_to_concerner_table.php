<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToConcernerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('concerners', function (Blueprint $table) {
            $table->foreign('offre_id', 'Concerner_Offre_FK')->references('offre_id')->on('offres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('promo_id', 'Concerner_promotion0_FK')->references('promo_id')->on('promotions')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('concerners', function (Blueprint $table) {
            $table->dropForeign('Concerner_Offre_FK');
            $table->dropForeign('Concerner_promotion0_FK');
        });
    }
}
