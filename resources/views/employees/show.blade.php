
@extends('layout/main')

@section('title', 'Detail Labor')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-5">
         <h1 class="mt-3">Daftar Labor</h1>

         
        <div class="card" >
        <div class="card-body">
            <h5 class="card-title">Nama : {{$employee->nama}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">NIP : {{$employee->nip}}</h6>
            <p class="card-text">Email : {{$employee->email}}</p>
            <p class="card-text">Jabatan/Posisi : {{$employee->posisi}}</p>

            <a href="{{$employee->id}}/edit" class="btn btn-primary">Edit</a>
          
            <form action="{{$employee->id}}" method="post" class="d-inline">     
            @method('delete') 
            @csrf    
            <button type="submit" class="btn btn-danger">Delate</button>
            </form>

            <a href="/employees" class="card-link">Kembali</a>

        </div>
        </div>
            


        </div>
      </div>
    </div>
@endsection
