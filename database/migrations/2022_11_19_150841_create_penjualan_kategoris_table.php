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
        Schema::create('penjualan_kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('kd_penjualan');
            $table->string('no_faktur');
            $table->string('kd_kategori');
            $table->date("tanggal_jual");
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
        Schema::dropIfExists('penjualan_kategoris');
    }
};
