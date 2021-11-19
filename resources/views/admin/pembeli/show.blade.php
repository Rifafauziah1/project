@extends('layouts.admin')
@section('header')
<div class="conten-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Buku</h1>
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
                        <label for="">Nama Pembeli</label>
                        <input type="text" name="nama" value="{{$pembeli->nama}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">No Handhone</label>
                        <input type="number" name="no_hp" class="form-control" value="{{$pembeli->no_hp}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" value="{{$pembeli->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Beli</label>
                        <input type="text" name="tgl_beli" value="{{$pembeli->tgl_beli}}" class="form-control" readonly>
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