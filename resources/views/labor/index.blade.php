
@extends('layout/main')

@section('title', 'Daftar Labor')

@section('container')
    <div class="container">
      <div class="row">
        <div class="col-10">
         <h1 class="mt-3">Daftar Labor</h1>


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach ($labor as $lbr)   
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$lbr->nama}}</td>
                <td>{{$lbr->nip}}</td>
                <td>{{$lbr->email}}</td>
                <td>{{$lbr->jabatan}}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delate</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        
        </table>



        </div>
      </div>
    </div>
@endsection
