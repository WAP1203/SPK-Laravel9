<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alternatif', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama_alternatif');
            $table->string('kriteria_1');
            $table->string('kriteria_2');
            $table->string('kriteria_3');
            $table->string('kriteria_4');
            $table->string('kriteria_5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alternatif');
    }
};