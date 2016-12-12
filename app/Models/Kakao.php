<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kakao extends Model
{
    protected $table = 'data_buah_kakao';
    protected $primaryKey = 'id_buah';
    protected $fillable = ['nama_buah','jenis_kakao','warna_biji','berat_biji','ketahanan_penyakit','deskripsi'];

    public function penanaman()
    {
    	return $this->hasMany(Tanam::class,'id_buah');
    }

    public $timestamps = false;
}
