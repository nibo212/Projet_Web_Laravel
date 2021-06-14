<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSouhaiteWishListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->foreign('offre_id', 'Souhaite_wish_list__Offre_FK')->references('offre_id')->on('offres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id', 'Souhaite_wish_list__User0_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wishlists', function (Blueprint $table) {
            $table->dropForeign('Souhaite_wish_list__Offre_FK');
            $table->dropForeign('Souhaite_wish_list__User0_FK');
        });
    }
}
