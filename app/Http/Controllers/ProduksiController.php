<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Produksi;
use App\Models\Penggudangan;
use App\Models\Kakao;
use App\Models\Hasilolahan;

class ProduksiController extends Controller
{
    
	public function create()
	{
        $penggudangans = Penggudangan::all();
        $buahs = Kakao::all();
		return view('produksi.create-produksi',compact("penggudangans","buahs"));
	}

	public function tabel()
	{
		return view('produksi.tabel-produksi');
	}

	public function store(Request $request)//buat cretae
	{
		$prod = Produksi::create($request->all());
        if ($request->metode_sortir == "Konvensional") {
            if ($request->tipe_granding == "Batu") {
                $lemak = $request->jumlah_produksi * 0.5;
                $permen = $lemak * 0.5;
                $bubuk_kakao = $request->jumlah_produksi * 0.5;
                $bubuk_coklat = $bubuk_kakao * 0.5;
            }else{
                //logam
                $lemak = $request->jumlah_produksi * 0.6;
                $permen = $lemak * 0.6;
                $bubuk_kakao = $request->jumlah_produksi * 0.6;
                $bubuk_coklat = $bubuk_kakao * 0.6;
            }
        }else{
            //modern
            if ($request->tipe_granding == "Batu") {
                $lemak = $request->jumlah_produksi * 0.7;
                $permen = $lemak * 0.7;
                $bubuk_kakao = $request->jumlah_produksi * 0.7;
                $bubuk_coklat = $bubuk_kakao * 0.7;
            }else{
                //logam
                //jumlah pro
                $lemak = $request->jumlah_produksi * 0.8;
                $permen = $lemak * 0.8;
                $bubuk_kakao = $request->jumlah_produksi * 0.8;
                $bubuk_coklat = $bubuk_kakao * 0.8;
            }
        }
        Hasilolahan::create([
                'id_produksi' => $prod->id_produksi,
                'hasil_produksi_total'=> $request->jumlah_produksi,
                'jumlah_lemak_kakao'=> $lemak,
                'jumlah_permen_cokelat'=> $permen,
                'jumlah_bubuk_kakao'=>$bubuk_kakao,
                'jumlah_bubuk_cokelat'=>$bubuk_coklat
            ]);
		return redirect('/produksi/create');
	}
	public function show()//
    {
    	$produksi = Produksi::all();
    	return view('produksi.tabel-produksi',compact('produksi'));
    }
    public function destroy($id)
    {
    	$produksi = Produksi::find($id);
    	$produksi->delete();
    	return redirect("tabel");
    }
    public function edit($id)
    {
    	$produksi = Produksi::find($id);
        $penggudangans = Penggudangan::all();
        $kakaos = Kakao::all();
    	return view('produksi.edit-produksi',compact('produksi','penggudangans','kakaos'));
    }

    public function update(Request $request,$id)
    {
    	$produksi = Produksi::find($id);
    	$produksi->update($request->all());
    	return redirect('tabel');
    }

}
