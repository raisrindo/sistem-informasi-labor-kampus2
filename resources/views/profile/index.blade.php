@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <!-- Back Button dan judull halaman-->
        <div class="col-md-12 ">
            <a href=" {{url('home')}} " class="btn btn-primary">Kembali</a>
            <h2 align="center"><strong>Profile Pengguna</strong></h3>

        </div>

        <!-- Breadcrumb -->
        <div class="col-md-12 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('home')}} ">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Profile</li>
                </ol>
            </nav>
        </div>



        <!-- Profile -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4> My Profile</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td width="10">:</td>
                                <td>{{$user->name}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$user->email}}</td>
                            </tr>
                            <tr>
                                <td>NIP/NIM</td>
                                <td>:</td>
                                <td>{{$user->nomorinduk}}</td>
                            </tr>
                            <tr>
                                <td>Nomor HP</td>
                                <td>:</td>
                                <td>{{$user->nomorhp}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Edit -->
        <div class="col-md-12 mt-3">
            <div class="card">
                <div class="card-body">
                    <h4> Edit Profile</h4>

                    <form method="POST" action="{{ url('profile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomorinduk" class="col-md-2 col-form-label text-md-right">{{ __('NIP/NIM') }}</label>

                            <div class="col-md-6">
                                <input id="nomorinduk" type="text" class="form-control @error('nomorinduk') is-invalid @enderror" name="nomorinduk" value="{{ $user->nomorinduk }}" required autocomplete="nomorinduk" autofocus>

                                @error('nomorinduk')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomorhp" class="col-md-2 col-form-label text-md-right">{{ __('Nomor HP') }}</label>

                            <div class="col-md-6">
                                <input id="nomorhp" type="text" class="form-control @error('nomorhp') is-invalid @enderror" name="nomorhp" value="{{ $user->nomorhp }}" required autocomplete="nomorhp" autofocus>

                                @error('nomorhp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-2 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>


    </div>


</div>
@endsection