<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksi";
    
    protected $fillable = ['kode_kategori','judul_buku','nama','tgl_beli','total_buku','harga','bayar','kembalian'];
    protected $visible = ['kode_kategori','judul_buku','nama','tgl_beli','total_buku','harga','bayar','kembalian'];
    public $timestamps = true;

    //membuat relasi one to many dengan model author
    public function kategori()
    {
        //data model book bisa dimiliki oleh model author
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Kategori','kode_kategori');

    }
    public function books()
    {
        //data model book bisa dimiliki oleh model author
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Books','judul_buku');
    }
    public function pembeli()
    {
        //data model book bisa dimiliki oleh model author
        //melalui fk "author_id"
        return $this->belongsTo('App\Models\Pembeli','nama');

    }
}