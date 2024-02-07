<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['nama','email','notelp'] ;

    public function referensiBahasa(){
        return $this->hasOne(ReferensiBahasa::class);
    }
    public function pekerjaan(){
        return $this->hasOne(Pekerjaan::class);
    }
    public function penawaranJasa(){
        return $this->hasOne(PenawaranJasa::class);
    }

}
