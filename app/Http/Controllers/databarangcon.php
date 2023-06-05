<?php

namespace App\Http\Controllers;

use App\Models\DataBarangModel;
use App\Models\DataPegawaiModel;
use App\Models\KategoriBarangModel;
use Illuminate\Http\Request;
use PDF;

class databarangcon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_databarang = DataBarangModel::
            where('id_data_barang','LIKE','%'. request('search').'%')
            ->orwhere('id_kategori','LIKE','%'. request('search').'%')
            ->orwhere('nama_barang','LIKE','%'. request('search').'%')
            ->orwhere('harga','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_databarang = DataBarangModel::paginate(6);
        }
        return view('databarang.view_databarang', compact('tb_databarang'));
    }

    public function create(){
        $tb_kategoribarang = KategoriBarangModel::all();
        return view('databarang.create_databarang', compact('tb_kategoribarang'));
    }

    public function insert(Request $request)
    {
        DataBarangModel::create($request->all());
        return redirect()->route('view_databarang_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_data_barang){
        $tb_databarang =  DataBarangModel::find($id_data_barang);
        $tb_kategoribarang = KategoriBarangModel::all();
        return view('databarang.edit_databarang', compact('tb_databarang', 'tb_kategoribarang'));
    }

    public function update(Request $request, string $id_data_barang)
    {
        $tb_databarang = DataBarangModel::find($id_data_barang);
        $tb_databarang->update($request->all());
        return redirect()->route('view_databarang_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_data_barang){
        $tb_databarang =  DataBarangModel::find($id_data_barang);
        //dd($data_pegawai);
        $tb_databarang->delete();
        return redirect()->route('view_databarang_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_databarang = DataBarangModel::all();
        view()->share('view_databarang_index', $tb_databarang);
        //dd($data_pegawai);
        $pdf = PDF::loadview('databarang.cetak_databarang', compact('tb_databarang'));
        return $pdf->stream('Data Pegawai.pdf');
    }
}
