<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::with('kategori')->get();
        return view ('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori = Kategori::all();
        return view('admin.books.create', compact('kategori'));
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
            'penerbit'=>'required',
            'penulis'=>'required',
            'judul_buku'=>'required',
            'deskripsi'=>'required',
            'stok'=>'required',
            'cover' => 'required|image|max:2048',
    ]);

    $books = new Books;
    $books->kode_kategori = $request->kode_kategori;
    $books->penerbit = $request->penerbit;
    $books->penulis = $request->penulis;
    $books->judul_buku = $request->judul_buku;
    $books->deskripsi = $request->deskripsi;
    $books->stok = $request->stok;
    if ($request->hasFile('cover')){
        $books->deleteImage();
        $image = $request->file('cover');
        $name = rand(1000, 9999) . $image->getClientOriginalName();
        $image->move('images/books', $name);
        $books->cover = $name;
    }
    $books->save();
    return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $books = Books::findOrFail($id);
        return view('admin.books.show', compact('books'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $books = Books::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.books.edit', compact('books','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         //validasi data
         $validated = $request->validate([
            'kode_kategori'=>'required',
            'penerbit'=>'required',
            'penulis'=>'required',
            'judul_buku'=>'required',
            'deskripsi'=>'required',
            'stok'=>'required',
            'cover' => 'required|image|max:2048',
    ]);

    $books = Books::findOrFail($id);
    $books->kode_kategori = $request->kode_kategori;
    $books->penerbit = $request->penerbit;
    $books->penulis = $request->penulis;
    $books->judul_buku = $request->judul_buku;
    $books->deskripsi = $request->deskripsi;
    $books->stok = $request->stok;
    if ($request->hasFile('cover')){
        $books->deleteImage();
        $image = $request->file('cover');
        $name = rand(1000, 9999) . $image->getClientOriginalName();
        $image->move('images/books', $name);
        $books->cover = $name;
    }
    $books->save();
    return redirect()->route('books.index');
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
        $books = Books::findOrFail($id);
        $books->delete();
        return redirect()->route('books.index');
    }
}



