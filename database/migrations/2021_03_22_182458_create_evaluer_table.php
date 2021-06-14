<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluers', function (Blueprint $table) {
            $table->integer('evaluer_id');
            $table->integer('entreprise_id');
            $table->integer('id')->index('Evaluer_User0_FK');
            $table->string('entreprise_evaluation')->nullable();
            $table->primary(['evaluer_id']);
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
        Schema::dropIfExists('evaluers');
    }
}
