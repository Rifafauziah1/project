@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Tambah Data Transaksi</h1>
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
                <div class="card-header">Data Transaksi</div>
                <div class="card-body">
                   <form action="{{route('transaksi.store')}}" method="post">
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
                        <label for="">Masukan Judul Buku</label>
                        <select name="judul_buku" class="form-control @error('judul_buku') is-invalid @enderror">
                            @foreach($books as $data)
                            <option value="{{$data->id}}">{{$data->judul_buku}}</option>
                            @endforeach
                        </select>
                        @error('judul_buku')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Masukan Nama Pembeli</label>
                        <select name="nama" class="form-control @error('nama') is-invalid @enderror">
                            @foreach($pembeli as $data)
                            <option value="{{$data->id}}">{{$data->nama}}</option>
                            @endforeach
                        </select>
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label for="">Tanggal Beli</label>
                            <input type="date" name="tgl_beli" class="form-control @error('tgl_beli') is-invalid @enderror">
                             @error('tgl_beli')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Total Buku</label>
                            <input type="number" name="total_buku" class="form-control @error('total_buku') is-invalid @enderror">
                             @error('total_buku')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control @error('harga') is-invalid @enderror">
                             @error('harga')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Bayar</label>
                            <input type="number" name="bayar" class="form-control @error('bayar') is-invalid @enderror">
                             @error('bayar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Kembalian</label>
                            <input type="number" name="kembalian" class="form-control @error('kembalian') is-invalid @enderror">
                             @error('kembalian')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> -->
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