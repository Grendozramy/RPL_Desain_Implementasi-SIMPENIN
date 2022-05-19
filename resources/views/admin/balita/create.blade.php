@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Anak</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Anak</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.balita.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>NAMA ANAK</label>
                            <input type="text" name="nama_balita" value="{{ old('nama_balita') }}" placeholder="Masukkan Nama Anak"
                                class="form-control @error('title') is-invalid @enderror">

                            @error('nama_balita')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA (BULAN)</label>
                                    <input type="text" name="usia_balita" value="{{ old('usia_balita') }}" placeholder="Masukkan Usia Anak"
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
                                    <input type="text" name="status" value="{{ old('status') }}" placeholder="Masukkan Status"
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
                                    <input type="text" name="tinggi_badan" value="{{ old('tinggi_badan') }}" placeholder="Masukkan Tinggi Badan"
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
                                    <input type="text" name="berat_badan" value="{{ old('berat_badan') }}" placeholder="Masukkan Berat Badan"
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
                                    <input type="text" name="hasil_berat_badan" value="{{ old('hasil_berat_badan') }}" placeholder="Hasil Berat Badan"
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
                                    <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}" placeholder="Masukkan Jenis Kelamin"
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
                                <input type="text" name="ideal" value="{{ old('ideal') }}" placeholder="Hasil Ideal"
                                    class="form-control @error('ideal') is-invalid @enderror">

                                @error('ideal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop