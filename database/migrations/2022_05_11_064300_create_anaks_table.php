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
        Schema::create('anaks', function (Blueprint $table) {
            $table->id();
            // $table->string('slug');
            $table->string('nama_anak');
            $table->string('nik_anak');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('status');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('jenis_kelamin');
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
        Schema::dropIfExists('balitas');
    }
};
