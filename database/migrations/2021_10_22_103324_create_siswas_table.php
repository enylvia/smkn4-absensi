<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId("jurusan_id")->nullable(false);
            $table->string("nama");
            $table->string("nipd");
            $table->string("jk");
            $table->string("nisn");
            $table->string("tempat_lahir");
            $table->string("tgl_lahir");
            $table->string("agama");
            $table->integer("sakit");
            $table->integer("izin");
            $table->integer("alpa");
            $table->integer("hadir");
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
        Schema::dropIfExists('siswas');
    }
}
