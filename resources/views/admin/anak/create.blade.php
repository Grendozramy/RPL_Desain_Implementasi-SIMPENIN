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
                    <form action="{{ route('admin.anak.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>NAMA ANAK</label>
                            <input type="text" name="nama_anak" value="{{ old('nama_anak') }}" placeholder="Masukkan Nama Anak"
                                class="form-control @error('nama_anak') is-invalid @enderror">

                            @error('nama_anak')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIK ANAK</label>
                            <input type="text" name="nik_anak" value="{{ old('nik_anak') }}" placeholder="Masukkan NIK Anak"
                                class="form-control @error('nik_anak') is-invalid @enderror">

                            @error('nik_anak')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" value="{{ old('tempat_lahir') }}" placeholder="Masukan Tempat Lahir"
                                        class="form-control @error('tempat_lahir') is-invalid @enderror">

                                    @error('tempat_lahir')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TANGGAL LAHIR</label>
                                    <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" placeholder="Masukkan Usia Anak"
                                        class="form-control @error('tgl_lahir') is-invalid @enderror">

                                    @error('tgl_lahir')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Usia</label>
                                    <p>{{ $anak->age() }}</p>
                                </div>
                            </div> --}}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>STATUS</label>
                                    <select class="form-control select-category @error('status') is-invalid @enderror"
                                    name="status">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Bayi">Bayi</option>
                                        <option value="Balita">Balita</option>
                                    </select>
                                    @error('status')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>             
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <select class="form-control select-category @error('jenis_kelamin') is-invalid @enderror"
                                    name="jenis_kelamin">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    @error('jenis_kelamin')
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