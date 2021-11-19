<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $fillable = ['kode_kategori','penerbit','penulis','judul_buku','deskripsi','stok','cover'];
    protected $visible = ['kode_kategori','penerbit','penulis','judul_buku','deskripsi','stok','cover'];
    public $timestamps = true;

    //membuat relasi one to many dengan model author
    public function kategori()
    {
        //data model book bisa dimiliki oleh model author
        //melalui fk "kode_kategori"
        return $this->belongsTo('App\Models\Kategori','kode_kategori');    
    }

    public function image()
    {
        if($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return asset('images/books/' . $this->cover);
        } else {
            return asset('images/no_image.png');
        }
    }
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/books/' . $this->cover))) {
            return unlink(public_path('images/books/' . $this->cover));
        }
    }
}
