<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->biginteger('kode_kategori')->unsigned();
            $table->biginteger('judul_buku')->unsigned();
            $table->biginteger('nama')->unsigned();
            $table->date('tgl_beli');
            $table->integer('total_buku');
            $table->biginteger('harga');
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->foreign('kode_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('judul_buku')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('nama')->references('id')->on('pembeli')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('transaksi');
    }
}
