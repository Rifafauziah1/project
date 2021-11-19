<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Books;
use App\Models\Pembeli;
use App\Models\Transaksi;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $transaksi = Transaksi::with('kategori','books','pembeli')->get();
        return view ('admin.transaksi.index', compact('transaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $books = Books::all();
        $kategori = Kategori::all();
        $pembeli = Pembeli::all();
        return view('admin.transaksi.create', compact('kategori','books','pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi data
        $validated = $request->validate([
            'kode_kategori'=>'required',
            'judul_buku'=>'required',
            'nama'=>'required',
            'tgl_beli'=>'required',
            'total_buku'=>'required',
            'harga' => 'required',
            'bayar'=>'required',
    ]);
    $transaksi = new Transaksi;
    $transaksi->kode_kategori = $request->kode_kategori;
    $transaksi->judul_buku = $request->judul_buku;
    $transaksi->nama = $request->nama;
    $transaksi->tgl_beli = $request->tgl_beli;
    $transaksi->total_buku = $request->total_buku;
    $transaksi->harga = $request->harga;
    $transaksi->bayar = $request->bayar;
    $transaksi->kembalian =$transaksi->bayar - ($transaksi->total_buku * $transaksi->harga);
    $transaksi->save();
    return redirect()->route('transaksi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\transaksi  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $transaksi = Transaksi::findOrFail($id);
        return view('admin.transaksi.show', compact('transaksi'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}



