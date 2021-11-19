@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pembeli</h1>
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
                <div class="card-header">
                    Transaksi
                    <a href="{{route('transaksi.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Transaksi</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Kode Kategori</th>
                                <th>Judul buku</th>
                                <th>Nama Pembeli</th>
                                <th>Tanggal Beli</th>
                                <th>Total Buku</th>
                                <th>Harga</th>
                                <th>Bayar</th>
                                <th>Kembalian</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($transaksi as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kategori->kode_kategori}}</td>
                                <td>{{$data->books->judul_buku}}</td>
                                <td>{{$data->pembeli->nama}}</td>
                                <td>{{$data->tgl_beli}}</td>
                                <td>{{$data->total_buku}}</td>
                                <td>{{$data->harga}}</td>
                                <td>{{$data->bayar}}</td>
                                <td>{{$data->kembalian}}</td>
                                <td>
                                    <form action="{{route('transaksi.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('transaksi.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                        <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection