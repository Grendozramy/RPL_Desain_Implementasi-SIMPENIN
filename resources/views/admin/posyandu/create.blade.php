@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Posyandu</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Posyandu</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.posyandu.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label>JADWAL</label>
                            <input type="date" name="jadwal" value="{{ old('jadwal') }}" placeholder="Masukkan Jadwal"
                                class="form-control @error('jadwal') is-invalid @enderror">

                            @error('jadwal')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>NAMA POSYANDU</label>
                            <input type="text" name="nama_posyandu" value="{{ old('nama_posyandu') }}" placeholder="Masukkan Nama Posyandu"
                                class="form-control @error('nama_posyandu') is-invalid @enderror">

                            @error('nama_posyandu')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>TEMPAT</label>
                            <input type="text" name="tempat" value="{{ old('tempat') }}" placeholder="Masukkan Nama Tempat"
                                class="form-control @error('tempat') is-invalid @enderror">

                            @error('tempat')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Petugas</label>
                            <select class="form-control select-category @error('petugas_id') is-invalid @enderror"
                                name="petugas_id" id="options">
                                <option value="" disabled selected>-- PILIH PETUGAS --</option>
                                @foreach ($petugas as $item)
                                    <option value="{{ $item->id  }}" selected>{{ $item->nama_petugas }}</option>
                                @endforeach
                            
                            </select>
                            @error('petugas_id')
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
<script type="text/javascript">
    $('#options').on('change', function (e) {
    $('.option').hide();
    $('#option-' + e.target.value).show();
});
</script>