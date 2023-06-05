<?php

namespace App\Http\Controllers;

use App\Models\DataGudangModel;
use App\Models\StokProduksiModel;
use Illuminate\Http\Request;
use PDF;

class datagudangcon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_datagudang = DataGudangModel::
            where('id_data_gudang','LIKE','%'. request('search').'%')
            ->orwhere('id_stok_produksi','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_stok','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_masuk','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_keluar','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_masuk','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_keluar','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else{
            $tb_datagudang = DataGudangModel::paginate(6);
        }
        return view('gudang.view_gudang', compact('tb_datagudang'));
    }

    public function create(){
        $tb_stokproduksi = StokProduksiModel::all();
        return view('gudang.create_gudang', compact('tb_stokproduksi'));
    }

    public function insert(Request $request)
    {
        DataGudangModel::create($request->all());
        return redirect()->route('view_gudang_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_data_gudang){
        $tb_datagudang =  DataGudangModel::find($id_data_gudang);
        $tb_stokproduksi = StokProduksiModel::all();
        return view('gudang.edit_gudang', compact('tb_datagudang', 'tb_stokproduksi'));
    }

    public function update(Request $request, string $id_data_gudang)
    {
        $tb_datagudang = DataGudangModel::find($id_data_gudang);
        $tb_datagudang->update($request->all());
        return redirect()->route('view_gudang_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_data_gudang){
        $tb_datagudang =  DataGudangModel::find($id_data_gudang);
        //dd($data_pegawai);
        $tb_datagudang->delete();
        return redirect()->route('view_gudang_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_datagudang = DataGudangModel::all();
        view()->share('view_gudang_index', $tb_datagudang);
        //dd($data_pegawai);
        $pdf = PDF::loadview('gudang.cetak_gudang', compact('tb_datagudang'));
        return $pdf->stream('Data Gudang.pdf');
    }
}
