<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenawaranJasa extends Model
{
    use HasFactory;

    protected $table = 'penawaran_jasa';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','klien_id','nama_penawaran_jasa','harga_penawaran_jasa'] ;

    public function permintaanJasa(){
        return $this->hasOne(PermintaanJasa::class);
    }

}
