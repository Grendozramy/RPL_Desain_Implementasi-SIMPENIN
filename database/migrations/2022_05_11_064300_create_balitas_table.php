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
        Schema::create('balitas', function (Blueprint $table) {
            $table->id();
            // $table->string('slug');
            $table->string('nama_balita');
            $table->integer('usia_balita');
            $table->string('status');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->string('hasil_berat_badan');
            $table->string('jenis_kelamin');
            $table->string('ideal');
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
