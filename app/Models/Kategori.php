<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{

    use HasFactory;
    protected $table = "kategori";
    //memberikan akses field apa saja yg boleh diisi
    protected $fillable = ['kode_kategori','nama_kategori'];
    //memberikan akses field apa saja yg boleh dilihat atau dikeluarkan
    protected $visible = ['kode_kategori','nama_kategori'];

    //mencatat waktu pembuatan & update data secara otomatis
    public $timestamps = true;

    //membuat relasi one to many dengan model "Book"
    public function books()
    {
        //model author bisa memiliki banyak data dari
        //model book melalui fk "author_id"
        return $this->hasMany('App\Models\Books','kode_kategori');
    }
}
