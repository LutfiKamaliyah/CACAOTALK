<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Hasilolahan;

class HasilolahanController extends Controller
{

	public function tabel()
	{
		return view('hasilolahan.tabel-hasilolahan');
	}

	public function index()//
	{
		$hasilolahan = Hasilolahan::all();
		return view('hasilolahan.tabel-hasilolahan',compact('hasilolahan'));
	}

	public function show($id)
	{
		$hasilolahan = Hasilolahan::find($id);
		return $hasilolahan;
	}
	
}
