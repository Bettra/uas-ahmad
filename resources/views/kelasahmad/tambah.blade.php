@extends('layout.main')
@section('content')

<h1>Data Kelas</h1>
<div class="card">
<div class="card-header">

<h1>Tambah Data Kelas</h1>
<form action="{{ asset('kelasahmad/tambah_proses') }}" method="POST">
@csrf
ID Kelas <input type="text" name="kelas_ahmad"><br>
Nama Kelas<input type="text" name="nama_ahmad"><br>
Keterangan <input type="text" name="keterangan"><br>
<input type="submit" value="Simpan">
</form>   

</div>
</div>
@endsection