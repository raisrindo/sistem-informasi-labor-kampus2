@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Menampilkan judul Halaman -->
        <div class="col-md-12">
            <h2 align="center"><strong>Kontak Karyawan</strong></h2>
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
        <div class="col-12">
            <h4 align="center" class="mt-3 mb-3 ">Daftar Karyawan</h4>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ruangan</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($employees as $employee)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$employee->nama}}</td>
                        <td>{{$employee->nip}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->posisi}}</td>
                    </tr>

                    @endforeach

                </tbody>

            </table>

            <!-- <ul class="list-group">

                @foreach($employees as $employee)

                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{ $employee->nama }}
                </li>

                @endforeach

            </ul> -->

        </div>
    </div>
</div>
@endsection