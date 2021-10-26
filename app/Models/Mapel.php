<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    public function Guru(){
        return $this->belongsToMany(Guru::class,'guru_mapel');
    }
}
