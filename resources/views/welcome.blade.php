@extends('layouts.backend.app')
@section('title', 'Selamat Datang')

@section('content')
<img src="{{ asset('assets/img/logo.jpg') }}" class="rounded mx-auto d-block pb-2" height="150px" >
<p class="text-center font-weight-bold" style="font-size: 20px">SISTEM PENDATAAN IMUNISASI</p>
<div class="container " >
    <div class="row justify-content-center">
        <div class="card text-center border border-secondary" style="width: 18rem;">
            <h5 class="card-title pt-4">SELAMAT DATANG</h5>
            <div class="card-body d-grid gap-2 col-6 mx-auto ">
              <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Registrasi') }}</a>
              <p class="pb-3"></p>
              <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Login') }}</a>
            </div>
          </div>
    </div>
</div>
@endsection