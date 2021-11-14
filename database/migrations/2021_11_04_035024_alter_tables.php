<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->foreign('menteeId')->references('id')->on('mentee');
            $table->foreign('mentorId')->references('id')->on('mentor');
        });

        Schema::table('mentor', function (Blueprint $table) {
            $table->foreign('categoryId')->references('id')->on('category');
        });

        Schema::table('mentorskill', function (Blueprint $table) {
            $table->foreign('mentorId')->references('id')->on('mentor');
            $table->foreign('skillId')->references('id')->on('skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
