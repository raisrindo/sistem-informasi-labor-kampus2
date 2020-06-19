@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach($ruangans as $ruangan)
        <div class="col-md-4 mt-4">

            <div class="card" style="width: 18rem;">
                <img src="{{ url('uploads')}}/{{$ruangan->gambar}} " class="card-img-top" alt="gambar ruangan">
                <div class="card-body">
                    <h5 class="card-title"> <strong>{{$ruangan->nama_ruangan}}</strong></h5>
                    <h6 class="card-text">Kapasitas : {{$ruangan->kapasitas}} Orang </h6>
                    <p class="card-text">Lokasi : {{$ruangan->keterangan}} </p>
                    <a href="#" class="btn btn-primary col-md-8">Informasi</a>
                    <a href="{{url('pinjam')}}/{{$ruangan->id}}" class="btn btn-success">Pinjam</a>
                </div>
            </div>

        </div>

        @endforeach


    </div>
</div>
@endsection