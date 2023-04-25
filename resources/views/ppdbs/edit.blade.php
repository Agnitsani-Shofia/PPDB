@extends('ppdbs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Edit ppdb</h2>
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
<form action="{{ route('ppdbs.update',$ppdb->id) }}" method="POST">
@csrf
@method('PUT')
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>No Tes:</strong>
<textarea type="number" min='0' name="No_Tes" class="form-control" placeholder="No Tes">{{ $ppdb->No_Tes }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Lengkap:</strong>
<textarea type="text" name="Nama_Lengkap" class="form-control" placeholder="Nama Lengkap">{{ $ppdb->Nama_Lengkap }}</textarea>
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
                    @enderror{{ $ppdb->JK }}
                </div>
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tempat Tanggal Lahir:</strong>
<textarea type="date" name="TTL" class="form-control" placeholder="TTL">{{ $ppdb->TTL }}</textarea>
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
                    @enderror{{ $ppdb->Agama }}
                </div>
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Cita-Cita:</strong>
<textarea type="text" name="Cita_Cita" class="form-control" placeholder="Cita-Cita">{{ $ppdb->Cita_Cita }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Hobi:</strong>
<textarea type="text" name="Hobi" class="form-control" placeholder="Hobi">{{ $ppdb->Hobi }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Anak-ke:</strong>
<textarea type="number" min='0' name="Anak_ke" class="form-control" placeholder="Anak-ke">{{ $ppdb->Anak_ke }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Jumlah Saudara:</strong>
<textarea type="number" min='0' name="Jumlah_Saudara" class="form-control" placeholder="Jumlah Saudara">{{ $ppdb->Jumlah_Saudara }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Tinggi Badan:</strong>
<textarea type="number"  name="Tinggi_Badan" class="form-control" placeholder="Tinggi Badan">{{ $ppdb->Tinggi_Badan }}</textarea>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Berat Badan:</strong>
<textarea type="number" name="Berat_Badan" class="form-control" placeholder="Berat Badan">{{ $ppdb->Berat_Badan }}</textarea>
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
                    @enderror{{ $ppdb->Golongan_Darah }}
                </div>
                </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection