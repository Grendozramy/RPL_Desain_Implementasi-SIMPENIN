@extends('layouts.backend.app1')
 
@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Informasi Data Gizi</h1>
        </div>
 
        <div class="section-body">
 
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-unlock"></i> Informasi Data Gizi</h4>
                </div>
                
 
                <div class="card-body">
                        <div class="form-group">
                            <label>NAMA ANAK</label>
                            <select disabled class="form-control select-category @error('dataanak_id') is-invalid @enderror "
                                name="dataanak_id">
                                <option value="">-- PILIH NAMA ANAK --</option>
                                @foreach ($anak as $item)
                                    @if($gizi->dataanak_id == $item->id)
                                        <option value="{{ $item->id  }}" selected>{{ $item->nama_anak }}</option>
                                    @else
                                        <option value="{{ $item->id  }}">{{ $item->nama_anak }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>JENIS KELAMIN</label>
                                    <select disabled class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->jenis_kelamin }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->jenis_kelamin }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>USIA</label>
                                    <select disabled class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->age() }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->age() }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>TINGGI BADAN (CM)</label>
                                    <select disabled class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->tinggi_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->tinggi_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>BERAT BADAN (KG)</label>
                                    <select disabled class="form-control select-category @error('dataanak_id') is-invalid @enderror"
                                        name="dataanak_id">
                                        <option value="">-- PILIH --</option>
                                        @foreach ($anak as $item)
                                            @if($gizi->dataanak_id == $item->id)
                                                <option value="{{ $item->id  }}" selected>{{ $item->berat_badan }}</option>
                                            @else
                                                <option value="{{ $item->id  }}">{{ $item->berat_badan }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>BB/U</th>
                                                <td style="width:70%">{{ $gizi->BBU}}</td>
                                            </tr>   
                                            <tr>
                                                <th>TB/U</th>
                                                <td>{{ $gizi->TBU}}</td>  
                                            </tr>
                                            <tr>
                                                <th>BB/TB</th>
                                                <td>{{ $gizi->BBTB}}</td>
                                            </tr> 
                                            <tr>
                                                <th>Z_BB/U</th>
                                                <td>{{ $gizi->Z_BBU}}</td> 
                                            </tr>
                                            <tr>
                                                <th>Z_TB/U</th>
                                                <td>{{ $gizi->Z_TBU}}</td> 
                                            </tr>
                                            <tr>
                                                <th>Z_BB/TB</th>
                                                <td>{{ $gizi->Z_BBTB}}</td>
                                            </tr>
                                            <tr>
                                                <th>STATUS GIZI</th>
                                                <td>{{ $gizi->status_gizi}}</td>
                                            </tr>
                                            <tr> 
                                                <th>Z_SCORE</th>
                                                <td>{{ $gizi->z_score}}</td>
                                            </tr>  
                                            <tr> 
                                                <th>VALIDASI</th>
                                                <td>{{ $gizi->validasi}}</td>
                                            </tr>  
                                        </thead>   
                                    </table>
                                    <a href="{{ route('admin.anak.index') }}" class="btn btn-primary mr-1" ><i class="fa fa-arrow-left"></i>
                                        BACK</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@stop
