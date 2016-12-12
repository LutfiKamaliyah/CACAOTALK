<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Tanam;
use App\Models\Kakao;
use App\Models\Panen;
use Carbon\Carbon;


class TanamController extends Controller
{

	public function create()
	{
        $buah=Kakao::all();
        return view('penanaman.create-penanaman',compact('buah'));
    }

	public function store(Request $request)//buat cretae
	{
		$tanam = Tanam::create($request->all());
        $buah = Kakao::find($request->id_buah);
        $tgl = Carbon::createFromFormat('Y-m-d', $request->tanggal_tanam);
        if ($buah->jenis_kakao == 'Mulia') {
            if ($request->musim_tanam == 'Kemarau') {
                //return 'a '.$tgl->a,mddMonths(6);
                if($request->luas_lahan<=100){
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(6),
                    'produktivitas' => ($tanam->jumlah_bibit * 60)
                    ];
                }else{
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(6),
                    'produktivitas' => ($tanam->jumlah_bibit * 30)
                    ];
                }
                
            }else{
                // return 'b '.$tgl->addMonths(9);
                if($request->luas_lahan<=100){
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(9),
                    'produktivitas' => ($tanam->jumlah_bibit * 50)
                    ];
                }else{
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(9),
                    'produktivitas' => ($tanam->jumlah_bibit * 25)
                    ];
                }
            }
        }else{
            if ($request->musim_tanam == 'Kemarau') {
                //return 'c '.$tgl->addMonths(8);
                if($request->luas_lahan<=100){
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(8),
                    'produktivitas' => ($tanam->jumlah_bibit * 40)
                    ];
                }else{
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(8),
                    'produktivitas' => ($tanam->jumlah_bibit * 20)
                    ];
                }
            }else{
                //return 'd '.$tgl->addMonths(11);
                if($request->luas_lahan<=100){
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(11),
                    'produktivitas' => ($tanam->jumlah_bibit * 30)
                    ];
                }else{
                    $panen = [
                    'id_tanam' => $tanam->id_tanam,
                    'tanggal_panen' => $tgl->addMonths(11),
                    'produktivitas' => ($tanam->jumlah_bibit * 15)
                    ];
                }
            }
        }
        Panen::create($panen);
        //return $panen;
        return redirect('tanam');
    }
	public function show()//
    {
    	$tanam = Tanam::all();
    	return view('penanaman.tabel-penanaman',compact('tanam'));
    }
    public function destroy($id)
    {
    	$tanam= Tanam::find($id);
    	$tanam->delete();
    	return redirect("tabel");
    }
    public function edit($id)
    {
    	$tanam = Tanam::find($id);
    	return view('penanaman.edit-penanaman',compact('tanam'));
    }

    public function update(Request $request,$id)
    {
    	$tanam = Tanam::find($id);
    	$tanam->update($request->all());
        $buah = Kakao::find($request->id_buah);
        $tgl = Carbon::createFromFormat('Y-m-d', $request->tanggal_tanam);
        if ($buah->jenis_kakao == 'Mulia') {
            if ($request->musim_tanam == 'Kemarau') {
                //return 'a '.$tgl->a,mddMonths(6);
                if($request->luas_lahan<=100){
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(6),
                        'produktivitas' => ($tanam->jumlah_bibit * 60)
                    ];
                }else{
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(6),
                        'produktivitas' => ($tanam->jumlah_bibit * 30)
                    ];
                }
                
            }else{
                // return 'b '.$tgl->addMonths(9);
                if($request->luas_lahan<=100){
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(9),
                        'produktivitas' => ($tanam->jumlah_bibit * 50)
                    ];
                }else{
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(9),
                        'produktivitas' => ($tanam->jumlah_bibit * 25)
                    ];
                }
            }
        }else{
            if ($request->musim_tanam == 'Kemarau') {
                //return 'c '.$tgl->addMonths(8);
                if($request->luas_lahan<=100){
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(8),
                        'produktivitas' => ($tanam->jumlah_bibit * 40)
                    ];
                }else{
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(8),
                        'produktivitas' => ($tanam->jumlah_bibit * 20)
                    ];
                }
            }else{
                //return 'd '.$tgl->addMonths(11);
                if($request->luas_lahan<=100){
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(11),
                        'produktivitas' => ($tanam->jumlah_bibit * 30)
                    ];
                }else{
                    $panen = [
                        'id_tanam' => $tanam->id_tanam,
                        'tanggal_panen' => $tgl->addMonths(11),
                        'produktivitas' => ($tanam->jumlah_bibit * 15)
                    ];
                }
            }
        }
        $tanam->panen->update($panen);
        return redirect('tanam');
    }

}