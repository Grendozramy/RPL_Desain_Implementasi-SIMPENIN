@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Imunisasi</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Imunisasi</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.jadwal.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>IMUNISASl</label>
                                    <input type="text" name="imunisasi" value="{{ old('imunisasi') }}" placeholder="Masukkan Nama Imunisasi"
                                        class="form-control @error('imunisasi') is-invalid @enderror">
        
                                    @error('imunisasi')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA (BULAN)</label>
                                    <input type="text" name="bulan" value="{{ old('bulan') }}" placeholder="Masukkan Usia (Bulan)"
                                        class="form-control @error('bulan') is-invalid @enderror">

                                    @error('bulan')
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