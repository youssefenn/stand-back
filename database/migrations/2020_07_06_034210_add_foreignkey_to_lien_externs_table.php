<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignkeyToLienExternsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lien_externs', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('stand_id');
             $table->foreign('stand_id')->references('id')->on('stands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lien_externs', function (Blueprint $table) {
            //
        });
    }
}
