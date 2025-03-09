<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisSuratTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_surat', function (Blueprint $table) {
            $table->id();
            $table->string('nama_jenis_surat');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_surat');
    }
}
