<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->integer('user_id', true);
            $table->string('user_mdp')->nullable();
            $table->string('user_nom')->nullable();
            $table->string('user_prenom')->nullable();
            $table->string('user_centre')->nullable();
            $table->string('user_role')->nullable();
            $table->integer('email_id')->unique('User_Email_AK');
            $table->integer('promo_id')->nullable()->index('User_promotion0_FK');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
