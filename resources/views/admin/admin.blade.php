@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- Menampilkan judul Halaman -->
        <div class="col-md-12">
            <h2 align="center"><strong>Dasbor Admin</strong></h3>
        </div>

        <!-- Navbar -->
        <div class="col-md-12 mt-3">
            <ul class="nav justify-content-center breadcrumb">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('admin')}}">Daftar Laboratorium</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Karyawan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Pengajuan Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Daftar Peminjaman yang Diterima</a>
                </li>

            </ul>
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
                    <a href="#" class="btn btn-success col-md-8">Edit</a>
                    <a href="{{url('pinjam')}}/{{$ruangan->id}}" class="btn btn-danger">Hapus</a>
                </div>
            </div>
        </div>
        @endforeach



    </div>
</div>
@endsection