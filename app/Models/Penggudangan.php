<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Penggudangan extends Model
{
    protected $table = 'penggudangan_hasil_panen';
    protected $primaryKey = 'id_stok';
    protected $fillable = ['id_stok','id_panen','nama_buah','tanggal_tanam','tanggal_panen','produktivitas','panen_disimpan'];

    public function panen()
    {
    	return $this->belongsTo(Panen::class,'id_panen');
    }


	public function scopeJenis($query)
    {
        return $query->select(DB::raw('jenis_kakao,SUM(panen_disimpan) as jumlah'))
        	->join('panen_kakao', 'penggudangan_hasil_panen.id_panen', '=', 'panen_kakao.id_panen')
        	->join('penanaman_kakao', 'panen_kakao.id_tanam', '=', 'penanaman_kakao.id_tanam')
        	->join('data_buah_kakao', 'penanaman_kakao.id_buah', '=', 'data_buah_kakao.id_buah')
            ->groupBy('jenis_kakao');
    }
    

    public $timestamps = false;
}
