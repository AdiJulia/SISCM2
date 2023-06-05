<?php

namespace App\Http\Controllers;

use App\Models\DataPemasokModel;
use Illuminate\Http\Request;
use PDF;

class pemasokcon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_pemasok = DataPemasokModel::
            where('id_pemasok','LIKE','%'. request('search').'%')
            ->orwhere('nama','LIKE','%'. request('search').'%')
            ->orwhere('nomor_hp','LIKE','%'. request('search').'%')
            ->orwhere('alamat','LIKE','%'. request('search').'%')
            ->orwhere('email','LIKE','%'. request('search').'%')
            ->orwhere('jenis_kelamin','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_lahir','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_pemasok = DataPemasokModel::paginate(6);
        }
        return view('pemasok.view_pemasok', compact('tb_pemasok'));
    }

    public function create(){
        return view('pemasok.create_pemasok');
    }

    public function insert(Request $request)
    {
        DataPemasokModel::create($request->all());
        return redirect()->route('view_pemasok_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_pemasok){
        $tb_pemasok = DataPemasokModel::find($id_pemasok);
        return view('pemasok.edit_pemasok', compact('tb_pemasok'));
    }

    public function update(Request $request, string $id_pemasok)
    {
        $tb_pemasok = DataPemasokModel::find($id_pemasok);
        $tb_pemasok->update($request->all());
        return redirect()->route('view_pemasok_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_pemasok){
        $tb_pemasok =  DataPemasokModel::find($id_pemasok);
        //dd($data_pegawai);
        $tb_pemasok->delete();
        return redirect()->route('view_pemasok_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_pemasok = DataPemasokModel::all();
        view()->share('view_pemasok_index', $tb_pemasok);
        //dd($data_pegawai);
        $pdf = PDF::loadview('pemasok.cetak_pemasok', compact('tb_pemasok'));
        return $pdf->stream('Data Pemasok.pdf');
    }
}
