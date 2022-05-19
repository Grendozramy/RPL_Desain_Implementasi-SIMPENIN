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
                            <select class="form-control select-category @error('petugas_id') is-invalid @enderror"
                                name="petugas_id">
                                <option value="">-- PILIH PETUGAS --</option>
                                @foreach ($user as $item)
                                @if($petugas->user_id == $item->id)
                                <option value="{{ $item->id  }}" selected>{{ $item->name }}</option>
                            @else
                                <option value="{{ $item->id  }}">{{ $item->name }}</option>
                            @endif
                                @endforeach
                            </select>
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