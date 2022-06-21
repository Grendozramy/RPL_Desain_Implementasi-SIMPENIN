@extends('layouts.backend.app1')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Dashboard</h1>
        </div>
          @role('Orangtua')
          <div class="jumbotron">
            <h1 class="display-4">Hello, {{ auth()->user()->name }}!</h1>
            <p class="lead">Selamat datang di WEB SIMPENIN.</p>
		        <hr class="my-4">
          </div>
          @endrole
          @role('Admin|Petugas')
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fa fas fa-child text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Anak</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Anak::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fa fa-user-md text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Data Petugas</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Petugas::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-hospital text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Posyandu</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Posyandu::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>  
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-info">
                  <i class="fa fa-calendar text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jadwal Imunisasi</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Jadwal::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fa fas fa-medkit text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Gizi</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\Gizi::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-dark">
                  <i class="fa fa-users text-white fa-2x"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Users</h4>
                  </div>
                  <div class="card-body">
                    {{ App\Models\User::count() ?? '0' }}
                  </div>
                </div>
              </div>
            </div>                  
          </div>
        </div>
          @endrole
    </section>
</div>
@endsection