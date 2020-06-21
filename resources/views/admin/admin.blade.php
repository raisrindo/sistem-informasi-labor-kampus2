@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Menampilkan judul Halaman -->
        <div class="col-md-12">
            <h3 align="center"><strong>Dasbor Admin</strong></h3>
            <h4 align="center"><strong>"Data Ruangan"</strong></h4>
        </div>

        <div class="col-md-12 justify-content-center">
            <a href="/admin/create" class="btn btn-primary my-3">Tambah Data Ruangan</a>
        </div>

    </div>

    <div class="row justify-content-center ">
        <!-- menampilkan daftar ruangan -->
        @foreach($ruangans as $ruangan)
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('uploads')}}/{{$ruangan->gambar}} " class="card-img-top" alt="gambar ruangan">
                <div class="card-body">
                    <h5 class="card-title"> <strong>{{$ruangan->nama_ruangan}}</strong></h5>
                    <h6 class="card-text">Kapasitas : {{$ruangan->kapasitas}} Orang </h6>
                    <p class="card-text">Lokasi : {{$ruangan->keterangan}} </p>
                    <!-- <a href="#" class="btn btn-success col-md-8">Edit</a> -->
                    <!-- <a href="{{url('pinjam')}}/{{$ruangan->id}}" class="btn btn-danger">Hapus</a> -->
                    <a href="/admin/{{$ruangan->id}}" class="btn btn-success col-md-8">Edit</a>
                    <form action="/admin/{{$ruangan->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ruangan ?'); ">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
@endsection