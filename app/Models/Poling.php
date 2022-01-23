<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poling extends Model
{
    use HasFactory;
    protected $table = "poling";
    protected $primarykey = "id";
    protected $fillable = ['id',
                            'nama_mhs',
                            'pemberi_poling',
                            'photogenic',
                            'tanggung_jawab',
                            'jujur',
                            'aktif',
                            'kreatif',
                            'nilai'];
}
