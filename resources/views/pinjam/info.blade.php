@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Back Button -->
        <div class="col-md-12 ">
            <a href=" {{url('home')}} " class="btn btn-primary">Kembali</a>
            <h2 align="center"><strong>Informasi Peminjaman</strong></h3>

        </div>

        <!-- Breadcrumb -->
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('home')}} ">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$ruangan->nama_ruangan}}</li>
                </ol>
            </nav>
        </div>

        <!-- Form -->
        <div class="col-md-12 mt-1">
            <div class="card">

                <!-- <div class="card-header">
                    <h4> {{$ruangan->nama_ruangan}} </h4>
                </div> -->

                <div class="card-body">
                    <div class="row ">

                        <div class="col-md-8 ">
                            <h2> <strong>{{$ruangan->nama_ruangan}}</strong></h2>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Kapasitas</td>
                                        <td>:</td>
                                        <td>{{$ruangan->kapasitas}} Orang</td>
                                    </tr>
                                    <tr>
                                        <td>Lokasi</td>
                                        <td>:</td>
                                        <td>{{$ruangan->keterangan}}</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row justify-content-center">

                        <div class="col-md-12 mt-4">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Urutan Meminjam</th>
                                        <th scope="col">Peminjam</th>
                                        <th scope="col">NIP/NIM Peminjam</th>
                                        <th scope="col">Kontak Peminjam</th>
                                        <th scope="col">Nama Ruangan</th>
                                        <th scope="col">Tanggal Meminjam</th>
                                        <th scope="col">Tanggal Pemakaian Ruangan</th>
                                        <th scope="col">Waktu Memulai Pemakaian Ruangan</th>
                                        <th scope="col">Waktu Selesai Pemakaian Ruangan</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($peminjaman as $pjm)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$pjm->user_nama}}</td>
                                        <td>{{$pjm->user_nomorinduk}}</td>
                                        <td>{{$pjm->user_nomorhp}}</td>
                                        <td>{{$pjm->ruangan_nama}}</td>
                                        <td>{{$pjm->tanggal}}</td>
                                        <td>{{$pjm->tanggal_dipinjam}}</td>
                                        <td>{{$pjm->waktu_pakai}}</td>
                                        <td>{{$pjm->waktu_selesai}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection