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
                            <select class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                name="dataanak_id" disabled>
                                <option value="">-- PILIH NAMA ANAK --</option>
                                @foreach ($anak as $item)
                                    @if($gizi->dataanak_id == $item->id)
                                        <option value="{{ $item->id  }}" selected>{{ $item->nama_anak }}</option>
                                    @else
                                        <option value="{{ $item->id  }}">{{ $item->nama_anak }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('dataanak_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <select class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id" disabled>
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->jenis_kelamin }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->jenis_kelamin }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('dataanak_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA</label>
                                        <input type="text" name="usia" value="{{ old('tgl_lahir', $item->age()) }}" placeholder="BBU"
                                        class="form-control @error('usia') is-invalid @enderror" disabled>
                                    @error('dataanak_id')
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
                                    <select class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id" disabled>
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->tinggi_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->tinggi_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('dataanak_id')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BERAT BADAN (KG)</label>
                                    <select class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id" disabled>
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->berat_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->berat_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('dataanak_id')
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
                                    <label>BB/U</label>
                                    <select class="form-control select-category @error('BBU') is-invalid @enderror"
                                    name="BBU">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Gizi Baik" <?php if($gizi['BBU'] == 'Gizi Baik'){ echo 'selected';}?>>Gizi Baik</option>
                                        <option value="Gizi Kurang" <?php if($gizi['BBU'] == 'Gizi Kurang'){ echo 'selected';}?>>Gizi Kurang</option>
                                        <option value="Gizi Lebih" <?php if($gizi['BBU'] == 'Gizi Lebih'){ echo 'selected';}?>>Gizi Lebih</option>
                                    </select>
                                    

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
                                    <select class="form-control select-category @error('TBU') is-invalid @enderror"
                                    name="TBU">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Pendek" <?php if($gizi['TBU'] == 'Pendek'){ echo 'selected';}?>>Pendek</option>
                                        <option value="Normal" <?php if($gizi['TBU'] == 'Normal'){ echo 'selected';}?>>Normal</option>
                                        <option value="Tinggi" <?php if($gizi['TBU'] == 'Tinggi'){ echo 'selected';}?>>Tinggi</option>
                                    </select>

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
                                    <select class="form-control select-category @error('BBTB') is-invalid @enderror"
                                    name="BBTB">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Kurus" <?php if($gizi['BBTB'] == 'Kurus'){ echo 'selected';}?>>Kurus</option>
                                        <option value="Normal" <?php if($gizi['BBTB'] == 'Normal'){ echo 'selected';}?>>Normal</option>
                                        <option value="Gemuk" <?php if($gizi['BBTB'] == 'Gemuk'){ echo 'selected';}?>>Gemuk</option>
                                    </select>

                                    @error('BBTB')
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
