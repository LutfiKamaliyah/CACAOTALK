<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tanam extends Model
{
    protected $table = 'penanaman_kakao';
    protected $primaryKey = 'id_tanam';
    protected $fillable = ['id_buah','tanggal_tanam','musim_tanam','jumlah_bibit','luas_lahan'];

    public function buah()
    {
    	return $this->belongsTo(KaKao::class,'id_buah');
    }

    public function panen()
    {
    	return $this->hasOne(Panen::class,'id_tanam');
    }

    public $timestamps = false;
}
