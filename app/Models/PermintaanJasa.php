<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanJasa extends Model
{
    use HasFactory;

    protected $table = 'permintaan_jasa';
    protected $primaryKey = 'id';
    protected $fillable = ['klien_id','penawaran_jasa_id','nama_permintaan_jasa','harga_permintaan_jasa'] ;

 
    
}
