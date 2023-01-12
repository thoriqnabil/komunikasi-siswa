<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggaransiswaa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = true;
    public function pelanggaran()
    {
        return $this->belongsTo(Dasis::class);
    }
    public function siswa()
    {
        return $this->belongsTo(Pelanggaran::class);
    }
}
