<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCommandesProduits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_commandes_produits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantité_commandé');
            $table->unsignedInteger('id_commande')->nullable();
            $table->foreign('id_commande')->references('id')->on('commandes');
            $table->unsignedInteger('id_produit')->nullable();
            $table->foreign('id_produit')->references('id')->on('produits');
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
        Schema::dropIfExists('table_commandes_produits');
    }
}