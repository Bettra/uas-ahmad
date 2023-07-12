@extends('layout.main')
@section('content')

<h1>Data Kelas</h1>
<div class="card">
<div class="card-header">
<a href="{{ asset('kelasahmad/tambah')  }}">Tambah Data</a>
<table class="table table-sm table-stripped table-bordered">
    <thead>
 <tr style="background:black;color:white">
 <td>No</td>
    <td>Kelas</td>
    <td>Nama Kelas</td>
    <td>Keterangan</td> 
    <td>Aksi</td>
 </tr> 
 </thead>

    <tbody>  
<?php 
$no=0;
foreach ($kelasahmad as $rows){
$no++;
?>
<tr>
<td>{{ $no }}</td>
    <td>{{ $rows->kelas_ahmad }}</td>
    <td>{{ $rows->nama_ahmad }}</td>
    <td>{{ $rows->keterangan }}</td>
   
    
    <td>
        <a href="{{ asset('kelasahmad/edit/'.$rows->id ) }}">Edit</a>
        <a href="{{ asset('kelasahmad/delete/'.$rows->id ) }}">Del</a>
</td>
</tr>
<?php 
}
?>
 </tbody>
</table>
</div>
</div>
@endsection