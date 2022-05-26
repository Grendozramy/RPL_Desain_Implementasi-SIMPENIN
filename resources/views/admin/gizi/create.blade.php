@extends('layouts.backend.app1')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Informasi Data Gizi</h1>
        </div>

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Tambah Data Gizi</h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.gizi.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>NAMA ANAK</label>
                            <select class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                name="dataanak_id" id="nama">
                                @foreach ($anak as $item)
                                    <option value="{{ $item->id  }}" selected>{{ $item->nama_anak }}</option>
                                @endforeach
                                <option value="" selected disabled hidden>-- PILIH --</option>
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
                                    <label>BB/U</label>
                                    <input type="text" name="BBU" value="{{ old('BBU') }}" placeholder="BBU"
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
                                    <input type="text" name="TBU" value="{{ old('TBU') }}" placeholder="TBU"
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
                                    <input type="text" name="BBTB" value="{{ old('BBTB') }}" placeholder="BBTB"
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
                                    <input type="text" name="Z_BBU" value="{{ old('Z_BBU') }}" placeholder="Z_BBU"
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
                                    <input type="text" name="Z_TBU" value="{{ old('Z_TBU') }}" placeholder="Z_TBU"
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
                                    <input type="text" name="Z_BBTB" value="{{ old('Z_BBTB') }}" placeholder="Z_BBTB"
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
                                    <input type="text" name="status_gizi" value="{{ old('status_gizi') }}" placeholder="Status Gizi"
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
                                    <input type="text" name="z_score" value="{{ old('z_score') }}" placeholder="Z_Score"
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
                                    <input type="text" name="validasi" value="{{ old('validasi') }}" placeholder="Validasi"
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
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
<script>
 $('#nama').on('change', function(){
  $('#jenis_kelamin').val($(this).val());
})

// init
$('#nama').change();
</script>
