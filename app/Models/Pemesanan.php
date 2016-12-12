<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';
    protected $fillable = ['id_pemesanan','nama_pemesan','alamat_pemesan',' 	instansi_pemesan','bubuk_coklat','permen_coklat','stok_bubuk_coklat','stok_permen_coklat','bubuk_coklat_dipesan','permen_coklat_dipesan','status'];


    public $timestamps = false;
}
