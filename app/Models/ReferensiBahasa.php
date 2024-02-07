<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferensiBahasa extends Model
{
    use HasFactory;

    protected $table = 'referensi_bahasa';

    protected $fillable = ['klien_id','user_id','bahasa'] ;
}
