<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Hasilolahan extends Model
{
	protected $table = 'olahan_pasca_produksi';
	protected $primaryKey = 'id_hasil_produksi';
	protected $fillable = ['id_hasil_produksi','id_produksi','hasil_produksi_total','jumlah_lemak_kakao','jumlah_permen_cokelat','jumlah_bubuk_kakao','jumlah_bubuk_cokelat'];
	public function scopeOlahan($query)
	{
		return $query->select(DB::raw('SUM(jumlah_permen_cokelat)-(SELECT SUM(permen_coklat_dipesan) FROM `pemesanan`) as jumlahPermen,SUM(jumlah_bubuk_cokelat) - (SELECT SUM(bubuk_coklat_dipesan) FROM `pemesanan`) as jumlahBubuk'));
	}

	public $timestamps = false;
}
