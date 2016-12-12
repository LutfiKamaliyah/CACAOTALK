<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Panen;
use App\Models\Kakao;
use App\Models\Tanam;

class PanenController extends Controller
{
    
	
	public function show()//
    {
    	$panen = Panen::all();
    	return view('panen.tabel-panen',compact('panen'));
    }

    public function detail($id){
    	$panen = Panen::with('tanam.buah')->find($id);
    	return $panen;
    }
}
