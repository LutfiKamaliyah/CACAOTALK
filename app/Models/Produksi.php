<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    protected $table = 'produksi_pengolahan';
    protected $primaryKey = 'id_produksi';
    protected $fillable = ['id_produksi','id_stok','jumlah_produksi','metode_sortir','tipe_granding'];

    public function penggudangan()
    {
    	return $this->belongsTo(Penggudangan::class,'id_stok');
    }


    public $timestamps = false;
}
