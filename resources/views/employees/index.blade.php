
@extends('layout/main')

@section('title', 'Daftar Labor')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-5">
         <h1 class="mt-3">Daftar Labor</h1>

         <a href="/employees/create" class="btn btn-primary my-3" >Tambah Data Employee</a>

         @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <ul class="list-group">

        @foreach($employees as $employee)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $employee->nama }}
            <a href="/employees/{{$employee->id}}" class="badge badge-info">Detail</a>
        </li>
        @endforeach

        </ul>
       


        </div>
      </div>
    </div>
@endsection
