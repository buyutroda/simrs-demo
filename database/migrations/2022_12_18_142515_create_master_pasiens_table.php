<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_mr');
            $table->string('nama_pasien');
            $table->string('nama_pj');
            $table->enum('jenis_kelamin',['laki-laki','perempuan'])->change();
            $table->string('alamat');
            $table->string('no_ktp');
            $table->string('no_bpjs');
            $table->string('no_hp');
            $table->string('status');
            $table->string('agama');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->string('kabupaten_kota');
            $table->string('suku');
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
        Schema::dropIfExists('master_pasiens');
    }
};
