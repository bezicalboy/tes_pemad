<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananPembelian extends Model
{
    use HasFactory;

    protected $table = 'pesanan_pembelian';
    protected $primaryKey = 'id';
    protected $fillable = ['klien_id','nama_pesanan'] ;
}
