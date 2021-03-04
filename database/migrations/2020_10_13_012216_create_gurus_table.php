<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->bigIncrements('id_guru');
            $table->string('nama');
            $table->string('email');
            $table->string('password');
            $table->string('ttl');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('kontak');
            $table->string('foto');
            $table->string('sertifikat');
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
        Schema::dropIfExists('gurus');
    }
}
