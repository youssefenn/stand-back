<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyEspaceExpositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('espace_expositions', function (Blueprint $table) {
            //
              $table->unsignedBigInteger('evenement_id');
             $table->foreign('evenement_id')->references('id')->on('evenements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('espace_expositions', function (Blueprint $table) {
            //
        });
    }
}
