<?php

namespace App\Models;

use App\Models\Dasis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dagur extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'dagurs';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'name', 'nip', 'mapel', 'jeniskelamin'];

    public function siswa() {
        return $this->hasMany('App\Models\Dasis');
    }
}
