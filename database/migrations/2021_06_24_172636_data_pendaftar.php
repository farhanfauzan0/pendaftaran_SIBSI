<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataPendaftar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pendaftar', function (Blueprint $table) {
            $table->id();
            $table->string('id_client', 10);
            $table->string('nama', 200);
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->string('alamat', 250);
            $table->string('nama_ibu', 200);
            $table->string('tempat_lahir_ibu', 100);
            $table->date('tgl_lahir_ibu');
            $table->string('alamat_ibu', 250);
            $table->string('nama_ayah', 200);
            $table->string('tempat_lahir_ayah', 100);
            $table->date('tgl_lahir_ayah');
            $table->string('alamat_ayah', 250);
            $table->string('kk', 250);
            $table->string('ijazah', 250);
            $table->string('nilai_rapot_akhir', 250);
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
        Schema::dropIfExists('data_pendaftar');
    }
}
