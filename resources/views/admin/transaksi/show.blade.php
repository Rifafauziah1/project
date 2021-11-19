@extends('layouts.admin')
@section('header')
<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Transaksi</h1>
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
                        <input type="number" name="kode_kategori" value="{{$transaksi->kode_kategori}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control" value="{{$transaksi->judul_buku}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" value="{{$transaksi->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Beli</label>
                        <input type="date" name="tgl_beli" value="{{$transaksi->tgl_beli}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Total Buku</label>
                        <input type="number" name="total_buku" value="{{$transaksi->total_buku}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="number" name="harga" value="{{$transaksi->harga}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Bayar</label>
                        <input type="number" name="bayar" value="{{$transaksi->bayar}}" class="form-control" readonly>
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