<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formation_models', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('libelle');
            $table->text('description');
            $table->string('image');
            $table->string('video');
            $table->date('datefin');
            $table->date('datedebut');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formation_models');
    }
}
