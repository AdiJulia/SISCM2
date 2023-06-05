<?php

namespace App\Http\Controllers;

use App\Models\DataPegawaiModel;
use App\Models\DataProduksiModel;
use App\Models\BahanBakuModel;
use Illuminate\Http\Request;
use PDF;

class dataproduksicon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_dataproduksi = DataProduksiModel::
            where('id_data_produksi','LIKE','%'. request('search').'%')
            ->orwhere('id_bahan_baku','LIKE','%'. request('search').'%')
            ->orwhere('id_pegawai','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_produksi','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_produksi','LIKE','%'. request('search').'%')
            ->orwhere('keterangan','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_dataproduksi = DataProduksiModel::paginate(6);
        }
        return view('produksi.view_produksi', compact('tb_dataproduksi'));
    }

    public function create(){
        $tb_bahanbaku = BahanBakuModel::all();
        $data_pegawai = DataPegawaiModel::all();
        return view('produksi.create_produksi', compact('tb_bahanbaku', 'data_pegawai'));
    }

    public function insert(Request $request)
    {
        DataProduksiModel::create($request->all());
        return redirect()->route('view_produksi_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_dataproduksi){
        $tb_dataproduksi =  DataProduksiModel::find($id_dataproduksi);
        $tb_bahanbaku = BahanBakuModel::all();
        $data_pegawai = DataPegawaiModel::all();
        return view('produksi.edit_produksi', compact('tb_dataproduksi', 'tb_bahanbaku', 'data_pegawai'));
    }

    public function update(Request $request, string $id_data_produksi)
    {
        $tb_dataproduksi = DataProduksiModel::find($id_data_produksi);
        $tb_dataproduksi->update($request->all());
        return redirect()->route('view_produksi_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_data_produksi){
        $tb_dataproduksi =  DataProduksiModel::find($id_data_produksi);
        //dd($data_dataproduksi);
        $tb_dataproduksi->delete();
        return redirect()->route('view_produksi_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_dataproduksi = DataProduksiModel::all();
        view()->share('view_produksi_index', $tb_dataproduksi);
        //dd($data_dataproduksi);
        $pdf = PDF::loadview('produksi.cetak_produksi', compact('tb_dataproduksi'));
        return $pdf->stream('Data Data Produksi.pdf');
    }
}
