@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <!-- tombol back -->
        <div class="col-md-10 justify-content-center">
            <a href="/admin" class="btn btn-primary">Kembali</a>
        </div>

        <!-- Menampilkan judul Halaman -->
        <div class="col-md-12">
            <h2 align="center"><strong>Form Edit Data Ruangan</strong></h3>
        </div>

    </div>

    <div class="row justify-content-center ">
        <div class="col-md-8 mt-3">
            <form method="post" action="/admin/{{$ruangan->id}}" enctype="multipart/form-data">
                @method ('patch')
                @csrf

                <div class="form-group">
                    <label for="nama_ruangan">Nama Ruangan</label>
                    <input type="text" class="form-control @error('nama_ruangan') is-invalid @enderror " id="nama_ruangan" placeholder="Masukkan Nama Ruangan" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
                    @error('nama_ruangan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror

                </div>

                <div class="form-group">
                    <label for="kapasitas">Kapasitas Ruangan</label>
                    <input type="text" class="form-control @error('kapasitas') is-invalid @enderror" id="kapasitas" placeholder="Masukkan Kapasitas Ruangan" name="kapasitas" value="{{$ruangan->kapasitas}}">
                    @error('kapasitas')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan Lokasi</label>
                    <input type="keterangan" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Masukkan Keterangan Lokasi" name="keterangan" value="{{$ruangan->keterangan}}">
                    @error('keterangan')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="file">Gambar</label><br>
                    <input type="file" class="@error('keterangan') is-invalid @enderror" id="file" placeholder="Masukkan Gambar Ruangan" name="file">
                    @error('file')
                    <div class="invalid-feedback">{{$message}}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success mt-3" onclick="return confirm('Anda Yakin Ingin Menyimpan Perubahan Data Ruangan ?'); ">Simpan Perubahan!</button>

            </form>

        </div>
    </div>
</div>
@endsection