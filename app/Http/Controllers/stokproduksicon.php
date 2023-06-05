<?php

namespace App\Http\Controllers;

use App\Models\DataProduksiModel;
use App\Models\DatastokproduksiModel;
use App\Models\StokProduksiModel;
use Illuminate\Http\Request;
use PDF;

class stokproduksicon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_stokproduksi = StokProduksiModel::
            where('id_stok_produksi','LIKE','%'. request('search').'%')
            ->orwhere('id_data_produksi','LIKE','%'. request('search').'%')
            ->orwhere('stok_masuk','LIKE','%'. request('search').'%')
            ->orwhere('stok_keluar','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_stokproduksi = StokProduksiModel::paginate(6);
        }
        return view('stokproduksi.view_stokproduksi', compact('tb_stokproduksi'));
    }

    public function create(){
        $tb_dataproduksi = DataProduksiModel::all();
        return view('stokproduksi.create_stokproduksi', compact('tb_dataproduksi'));
    }

    public function insert(Request $request)
    {
        StokProduksiModel::create($request->all());
        return redirect()->route('view_stokproduksi_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_stok_produksi){
        $tb_stokproduksi =  StokProduksiModel::find($id_stok_produksi);
        $tb_dataproduksi = DataProduksiModel::all();
        return view('stokproduksi.edit_stokproduksi', compact('tb_stokproduksi', 'tb_dataproduksi'));
    }

    public function update(Request $request, string $id_stok_produksi)
    {
        $tb_stokproduksi = StokProduksiModel::find($id_stok_produksi);
        $tb_stokproduksi->update($request->all());
        return redirect()->route('view_stokproduksi_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_stok_produksi){
        $tb_stokproduksi =  StokProduksiModel::find($id_stok_produksi);
        //dd($data_stokproduksi);
        $tb_stokproduksi->delete();
        return redirect()->route('view_stokproduksi_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_stokproduksi = StokProduksiModel::all();
        view()->share('view_stokproduksi_index', $tb_stokproduksi);
        //dd($data_stokproduksi);
        $pdf = PDF::loadview('stokproduksi.cetak_stokproduksi', compact('tb_stokproduksi'));
        return $pdf->stream('Data Stok Produksi.pdf');
    }
}
