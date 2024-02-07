<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';
    protected $table = 'pekerjaan';

    protected $fillable = ['user_id','nama_pekerjaan'] ;

    public function tipePekerjaan(){
        return $this->hasOne(TipePekerjaan::class);
    }
}
