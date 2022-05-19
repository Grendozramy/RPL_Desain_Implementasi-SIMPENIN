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

                        <div class="form-group">
                            <label>NAMA PETUGAS</label>
                            <select class="form-control select-category @error('petugas_id') is-invalid @enderror"
                                name="petugas_id">
                                <option value="">-- PILIH PETUGAS --</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->id}}" selected>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('petugas_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>USERNAME</label>
                            <input  type="text" name="username" value="{{ old('username') }}" placeholder="Masukkan Username"
                                class="form-control @error('username') is-invalid @enderror">

                            @error('username')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin:</label>
                            <select required="" name="jenis_kelamin" id="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" value="{{ old('jenis_kelamin') }}">
                                <option disabled="" selected="">- PILIH JENIS KELAMIN -</option> 
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
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
<script>
    const nama_petugas = document.querySelector(#nama_petugas);
    const name = document.querySelector(#name);

    nama_petugas.addEventListener('change' function{

    })

</script>
@stop