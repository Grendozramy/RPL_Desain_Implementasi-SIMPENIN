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
                                name="dataanak_id" id="dataanak_id">
                                @foreach ($anak as $item)
                                    <option value="{{ $item->id }}" selected>{{ $item->nama_anak}}</option>
                                    
                                @endforeach
                                <option value="" selected disabled hidden>-- PILIH --</option>
                            </select>
                            @error('dataanak_id')
                            <div class="invalid-feedback" style="display: block">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <input type="text" name="dataanak_id" id="jenis_kelamin"  disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA</label>
                                    <input type="text" name="dataanak_id" id="tgl_lahir" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TINGGI BADAN (CM)</label>
                                    <input type="text" name="dataanak_id" id="tinggi_badan" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BERAT BADAN (KG)</label>
                                    <input type="text" name="dataanak_id" id="berat_badan" disabled>
                                </div>
                            </div>
                        </div>  --}}

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
                                    <label>BB/U</label>
                                    <select class="form-control select-category @error('BBU') is-invalid @enderror"
                                    name="BBU">
                                        <option value="" selected disabled hidden >-- PILIH --</option>
                                        <option value="Gizi Baik">Gizi Baik</option>
                                        <option value="Gizi Kurang">Gizi Kurang</option>
                                        <option value="Gizi Lebih">Gizi Lebih</option>
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
                                        <option value="Pendek">Pendek</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Tinggi">Tinggi</option>
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
                                        <option value="Kurus">Kurus</option>
                                        <option value="Normal">Normal</option>
                                        <option value="Gemuk">Gemuk</option>
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
                            SIMPAN</button>
                        <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
<script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
<script type="text/javascript">
$('#dataanak_id').on('change', (event) => {
    console.log();
    getanak(event.target.value).then(anak => {
        $('#jenis_kelamin').val(anak.jenis_kelamin);
    });
});

async function getanak(id) {
        let response = await fetch("{{ route('admin.gizi.store') }}" + id)
        let data = await response.json();

        return data;
    }
</script>
