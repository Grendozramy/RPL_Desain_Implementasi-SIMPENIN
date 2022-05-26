@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Petugas</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Petugas</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.petugas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        {{-- <div class="form-group">
                            <label>NAMA PETUGAS</label>
                            <select class="form-control select-category @error('user_id') is-invalid @enderror"
                                name="user_id">
                                <option value="" disabled selected hidden>-- PILIH PETUGAS --</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id}}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label>NAMA PETUGAS</label>
                            <input type="text" name="nama_petugas" value="{{ old('nama_petugas') }}" placeholder="Masukkan Jabatan Petugas"
                                class="form-control @error('nama_petugas') is-invalid @enderror">

                            @error('nama_petugas')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>JABATAN PETUGAS</label>
                            <input type="text" name="jabatan_petugas" value="{{ old('jabatan_petugas') }}" placeholder="Masukkan Jabatan Petugas"
                                class="form-control @error('jabatan_petugas') is-invalid @enderror">

                            @error('jabatan_petugas')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select required="" name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') }}">
                                <option disabled="" selected="" hidden="hidden">- PILIH JENIS KELAMIN -</option> 
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
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
                                    <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" placeholder="Masukkan Usia Anak"
                                        class="form-control @error('tanggal_lahir') is-invalid @enderror">

                                    @error('tanggal_lahir')
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
                        <div class="form-group">
                            <label>ALAMAT PETUGAS</label>
                            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan Jabatan Petugas"
                                class="form-control @error('alamat') is-invalid @enderror">

                            @error('alamat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NO TELEPON PETUGAS</label>
                            <input type="text" name="no_telp" value="{{ old('no_telp') }}" placeholder="Masukkan Jabatan Petugas"
                                class="form-control @error('no_telp') is-invalid @enderror">

                            @error('no_telp')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>STATUS PETUGAS</label>
                            <select class="form-control select-category @error('jenis_kelamin') is-invalid @enderror"
                                    name="status">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                            @error('status')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
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