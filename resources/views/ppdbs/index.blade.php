@extends('ppdbs.layout')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Pendaftaran</h2>
</div>
<div class="pull-right">
<a class="btn btn-success" href="{{ route('ppdbs.create') }}"> Create New Pendaftaran</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
    <th>No </th>
    <th>No Tes</th>
    <th>Nama Lengkap</th>
    <th>JK</th>
    <th>TTL</th>
    <th>Agama</th>
    <th>Cita-Cita</th>
    <th>Hobi</th>
    <th>Anak-ke</th>
    <th>Jumlah Saudara</th>
    <th>Tinggi Badan</th>
    <th>Berat Badan</th>
    <th>Golongan Darah</th>
    <th width="280px">Action</th>
</tr>
@foreach ($ppdbs as $ppdb)
<tr>
    <td>{{ ++$i }}</td>
    <td>{{ $ppdb->No_Tes }}</td>
    <td>{{ $ppdb->Nama_Lengkap }}</td>
    <td>{{ $ppdb->JK}}</td>
    <td>{{ $ppdb->TTL }}</td>
    <td>{{ $ppdb->Agama}}</td>
    <td>{{ $ppdb->Cita_Cita }}</td>
    <td>{{ $ppdb->Hobi }}</td>
    <td>{{ $ppdb->Anak_ke }}</td>
    <td>{{ $ppdb->Jumlah_Saudara }}</td>
    <td>{{ $ppdb->Tinggi_Badan }}</td>
    <td>{{ $ppdb->Berat_Badan }}</td>
    <td>{{ $ppdb->Golongan_Darah }}</td>
<td>
<form action="{{ route('ppdbs.destroy',$ppdb->id) }}" method="POST">
<a class="btn btn-info" href="{{ route('ppdbs.show',$ppdb->id) }}">Show</a>
<a class="btn btn-primary" href="{{ route('ppdbs.edit',$ppdb->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus {{ $ppdb->Nama_Lengkap }} ?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
{!! $ppdbs->links() !!}
@endsection