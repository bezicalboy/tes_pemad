<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipePekerjaan extends Model
{
    use HasFactory;
    

    protected $fillable = ['pekerjaan_id','jenis_pekerjaan'] ;
    protected $table = 'tipe_pekerjaan';

}
