<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembeli;
class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pembeli = Pembeli::all();
        return view ('admin.pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.pembeli.create');
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
                'nama'=>'required',
                'no_hp'=>'required',
                'alamat'=>'required',
                'tgl_beli'=>'required',
            ]);
            $pembeli = new Pembeli;
            $pembeli->nama = $request->nama;
            $pembeli->no_hp = $request->no_hp;
            $pembeli->alamat = $request->alamat;
            $pembeli->tgl_beli = $request->tgl_beli;        
            $pembeli->save();
            return redirect()->route('pembeli.index');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pembeli = Pembeli::findOrFail($id);
        return view('admin.pembeli.show', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $pembeli = Pembeli::findOrFail($id);
        return view('admin.pembeli.edit', compact('pembeli'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nama'=>'required',
            'no_hp'=>'required',
            'alamat'=>'required',
            'tgl_beli'=>'required',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama = $request->nama;
        $pembeli->no_hp = $request->no_hp;
        $pembeli->alamat = $request->alamat;
        $pembeli->tgl_beli = $request->tgl_beli;        
        $pembeli->save();
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembeli  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('pembeli.index');
    }
}
