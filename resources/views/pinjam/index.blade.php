@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Back Button -->
        <div class="col-md-12 ">
            <a href=" {{url('home')}} " class="btn btn-primary">Kembali</a>
            <h2 align="center"><strong>Form Pengajuan Peminjaman</strong></h3>

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
                    <div class="row">
                        <div class="col-md-6">
                            <img src=" {{url('uploads')}}/{{$ruangan->gambar}}" class="rounded mx-auto d-block" width="100%" alt="gambar ruangan">

                        </div>
                        <div class="col-md-6 ">
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

                                    <!-- <form action="{{url('pinjam')}}/{{$ruangan->id}}" method="post">
                                        @csrf
                                        <tr>
                                            <td>Tanggal Peminjaman</td>
                                            <td>:</td>
                                            <td>
                                                <input type="date" name="tanggal_dipinjam" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Memulai Pemakaian</td>
                                            <td>:</td>
                                            <td>
                                                <input type="time" name="waktu_pakai" class="form-control" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Waktu Selesai Pemakaian</td>
                                            <td>:</td>
                                            <td>
                                                <input type="time" name="waktu_selesai" class="form-control" required>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td>
                                                <button type="submit" class="btn btn-success">Ajukan Peminjaman!</button>
                                            </td>
                                        </tr>
                                    </form> -->

                                </tbody>
                            </table>

                            <form action="{{url('pinjam')}}/{{$ruangan->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="tanggal_dipinjam">Tanggal Peminjaman :</label>
                                    <input type="date" class="form-control" required id="tanggal_dipinjam" placeholder="Masukkan Tanggal Peminjaman " name="tanggal_dipinjam">
                                </div>
                                <div class="form-group">
                                    <label for="waktu_pakai">Waktu Memulai Pemakaian :</label>
                                    <input type="time" class="form-control" required id="waktu_pakai" placeholder="Masukkan Waktu Memulai Pemakaian " name="waktu_pakai">
                                </div>
                                <div class="form-group">
                                    <label for="waktu_selesai">Waktu Selesai Pemakaian :</label>
                                    <input type="time" class="form-control" required id="waktu_selesai" placeholder="Masukkan Waktu Selesai Pemakaian " name="waktu_selesai">
                                </div>
                                <button type="submit" class="btn btn-success" onclick="return confirm('Anda Yakin Form Peminjaman Anda Sudah Benar ?'); ">Ajukan Peminjaman!</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection