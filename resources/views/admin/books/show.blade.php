@extends('layouts.admin')
@section('header')
<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h2 class="m-0">Show Data Buku</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Kode Kategori</label>
                        <input type="number" name="title" value="{{$books->kode_kategori}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="{{$books->penerbit}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Penulis</label>
                        <input type="text" name="penulis" value="{{$books->penulis}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="judul_buku" value="{{$books->judul_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <input type="text" name="deskripsi" value="{{$books->deskripsi}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Stok</label>
                        <input type="number" name="stok" value="{{$books->stok}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Cover Buku</label>
                        <br>
                        <img src="{{$books->image()}}" style="width:350px; height:350px; padding:10px;">
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/books')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection