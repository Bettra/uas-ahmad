<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelasahmad_model extends Model
{
    use HasFactory;
    protected $table ="kelasahmad";
    protected $primaryKey ="id";

    public function tampil_kelasahmad(){
        $query = \DB::table('kelasahmad')->get();
        return $query;
    }
}
