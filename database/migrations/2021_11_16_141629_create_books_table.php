<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->biginteger('kode_kategori')->unsigned();
            $table->string('penerbit');
            $table->string('penulis');
            $table->string('judul_buku');
            $table->string('deskripsi');
            $table->integer('stok');
            $table->string('cover')->nullable();
            $table->foreign('kode_kategori')->references('id')->on('kategori')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
