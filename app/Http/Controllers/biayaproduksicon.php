<?php

namespace App\Http\Controllers;

use App\Models\BiayaProduksiModel;
use App\Models\DataPegawaiModel;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class biayaproduksicon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_biayaproduksi = BiayaProduksiModel::
            where('id_biaya_produksi','LIKE','%'. request('search').'%')
            ->orwhere('id_data_produksi','LIKE','%'. request('search').'%')
            ->orwhere('biaya_produksi','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_biayaproduksi = BiayaProduksiModel::paginate(6);
        }
        return view('kepegawaian.view_pegawai', compact('tb_biayaproduksi'));
    }

    public function create(){
        return view('kepegawaian.create_pegawai');
    }

    public function insert(Request $request)
    {
        BiayaProduksiModel::create($request->all());
        return redirect()->route('view_pegawai_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_biaya_produksi){
        $tb_biayaproduksi =  BiayaProduksiModel::find($id_biaya_produksi);
        return view('kepegawaian.edit_pegawai', compact('tb_biayaproduksi'));
    }

    public function update(Request $request, string $id_biaya_produksi)
    {
        $tb_biayaproduksi = BiayaProduksiModel::find($id_biaya_produksi);
        $tb_biayaproduksi->update($request->all());
        return redirect()->route('view_pegawai_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_biaya_produksi){
        $tb_biayaproduksi =  BiayaProduksiModel::find($id_biaya_produksi);
        //dd($data_pegawai);
        $tb_biayaproduksi->delete();
        return redirect()->route('view_pegawai_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_biayaproduksi = BiayaProduksiModel::all();
        view()->share('view_pegawai_index', $tb_biayaproduksi);
        //dd($data_pegawai);
        $pdf = PDF::loadview('kepegawaian.cetak_pegawai', compact('tb_biayaproduksi'));
        return $pdf->stream('Data Biaya.pdf');
    }
}
