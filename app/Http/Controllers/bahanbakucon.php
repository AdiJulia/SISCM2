<?php

namespace App\Http\Controllers;

use App\Models\BahanBakuModel;
use App\Models\DataPemasokModel;
use Illuminate\Http\Request;
use PDF;

class bahanbakucon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_bahanbaku = BahanBakuModel::
            where('id_bahan_baku','LIKE','%'. request('search').'%')
            ->orwhere('id_pemasok','LIKE','%'. request('search').'%')
            ->orwhere('jenis_bahan','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_bahan','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_masuk','LIKE','%'. request('search').'%')
            ->orwhere('harga_bahan','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_bahanbaku = BahanBakuModel::paginate(6);
        }
        return view('bahanbaku.view_bahanbaku', compact('tb_bahanbaku'));
    }

    public function create(){
        $tb_pemasok = DataPemasokModel::all();
        return view('bahanbaku.create_bahanbaku', compact('tb_pemasok'));
    }

    public function insert(Request $request)
    {
        BahanBakuModel::create($request->all());
        return redirect()->route('view_bahanbaku_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_bahan_baku){
        $tb_bahanbaku =  BahanBakuModel::find($id_bahan_baku);
        $tb_pemasok = DataPemasokModel::all();
        return view('bahanbaku.edit_bahanbaku', compact('tb_bahanbaku', 'tb_pemasok'));
    }

    public function update(Request $request, string $id_bahan_baku)
    {
        $tb_bahanbaku = BahanBakuModel::find($id_bahan_baku);
        $tb_bahanbaku->update($request->all());
        return redirect()->route('view_bahanbaku_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_bahan_baku){
        $tb_bahanbaku = BahanBakuModel::find($id_bahan_baku);
        //dd($data_pegawai);
        $tb_bahanbaku->delete();
        return redirect()->route('view_bahanbaku_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_bahanbaku = BahanBakuModel::all();
        view()->share('view_bahanbaku_index', $tb_bahanbaku);
        //dd($data_pegawai);
        $pdf = PDF::loadview('bahanbaku.cetak_bahanbaku', compact('tb_bahanbaku'));
        return $pdf->stream('Data Bahan Baku.pdf');
    }
}
