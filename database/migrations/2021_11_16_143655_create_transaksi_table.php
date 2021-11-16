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
            $table->biginteger('id_buku')->unsigned();
            $table->biginteger('id_pembeli')->unsigned();
            $table->date('tgl_beli');
            $table->integer('total_buku');
            $table->integer('harga');
            $table->integer('bayar');
            $table->integer('kembalian');
            $table->foreign('id_buku')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('pembeli')->onUpdate('cascade')->onDelete('cascade');
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
