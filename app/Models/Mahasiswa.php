<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $primarykey = 'id';
    protected $fillable = [
        'id','nim','nama','tempat_lahir','tgl_lahir','jenis_kelamin','no_hp','email','alamat','tahun_masuk'];
}
