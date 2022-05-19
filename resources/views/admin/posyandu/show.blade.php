@extends('layouts.backend.app1')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Data Balita</h1>
        </div>
 
        <div class="section-body">
 
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Informasi Data Balita</h4>
                </div>
 
                <div class="card-body">
                    <form action="{{ route('admin.balita.show', $balita->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>NAMA BALITA</label>
                            <input readonly type="text" name="nama_balita" value="{{ old('nama_balita', $balita->nama_balita) }}"
                                placeholder="Masukkan Nama Balita"
                                class="form-control @error('nama_balita') is-invalid @enderror">
 
                            @error('nama_balita')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA BALITA (BULAN)</label>
                                    <input readonly type="text" name="usia_balita" value="{{ old('usia_balita', $balita->usia_balita) }}" placeholder="Masukkan Usia Balita"
                                        class="form-control @error('usia_balita') is-invalid @enderror">
 
                                    @error('usia_balita')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>STATUS</label>
                                    <input readonly type="text" name="status" value="{{ old('status', $balita->status) }}" placeholder="Masukkan Status"
                                        class="form-control @error('status') is-invalid @enderror">
 
                                    @error('status')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
 
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TINGGI BADAN (CM)</label>
                                    <input  readonly type="text" name="tinggi_badan" value="{{ old('tinggi_badan', $balita->tinggi_badan) }}" placeholder="Masukkan Tinggi Badan"
                                        class="form-control @error('tinggi_badan') is-invalid @enderror">

                                    @error('tinggi_badan')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BERAT BADAN (KG)</label>
                                    <input readonly type="text" name="berat_badan" value="{{ old('berat_badan', $balita->berat_badan) }}" placeholder="Masukkan Berat Badan"
                                        class="form-control @error('berat_badan') is-invalid @enderror">
 
                                    @error('berat_badan')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>HASIL BERAT BADAN</label>
                                    <input readonly type="text" name="hasil_berat_badan" value="{{ old('hasil_berat_badan', $balita->hasil_berat_badan) }}" placeholder="Hasil Berat Badan"
                                        class="form-control @error('hasil_berat_badan') is-invalid @enderror">
 
                                    @error('hasil_berat_badan')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <input readonly type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $balita->jenis_kelamin) }}" placeholder="Masukkan Jenis Kelamin"
                                        class="form-control @error('jenis_kelamin') is-invalid @enderror">
 
                                    @error('jenis_kelamin')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
 
                        <div class="d-flex justify-content-center">
                            <div class="form-group">
                                <label>IDEAL</label>
                                <input readonly type="text" name="ideal" value="{{ old('ideal', $balita->ideal) }}" placeholder="Hasil Ideal"
                                    class="form-control @error('ideal') is-invalid @enderror">
 
                                @error('ideal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
 
                        <button class="btn btn-primary mr-1" ><i class="fa fa-arrow-left"></i>
                            <a href="{{ route('admin.balita.index') }}">
                            BACK</button> </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
