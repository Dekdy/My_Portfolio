<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengalaman extends Model
{
    protected $table = 'pengalaman';
    protected $primaryKey = 'id_pengalaman';
    protected $fillable = ['nama_perusahaan','posisi','deskripsi','lama_pengalaman'];
}
