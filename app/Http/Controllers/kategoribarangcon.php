<?php

namespace App\Http\Controllers;

use App\Models\DataGudangModel;
use App\Models\DataPegawaiModel;
use App\Models\KategoriBarangModel;
use Illuminate\Http\Request;
use PDF;

class kategoribarangcon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_kategoribarang = KategoriBarangModel::
            where('id_kategori','LIKE','%'. request('search').'%')
            ->orwhere('id_data_gudang','LIKE','%'. request('search').'%')
            ->orwhere('jenis_barang','LIKE','%'. request('search').'%')
            ->orwhere('jenis_material','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_kategoribarang = KategoriBarangModel::paginate(6);
        }
        return view('kategori.view_kategori', compact('tb_kategoribarang'));
    }

    public function create(){
        $tb_datagudang = DataGudangModel::all();
        return view('kategori.create_kategori', compact('tb_datagudang'));
    }

    public function insert(Request $request)
    {
        KategoriBarangModel::create($request->all());
        return redirect()->route('view_kategori_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_kategori){
        $tb_kategoribarang =  KategoriBarangModel::find($id_kategori);
        $tb_datagudang = DataGudangModel::all();
        return view('kategori.edit_kategori', compact('tb_kategoribarang', 'tb_datagudang'));
    }

    public function update(Request $request, string $id_kategori)
    {
        $tb_kategoribarang = KategoriBarangModel::find($id_kategori);
        $tb_kategoribarang->update($request->all());
        return redirect()->route('view_kategori_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_kategori){
        $tb_kategoribarang =  KategoriBarangModel::find($id_kategori);
        //dd($data_pegawai);
        $tb_kategoribarang->delete();
        return redirect()->route('view_kategori_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_kategoribarang = KategoriBarangModel::all();
        view()->share('view_kategori_index', $tb_kategoribarang);
        //dd($data_pegawai);
        $pdf = PDF::loadview('kategori.cetak_kategori', compact('tb_kategoribarang'));
        return $pdf->stream('Data Kategori.pdf');
    }
}
