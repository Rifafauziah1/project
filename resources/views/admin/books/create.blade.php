@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Buku</h1>
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
                <div class="card-header">Data Buku</div>
                <div class="card-body">
                   <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="">Masukan Kode Kategori</label>
                        <select name="kode_kategori" class="form-control @error('kode_kategori') is-invalid @enderror">
                            @foreach($kategori as $data)
                            <option value="{{$data->id}}">{{$data->kode_kategori}}</option>
                            @endforeach
                        </select>
                        @error('kode_kategori')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Penerbit</label>
                            <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror">
                             @error('penerbit')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Penulis</label>
                            <input type="text" name="penulis" class="form-control @error('penulis') is-invalid @enderror">
                             @error('penulis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Judul Buku</label>
                            <input type="text" name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror">
                             @error('judul_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Deskripsi</label>
                            <input type="text" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror">
                             @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Stok</label>
                            <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror">
                             @error('stok')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                        <label for="">Masukan Cover Buku</label>
                        <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror">
                        @error('cover')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection