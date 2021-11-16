<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //membuat sample penulis
        $kategori1 = Kategori::create(['id_kategori'=>'123']);
        $kategori2 = Kategori::create(['id_kategori'=>'213']);
        $kategori3 = Kategori::create(['id_kategori'=>'312']);
        $kategori4 = Kategori::create(['id_kategori'=>'234']);

       
    }
}
