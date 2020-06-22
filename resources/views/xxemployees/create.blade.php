
@extends('layout/main')

@section('title', 'Form Tambah Data Employee')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-8">
         <h1 class="mt-3">Form Tambah Data</h1>

        <form method="post" action ="/employees">

        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukkan Nama" name="nama"
            value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror 

        </div>

        <div class="form-group">
            <label for="nip">NIP</label>
            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="Masukkan nip" name="nip"
            value="{{old('nip')}}">
            @error('nip')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror 
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email" name="email"
            value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror 
        </div>

        <div class="form-group">
            <label for="posisi">Posisi</label>
            <input type="text" class="form-control @error('posisi') is-invalid @enderror" id="posisi" placeholder="Masukkan posisi" name="posisi"
            value="{{old('posisi')}}">
            @error('posisi')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror 
        </div>
        
        <button type="submit" class="btn btn-primary">Tambah Data!</button>



        </form>
        
            


        </div>
      </div>
    </div>
@endsection
