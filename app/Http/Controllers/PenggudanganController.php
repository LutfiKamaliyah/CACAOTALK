<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Penggudangan;
use App\Models\Panen;

class PenggudanganController extends Controller
{

	public function create()
	{
		$panens = Panen::all();
		return view('penggudangan.create-penggudangan',compact("panens"));
	}
	// public function store(Request $request)//buat cretae
	// {
	// 	Penggudangan::create($request->all());
	// 	return redirect('/penggudangan/create');
	// }
	public function index()
	{
		$penggudangans= Penggudangan::all();
		$jenis = Penggudangan::jenis()->get();
		return view('penggudangan.tabel-penggudangan',compact("penggudangans","jenis"));
	}
	public function show($id)
    {
        $penggudangan = Penggudangan::with('panen.tanam.buah')->find($id);
        return $penggudangan;
    }
    public function store(Request $request)//buat cretae klik simpan
    {

        Penggudangan::create($request->all());
        $panen = Panen::find($request->id_panen);
        if ($request->panen_disimpan != '') {
            $panen->produktivitas -= $request->panen_disimpan;
        }
        $panen->update();
        return redirect('/penggudangan');
    }
}
