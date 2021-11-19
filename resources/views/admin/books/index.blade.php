@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Buku</h1>
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
                    Data Buku
                    <a href="{{route('books.create')}}" class="btn btn-sm btn-outline-primary float-right">Tambah Penulis</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Nomor</th>
                                <th>Kode Kategori</th>
                                <th>Penerbit</th>
                                <th>Penulis</th>
                                <th>Judul Buku</th>
                                <th>Deskripsi</th>
                                <th>Stok</th>
                                <th>Cover</th>
                                <th>Aksi</th>
                            </tr>
                            @php $no=1; @endphp
                            @foreach($books as $data)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$data->kategori->kode_kategori}}</td>
                                <td>{{$data->penerbit}}</td>
                                <td>{{$data->penulis}}</td>
                                <td>{{$data->judul_buku}}</td>
                                <td>{{$data->deskripsi}}</td>
                                <td>{{$data->stok}}</td>
                                <td>{{$data->cover}}</td>

                                <td><img src="{{$data->image()}}" alt="" style="width:150px; height:150px;" alt="Cover"></td>
                                <td>
                                    <form action="{{route('books.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                        <a href="{{route('books.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                        <a href="{{route('books.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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