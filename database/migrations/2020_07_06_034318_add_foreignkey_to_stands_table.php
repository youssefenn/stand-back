<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToStandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stands', function (Blueprint $table) {
            //
             $table->unsignedBigInteger('theme_id');
             $table->foreign('theme_id')->references('id')->on('themes');
             $table->unsignedBigInteger('espace_exposition_id');
             $table->foreign('espace_exposition_id')->references('id')->on('espace_expositions');
             $table->unsignedBigInteger('statu_id');
             $table->foreign('statu_id')->references('id')->on('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stands', function (Blueprint $table) {
            //
        });
    }
}
