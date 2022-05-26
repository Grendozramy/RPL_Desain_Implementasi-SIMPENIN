@extends('layouts.backend.app1')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Data Anak</h1>
        </div>
 
        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Informasi Data Anak</h4>
                </div>
                <div class="row">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr >
                                        <th >Nama Anak</th>
                                        <td style="width:70%">{{ $anak->nama_anak}}</td>
                                    </tr>   
                                    <tr>
                                        <th>NIK Anak</th>
                                        <td>{{ $anak->nik_anak}}</td>  
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $anak->tempat_lahir}}</td>
                                    </tr> 
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $anak->tgl_lahir}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Usia</th>
                                        <td>{{ $anak->age()}}</td> 
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $anak->status}}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $anak->jenis_kelamin}}</td>
                                    </tr>
                                    <tr> 
                                        <th>Tinggi Badan (CM)</th>
                                        <td>{{ $anak->tinggi_badan}}</td>
                                    </tr>  
                                    <tr> 
                                        <th>Berat Badan (KG)</th>
                                        <td>{{ $anak->berat_badan}}</td>
                                    </tr>  
                                </thead>   
                            </table>
                            <a href="{{ route('admin.anak.index') }}" class="btn btn-primary mr-1" ><i class="fa fa-arrow-left"></i>
                                BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop