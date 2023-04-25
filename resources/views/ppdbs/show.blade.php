@extends('ppdbs.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pendaftaran</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ppdbs.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No Tes:</strong>
                {{ $ppdb->No_Tes }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap:</strong>
                {{ $ppdb->Nama_Lengkap }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>JK:</strong>
                {{ $ppdb->JK }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>TTL:</strong>
                {{ $ppdb->TTL }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama:</strong>
                {{ $ppdb->Agama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cita-Cita:</strong>
                {{ $ppdb->Cita_Cita }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hobi:</strong>
                {{ $ppdb->Hobi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Anak Ke:</strong>
                {{ $ppdb->Anak_ke }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jumlah Saudara:</strong>
                {{ $ppdb->Jumlah_Saudara }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tinggi Badan:</strong>
                {{ $ppdb ->Tinggi_Badan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Berat Badan:</strong>
                {{ $ppdb->Berat_Badan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Golongan Darah:</strong>
                {{ $ppdb->Golongan_Darah }}
            </div>
        </div>
    </div>
@endsection