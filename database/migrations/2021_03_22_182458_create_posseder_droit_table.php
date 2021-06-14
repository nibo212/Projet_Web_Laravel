<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePossederDroitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posseder_droits', function (Blueprint $table) {
            $table->integer('gestion_id')->index('Posseder_Droit_Droit_FK');
            $table->integer('id')->index('Posseder_Droit_User0_FK');
            $table->primary(['gestion_id', 'id']);
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
        Schema::dropIfExists('posseder_droits');
    }
}
