<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembayaranAtasPembelian extends Model
{
    use HasFactory;

    protected $table = 'pembayaran_atas_pembelian';
    protected $primaryKey = 'id';
    protected $fillable = ['klien_id','sudah_dibayar'] ;

}
