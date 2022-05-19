@extends('layouts.backend.app1')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Informasi Data gizi</h1>
        </div>
 
        <div class="section-body">
 
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Edit Informasi Data gizi</h4>
                </div>
 
                <div class="card-body">
                    <form action="{{ route('admin.gizi.update', $gizi->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>NAMA ANAK</label>
                            <select class="form-control select-category @error('databalita_id') is-invalid @enderror"
                                name="databalita_id">
                                <option value="">-- PILIH NAMA ANAK --</option>
                                @foreach ($balita as $item)
                                    @if($gizi->databalita_id == $item->id)
                                        <option value="{{ $item->id  }}" selected>{{ $item->nama_balita }}</option>
                                    @else
                                        <option value="{{ $item->id  }}">{{ $item->nama_balita }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('databalita_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <select class="form-control select-category @error('databalita_id') is-invalid @enderror"
                                        name="databalita_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($balita as $item)
                                            @if($gizi->databalita_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->jenis_kelamin }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->jenis_kelamin }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('databalita_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA (BULAN)</label>
                                    <select class="form-control select-category @error('databalita_id') is-invalid @enderror"
                                        name="databalita_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($balita as $item)
                                            @if($gizi->databalita_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->usia_balita }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->usia_balita }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('databalita_id')
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
                                    <select class="form-control select-category @error('databalita_id') is-invalid @enderror"
                                        name="databalita_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($balita as $item)
                                            @if($gizi->databalita_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->tinggi_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->tinggi_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('databalita_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BERAT BADAN (KG)</label>
                                    <select class="form-control select-category @error('databalita_id') is-invalid @enderror"
                                        name="databalita_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($balita as $item)
                                            @if($gizi->databalita_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->berat_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->berat_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('databalita_id')
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
                                    <label>BB/U</label>
                                    <input type="text" name="BBU" value="{{ old('BBU', $gizi->BBU) }}" placeholder="BBU"
                                        class="form-control @error('BBU') is-invalid @enderror">

                                    @error('BBU')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TB/U</label>
                                    <input type="text" name="TBU" value="{{ old('TBU', $gizi->TBU) }}" placeholder="TBU"
                                        class="form-control @error('TBU') is-invalid @enderror">

                                    @error('TBU')
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
                                    <label>BB/TB</label>
                                    <input type="text" name="BBTB" value="{{ old('BBTB', $gizi->BBTB) }}" placeholder="BBTB"
                                        class="form-control @error('BBTB') is-invalid @enderror">

                                    @error('BBTB')
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
                                    <label>Z_BB/U</label>
                                    <input type="text" name="Z_BBU" value="{{ old('Z_BBU', $gizi->Z_BBU) }}" placeholder="Z_BBU"
                                        class="form-control @error('Z_BBU') is-invalid @enderror">

                                    @error('Z_BBU')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Z_TB/U</label>
                                    <input type="text" name="Z_TBU" value="{{ old('Z_TBU', $gizi->Z_TBU) }}" placeholder="Z_TBU"
                                        class="form-control @error('Z_TBU') is-invalid @enderror">

                                    @error('Z_TBU')
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
                                    <label>Z_BB/TB</label>
                                    <input type="text" name="Z_BBTB" value="{{ old('Z_BBTB', $gizi->Z_BBTB) }}" placeholder="Z_BBTB"
                                        class="form-control @error('Z_BBTB') is-invalid @enderror">

                                    @error('Z_BBTB')
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
                                    <label>STATUS GIZI</label>
                                    <input type="text" name="status_gizi" value="{{ old('status_gizi', $gizi->status_gizi) }}" placeholder="Status Gizi"
                                        class="form-control @error('status_gizi') is-invalid @enderror">

                                    @error('status_gizi')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Z_SCORE</label>
                                    <input type="text" name="z_score" value="{{ old('z_score', $gizi->z_score) }}" placeholder="Z_Score"
                                        class="form-control @error('z_score') is-invalid @enderror">

                                    @error('z_score')
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
                                    <label>VALIDASI</label>
                                    <input type="text" name="validasi" value="{{ old('validasi', $gizi->validasi) }}" placeholder="Validasi"
                                        class="form-control @error('validasi') is-invalid @enderror">

                                    @error('validasi')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
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
