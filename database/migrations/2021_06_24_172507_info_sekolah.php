<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoSekolah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_sekolah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekolah', 150);
            $table->string('visi', 250);
            $table->string('misi', 250);
            $table->string('foto', 250);
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
        Schema::dropIfExists('info_sekolah');
    }
}
