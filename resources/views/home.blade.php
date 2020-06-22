@extends('layouts.app')

@section('content')

@if(Auth::user()->role_id=='1')

<div class="container">

    <div class="row">
        <!-- Menampilkan judul Halaman -->
        <div class="col-md-12">
            <h2 align="center"><strong>Daftar Laboratorium</strong></h3>
        </div>

        <!-- Breadcrumb -->
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="mr-4"><a href="{{url('home')}} ">Home</a></li>
                    <li class="mr-4"><a href="{{url('contact')}} ">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-center">

        <!-- menampilkan daftar ruangan -->
        @foreach($ruangans as $ruangan)
        <div class="col-md-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('uploads')}}/{{$ruangan->gambar}} " class="card-img-top" alt="gambar ruangan">
                <div class="card-body">
                    <h5 class="card-title"> <strong>{{$ruangan->nama_ruangan}}</strong></h5>
                    <h6 class="card-text">Kapasitas : {{$ruangan->kapasitas}} Orang </h6>
                    <p class="card-text">Lokasi : {{$ruangan->keterangan}} </p>
                    <a href="{{url('info')}}/{{$ruangan->id}}" class="btn btn-primary col-md-8">Informasi</a>
                    <a href="{{url('pinjam')}}/{{$ruangan->id}}" class="btn btn-success">Pinjam</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>



@else

<div id="app">

    <!-- Navbar -->
    <div class="col-md-12 mt-3">
        <ul class="nav justify-content-center breadcrumb">
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin')}}">Daftar Laboratorium</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/pengajuan')}}">Daftar Pengajuan Peminjaman</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('admin/persetujuan')}}">Daftar Peminjaman yang Diterima</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/employees')}}">Daftar Karyawan</a>
            </li>
        </ul>
    </div>

    <div class="col-md-12 mt-5">
        <h1 align="center"><strong>SELAMAT DATANG <br> DI DASBOR ADMIN</strong></h1>
        <h3 align="center"><strong>"Silahkan Pilih Menu Di Atas"</strong></h3>
    </div>

</div>


@endif

@endsection