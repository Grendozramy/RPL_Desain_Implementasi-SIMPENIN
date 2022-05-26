@extends('layouts.backend.app1')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Data petugas</h1>
        </div>
 
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Informasi Data petugas</h4>
                </div>
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr >
                                        <th >Nama Petugas</th>
                                        <td style="width:70%">{{ $petugas->nama_petugas}}</td>
                                    </tr>   
                                    <tr>
                                        <th>Jabatan Petugas</th>
                                        <td>{{ $petugas->jabatan_petugas}}</td>  
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $petugas->jenis_kelamin}}</td>
                                    </tr> 
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $petugas->tempat_lahir}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $petugas->tanggal_lahir}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Alamat Petugas</th>
                                        <td>{{ $petugas->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>No Telepon Petugas</th>
                                        <td>{{ $petugas->no_telp}}</td>
                                    </tr>
                                    <tr> 
                                        <th>Status</th>
                                        <td>{{ $petugas->status}}</td>
                                    </tr>  
                                </thead>   
                            </table>
                            <a href="{{ route('admin.petugas.index') }}" class="btn btn-primary mr-1" ><i class="fa fa-arrow-left"></i>
                                BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop