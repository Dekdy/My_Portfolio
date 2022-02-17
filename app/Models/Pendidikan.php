<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikan';
    protected $primaryKey = 'id_pendidikan';
    protected $fillable = ['nama_pendidikan','deskripsi','class','tahun_pendidikan'];
}
