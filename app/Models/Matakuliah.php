<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    use HasFactory;
    protected $table = "matakuliah";
    protected $primarykey = "id";
    protected $fillable = ['id',
                           'kd_mk',
                           'nama_mk',
                           'sks',
                           'semester',
                           'kelompok'];

    public function pengambilanmatkul()
    {
        return $this->hasMany(Pengambilanmatkul::class);
    }


}
