<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelasahmad_model;

class KelasahmadController extends Controller
{
    public function index(){
        $mykelas = new Kelasahmad_model();
        $kelasahmad = $mykelas->tampil_kelasahmad();
        
        $data = array('kelasahmad' => $kelasahmad);
        return view('kelasahmad/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('kelasahmad/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('kelasahmad')
         ->insert([
             'kelas_ahmad'  =>  $request->kelas_ahmad,
             'nama_ahmad'  =>  $request->nama_ahmad,
             'keterangan'  =>  $request->keterangan
             
         ]);
         return redirect('kelasahmad');
     }
 
     public function edit($id){
         // return ('Testing');
         $kelasahmad = \DB::table('kelasahmad')->where('id', $id)->first();
         //dd($akun);
         $data = array('kelasahmad' => $kelasahmad);
         return view('kelasahmad/edit', $data);
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('kelasahmad')->where('id',$request->id)
         ->update([
            'kelas_ahmad'  =>  $request->kelas_ahmad,
            'nama_ahmad'  =>  $request->nama_ahmad,
            'keterangan'  =>  $request->keterangan
         ]);
         return redirect('kelasahmad');
     }
 
     public function delete ($id){
         $query = \DB::table('kelasahmad')->where('id',$id)->delete();
         return redirect('kelasahmad');
     } 
}
