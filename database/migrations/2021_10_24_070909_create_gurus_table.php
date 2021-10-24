<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger("nik")->nullable(true);
            $table->string("nama");
            $table->unsignedBigInteger("nuptk")->nullable(true);
            $table->string("jk");
            $table->string("tempat_lahir");
            $table->string("tanggal_lahir");
            $table->unsignedBigInteger("nip");
            $table->string("status_kepeg");
            $table->string("jenis_mapel");
            $table->string("agama");
            $table->string("alamat");
            $table->string("hp");
            $table->string("email");
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
