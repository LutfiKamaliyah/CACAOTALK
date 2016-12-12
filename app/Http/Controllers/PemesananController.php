<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Pemesanan;
use App\Models\Hasilolahan;
class PemesananController extends Controller
{
    
    public function create()
    {
        $pemesanan = Pemesanan::all();
        $hasilolahan =Hasilolahan::all();
        $olahan = Hasilolahan::olahan()->get();
        return view('pemesanan.create-pemesanan',compact("pemesanan","hasilolahan","olahan"));

    }

    public function show()//
    {
        $pemesanan =Pemesanan::all();
        return view('pemesanan.tabel-pemesanan',compact('pemesanan'));

    }
    public function showValidasi()//
    {
        $pemesanan =Pemesanan::all();
        return view('pemesanan.view-validasi',compact('pemesanan'));

    }

    public function store(Request $request)//buat cretae klik simpan
    {
        Pemesanan::create($request->all());
        return redirect('/pemesanan/create');
    }

    public function validasi($id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->status = 'tervalidasi';
        $pemesanan->save();
        return redirect('/validasiPemesanan');
    }
    public function edit($id)
    {
        $pemesanan = Pemesanan::find($id);
        $hasilolahan =Hasilolahan::all();
        return view('pemesanan.edit-pemesanan',compact('pemesanan','hasilolahan'));
    }
}
