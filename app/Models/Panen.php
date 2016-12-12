<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Panen extends Model
{
    protected $table = 'panen_kakao';
    protected $primaryKey = 'id_panen';
    protected $fillable = ['id_panen','id_tanam','tanggal_panen','produktivitas'];

    public function tanam()
    {
    	return $this->belongsTo(Tanam::class,'id_tanam');
    }

    public $timestamps = false;
}
