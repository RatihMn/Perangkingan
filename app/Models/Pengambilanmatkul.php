<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengambilanmatkul extends Model
{
    use HasFactory;
    protected $table = "pengambilanmatkul";
    protected $primarykey = "id";
    protected $fillable = ['id',
                           'mk_id',
                           'thn_ajaran',
                           'semester',
                           'nilai_huruf',
                           'nilai_angka',
                           'sks',
                           'nilai'];

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class,'mk_id','id');
    }
}
