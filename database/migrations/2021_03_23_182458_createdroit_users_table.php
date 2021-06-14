<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroitUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('droit_user', function (Blueprint $table) {

            $table->integer('user_id');
            $table->integer('droit_id');
            
            $table->primary(['droit_id', 'user_id']);
            
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
    
            $table->foreign('droit_id')
            ->references('id')
            ->on('droits')
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
        Schema::dropIfExists('droit_user');
    }
}