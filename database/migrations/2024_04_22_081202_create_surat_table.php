<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratTable extends Migration
{
    public function up()
    {
        Schema::create('surat', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nomor_surat');
            $table->date('tanggal');
            $table->string('pengirim');
            $table->string('penerima');
            $table->text('perihal');
            $table->integer('lampiran')->nullable();
            $table->enum('status', ['belum dibaca', 'dibaca', 'ditindaklanjuti'])->default('belum dibaca');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surat');
    }
}
