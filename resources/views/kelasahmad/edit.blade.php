@extends('layout.main')
@section('content')
<h1>Tambah Data Kelas</h1>
<form action="{{ asset('kelasahmad/edit_proses') }}" method="POST">
@csrf
<input type="hidden" name="id" value="<?php echo $kelasahmad->id ?>">
ID Kelas <input type="text" name="kelas_ahmad" value="<?php echo $kelasahmad->kelas_ahmad ?>"><br>
Nama Kelas<input type="text" name="nama_ahmad" value="<?php echo $kelasahmad->nama_ahmad ?>"><br>
Keterangan Kelas <input type="text" name="keterangan" value="<?php echo $kelasahmad->keterangan ?>"><br>
<input type="submit" value="Simpan">
</form>
@endsection     