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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dokter');
            $table->string('sip');
            $table->string('str');
            $table->date('exp_sip');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('id_spesialis');
            $table->date('tgl_praktek');
            $table->boolean('status');
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
        Schema::dropIfExists('dokters');
    }
};
