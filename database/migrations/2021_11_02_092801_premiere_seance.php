<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PremiereSeance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('numero');
            $table->date('date_consultation');
            $table->enum('sexe', ['h', 'f']);
            $table->enum('situation_familiale', ['Marié', 'Célibataire', 'veuf']);
            $table->timestamps();
        });

        Schema::create('consultations', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('heure');
            $table->text('symptomes');
            $table->string('resultat');
            $table->decimal('poids', 5, 2);
            $table->decimal('taille', 5, 2);
            $table->decimal('tention_arterielle', 5, 2);
            $table->boolean('prends_medicaments');
            $table->unsignedInteger('id_patient')->nullable();
            $table->foreign('id_patient')->references('id')->on('patients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultations');
        Schema::dropIfExists('patients');
    }
}