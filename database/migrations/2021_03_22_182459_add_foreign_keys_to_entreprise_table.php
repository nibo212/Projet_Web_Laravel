<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEntrepriseTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void

    public function up()
    {
        Schema::table('entreprise', function (Blueprint $table) {
            $table->foreign('email', 'Entreprise_Email_FK')->references('email')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }


     * Reverse the migrations.
     *
     * @return void

    public function down()
    {
        Schema::table('entreprise', function (Blueprint $table) {
            $table->dropForeign('Entreprise_Email_FK');
        });
    }*/
}
