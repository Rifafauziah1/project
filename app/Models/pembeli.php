<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;
    protected $table = "pembeli";
    //memberikan akses field apa saja yg boleh diisi
    protected $fillable = ['nama','no_hp','alamat','tgl_beli'];
    //memberikan akses field apa saja yg boleh dilihat atau dikeluarkan
    protected $visible = ['nama','no_hp','alamat','tgl_beli'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "Book"
    public function books()
    {
        //model author bisa memiliki banyak data dari
        //model book melalui fk "author_id"
        return $this->hasMany('App\Models\Transaksi','id_pembeli');
}
}
