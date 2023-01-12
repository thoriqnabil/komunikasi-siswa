<?php

namespace App\Models;

use App\Models\Dagur;
use App\Models\Pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dasis extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'dases';
    protected $fillable = ['nama', 'kelas', 'jurusan', 'nisn', 'jeniskelamin', 'alamat', 'notelp', 'email', 'password', 'walikelas'];


    public function pelanggaran(){
        return $this->belongsToMany(Pelanggaran::class, Pelanggaransiswaa::class);
    }

    public function guru(){
        return $this->belongsTo('App\Models\Dagur');
    }
}
