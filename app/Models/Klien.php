<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klien extends Model
{
    use HasFactory;

    protected $table = 'klien';

    protected $primaryKey = 'id';
    protected $fillable = ['nama_klien','email_klien','notelp_klien'] ;

    public function referensiBahasa(){
        return $this->hasOne(ReferensiBahasa::class);
    }
    public function referensiPerusahaan(){
        return $this->hasOne(ReferensiPerusahaan::class);
    }

    public function permintaanJasa(){
        return $this->hasOne(PermintaanJasa::class);
    }
    public function tagihan(){
        return $this->hasOne(Tagihan::class);
    }
    public function pembayaranAtasPembelian(){
        return $this->hasOne(PembayaranAtasPembelian::class);
    }
    public function pesananPembelian(){
        return $this->hasOne(PesananPembelian::class);
    }
}
