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
        Schema::create('gizis', function (Blueprint $table) {
            $table->id();
            // $table->string('slug');
            $table->string('BBU');
            $table->string('TBU');
            $table->string('BBTB');
            $table->double('Z_BBU', 8, 2);
            $table->double('Z_TBU', 8, 2);
            $table->double('Z_BBTB', 8, 2);
            $table->string('status_gizi');
            $table->double('z_score', 8, 2);
            $table->string('validasi');
            $table->timestamps();

            $table->foreignId('databalita_id')->constrained('balitas')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gizis');
    }
};
