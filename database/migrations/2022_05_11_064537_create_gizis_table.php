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
            $table->string('Z_BBU');
            $table->string('Z_TBU');
            $table->string('Z_BBTB');
            $table->timestamps();

            $table->foreignId('dataanak_id')->constrained('anaks')->onUpdate('cascade')->onDelete('cascade');
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
