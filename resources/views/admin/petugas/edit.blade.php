@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Petugas</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Edit Petugas</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.petugas.update', $petugas->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>NAMA PETUGAS</label>
                            <input type="text" name="nama_petugas" value="{{ old('nama_petugas', $petugas->nama_petugas) }}"
                                placeholder="Masukkan Nama Petugas"
                                class="form-control @error('nama_petugas') is-invalid @enderror">

                            @error('nama_petugas')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>                        
                        <div class="form-group">
                            <label>Jenis Kelamin:</label>
                            <input readonly type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin', $petugas->jenis_kelamin) }}"
                                placeholder="Masukkan Email" class="form-control @error('jenis_kelamin') is-invalid @enderror">

                            @error('jenis_kelamin')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>
                            UPDATE</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop