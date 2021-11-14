<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee', function (Blueprint $table) {
            $table->id('id');//Primary key
            $table->string('email')->unique();
            $table->string('password');
            $table->string('name');
            $table->string('profilPicture')->default('default.png');
            $table->integer('saldo')->default(0);
        });
        
        Schema::create('voucher', function (Blueprint $table) {
            $table->id('id');//Primary key
            $table->string('kode')->unique();
            $table->integer('balance');
            $table->boolean('statusPakai')->default(0);
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('invoiceId');//Primary key
            $table->integer('jumlahSesi');
            $table->string('statusPemesanan')->default('Pending');
            $table->text('description');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('menteeId');
            $table->unsignedBigInteger('mentorId');
        });

        Schema::create('mentor', function (Blueprint $table) {
            $table->id('id');//Primary key
            $table->string('name');
            $table->text('description');
            $table->integer('price');
            $table->string('ig');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('profilPicture')->default('default.png');
            $table->timestamp('updated_at')->useCurrent();
            $table->timestamp('created_at')->useCurrent();
            $table->unsignedBigInteger('categoryId');
        });

        Schema::create('category', function (Blueprint $table) {
            $table->id('id');//Primary key
            $table->string('name');
        });

        Schema::create('skill', function (Blueprint $table) {
            $table->id('id');//Primary key
            $table->string('name');
        });

        Schema::create('mentorskill', function (Blueprint $table) {
            $table->unsignedBigInteger('mentorId');
            $table->unsignedBigInteger('skillId');

            $table->primary(['mentorId', 'skillId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mentee');
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('mentor');
        Schema::dropIfExists('category');
        Schema::dropIfExists('skill');
        Schema::dropIfExists('mentorskill');
    }
}
