<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiPerusahaan extends Model
{
    use HasFactory;

    protected $table = 'referensi_perusahaan';

    protected $fillable = ['klien_id','email_perusahaan','akun_bank'] ;
}
