<?php

namespace App\Models;

use App\Models\Dasis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function dasis(){
        return $this->belongsToMany(Dasis::class, Pelanggaransiswaa::class);
    }
}
