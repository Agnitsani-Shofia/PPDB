@extends('ppdbs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Pendaftaran</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('ppdbs.index') }}"> Back</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('ppdbs.store') }}" method="POST">
@csrf
   <div class="row">
   <div class="col-xs-12 col-sm-12 col-md-12">
   <div class="form-group">
   <strong>No Tes:</strong>
   <input type="number" min='0' name="No_Tes" class="form-control" placeholder="No Tes">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Lengkap:</strong>
<input type="string" name="Nama_Lengkap" class="form-control" placeholder="Nama Lengkap">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   <div class="mb-3">
                    <p>
            <label>Jenis kelamin:</label>
            <label><input type="radio" name="Jenis_Kelamin" value="laki-laki" /> Laki-laki</label>
            <label><input type="radio" name="Jenis_Kelamin" value="perempuan" /> Perempuan</label>
        </p>
                    <div id="JK" class="form-text"><i class="fas fa-info-circle"></i> </div>
                    @error('JK')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tempat Tanggal Lahir:</strong>
<input type="date" name="TTL" class="form-control" placeholder="TTL">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   <div class="mb-3">
                    <label for="Agama" class="form-label">Agama <small style="color: red;">*</small></label>
                    <select class="form-select" name="Agama">
                        <option value="" selected disabled>-- Pilih --</option>
                        <option value="Islam">Islam</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Konghucu">Konghucu</option>
                    </select>
                    <div id="Agama" class="form-text"><i class="fas fa-info-circle"></i> </div>
                    @error('Agama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Cita-Cita:</strong>
    <input type="string" name="Cita_Cita" class="form-control" placeholder="Cita-Cita">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Hobi:</strong>
<input type="string" name="Hobi" class="form-control" placeholder="Hobi">
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Anak-ke:</strong>
    <input type="text" min='0' name="Anak_ke" class="form-control" placeholder="Anak-ke">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jumlah Saudara:</strong>
<input type="number" min='0' name="Jumlah_Saudara" class="form-control" placeholder="Jumlah Saudara">
</div>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Tinggi Badan:</strong>
    <input type="number" min='0' name="Tinggi_Badan" class="form-control" placeholder="Tinggi Badan">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Berat Badan:</strong>
<input type="number" min='0' name="Berat_Badan" class="form-control" placeholder="Berat Badan">
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
   <div class="mb-3">
                    <label for="Golongan_Darah" class="form-label">Golongan Darah <small style="color: red;">*</small></label>
                    <select class="form-select" name="Golongan_Darah">
                        <option value="" selected disabled>-- Silakan Pilih --</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <div id="Golongan_Darah" class="form-text"><i class="fas fa-info-circle"></i> </div>
                    @error('Golongan_Darah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection