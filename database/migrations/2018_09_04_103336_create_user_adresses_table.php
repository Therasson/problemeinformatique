<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            /**
             * ville
             * quartier
             * situation géographique
             */
            $table->string('name');
            $table->timestamps();
        });
        Schema::table('user_adresses', function($table) {
            $table->foreign('user_id')
                ->references('id')->on('users')
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
        Schema::table('user_adresses', function(Blueprint $table) {
            $table->dropForeign('user_adresses_user_id_foreign');
        });

        Schema::dropIfExists('user_adresses');
    }
}
