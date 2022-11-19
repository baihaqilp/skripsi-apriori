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
        Schema::create('itemset2s', function (Blueprint $table) {
            $table->id();
            $table->string('kd_uji');
            $table->string('kd_kategori_a');
            $table->string('kd_kategori_b');
            $table->string('jml_transaksi');
            $table->double('kd_support');
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
        Schema::dropIfExists('itemset2s');
    }
};
