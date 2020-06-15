
@extends('layout/main')

@section('title', 'About')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-10">
         <h1 class="mt-3">Hallo {{ $nama }}, It is About</h1>
        </div>
      </div>
    </div>
@endsection
