<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeuxiemeSeance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn('situation_familiale');
            $table->boolean('maladie_chronique');
        });

        Schema::table('consultations', function (Blueprint $table) {

            $table->integer('heure_de_fin');
        });
        Schema::create('medicaments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libellé');
        });

        Schema::create('consultations_medicaments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantité_a_acheter');
            $table->string('durée');
            $table->string('postologies');
            $table->unsignedInteger('consultation_id')->nullable();
            $table->foreign('consultation_id')->references('id')->on('consultations');
            $table->unsignedInteger('medicament_id')->nullable();
            $table->foreign('medicament_id')->references('id')->on('medicaments');
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
        Schema::dropIfExists('consultations_medicaments');
    }
}