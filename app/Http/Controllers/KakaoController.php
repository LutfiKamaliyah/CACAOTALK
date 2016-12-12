<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Kakao;
use App\Models\Panen;

class KakaoController extends Controller
{
    
	public function create()
	{
		return view('buahKakao.create-kakao');
	}

	public function tabel()
	{
		return view('buahKakao.tabel-kakao');
	}

	public function store(Request $request)//buat cretae
	{
		Kakao::create($request->all());
		return redirect('tabel');
	}
	public function index()//
    {
    	$buah = Kakao::all();
    	return view('buahKakao.tabel-kakao',compact('buah'));
    }
    public function destroy($id)
    {
    	$buah = Kakao::find($id);
    	$buah->delete();
    	return redirect("tabel");
    }
    public function edit($id)
    {
    	$buah = Kakao::find($id);
    	return view('buahKakao.edit-kakao',compact('buah'));
    }

    public function show($id)
    {
        $buah = Kakao::with('penanaman')->find($id);
        return $buah;
    }

    public function update(Request $request,$id)
    {
    	$buah = Kakao::find($id);
    	$buah->update($request->all());
    	return redirect('tabel');
    }
    
}
