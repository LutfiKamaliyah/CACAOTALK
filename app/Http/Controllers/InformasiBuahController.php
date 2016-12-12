<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Kakao;

class InformasiBuahController extends Controller
{

	public function tabel()
	{
		return view('InformasiBuah.tabel-informasibuah');
	}
	public function show()//
    {
    	$informasibuahs = Kakao::all();
    	return view('InformasiBuah.tabel-informasibuah',compact('informasibuahs'));
    }
}
