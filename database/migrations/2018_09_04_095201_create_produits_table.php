<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categorie_id')->unsigned();
            $table->string('name');
            $table->integer('prix');
            $table->string('file');
            $table->text('description');
            $table->integer('etat');
            $table->timestamps();
        });
        Schema::table('produits', function($table) {
            $table->foreign('categorie_id')
                ->references('id')->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produits', function(Blueprint $table) {
            $table->dropForeign('produits_categorie_id_foreign');
        });

        Schema::dropIfExists('produits');
    }
}
