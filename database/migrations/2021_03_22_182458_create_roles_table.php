<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
        });

        Schema::create('droit_role', function (Blueprint $table) {

            $table->unsignedBigInteger('role_id');
            $table->integer('droit_id');
            
            $table->primary(['role_id', 'droit_id']);
            
            $table->foreign('droit_id')
            ->references('id')
            ->on('droits')
            ->onDelete('cascade');
    
            $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('droits');
    }
}
