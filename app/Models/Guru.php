<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    public function Mapel() {
        return $this->belongsToMany(Mapel::class,'guru_mapel');
    }
}
