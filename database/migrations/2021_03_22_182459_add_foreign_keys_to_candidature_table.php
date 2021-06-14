<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCandidatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('candidatures', function (Blueprint $table) {
            $table->foreign('entreprise_id', 'Candidature_Entreprise_FK')->references('entreprise_id')->on('entreprises')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id', 'Candidature_User0_FK')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
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
        Schema::table('candidatures', function (Blueprint $table) {
            $table->dropForeign('Candidature_Entreprise_FK');
            $table->dropForeign('Candidature_User0_FK');
        });
    }
}
