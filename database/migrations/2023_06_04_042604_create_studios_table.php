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
        Schema::create('studio', function (Blueprint $table) {
            $table->integer('id');
            $table->string('nama');
            $table->string('lokasi');
            $table->string('kontak');
            $table->string('peralatan');
            $table->integer('biaya_tarif');
            $table->string('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studio');
    }
};
