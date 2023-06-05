<?php

namespace App\Http\Controllers;

use App\Models\DataPegawaiModel;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class datapegawaicon extends Controller
{
    public function index(){
        if(request('search')){
            $data_pegawai = DataPegawaiModel::
            where('id_pegawai','LIKE','%'. request('search').'%')
            ->orwhere('nama','LIKE','%'. request('search').'%')
            ->orwhere('nomor_hp','LIKE','%'. request('search').'%')
            ->orwhere('alamat','LIKE','%'. request('search').'%')
            ->orwhere('email','LIKE','%'. request('search').'%')
            ->orwhere('jenis_kelamin','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_lahir','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $data_pegawai = DataPegawaiModel::paginate(6);
        }
        return view('kepegawaian.view_pegawai', compact('data_pegawai'));
    }

    public function create(){
        return view('kepegawaian.create_pegawai');
    }

    public function insert(Request $request)
    {
        DataPegawaiModel::create($request->all());
        return redirect()->route('view_pegawai_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_pegawai){
        $data_pegawai =  DataPegawaiModel::find($id_pegawai);
        return view('kepegawaian.edit_pegawai', compact('data_pegawai'));
    }

    public function update(Request $request, string $id_pegawai)
    {
        $data_pegawai = DataPegawaiModel::find($id_pegawai);
        $data_pegawai->update($request->all());
        return redirect()->route('view_pegawai_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_pegawai){
        $data_pegawai =  DataPegawaiModel::find($id_pegawai);
        // dd($data_pegawai);   
        $data_pegawai->delete();
        return redirect()->route('view_pegawai_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $data_pegawai = DataPegawaiModel::all();
        view()->share('view_pegawai_index', $data_pegawai);
        //dd($data_pegawai);
        $pdf = PDF::loadview('kepegawaian.cetak_pegawai', compact('data_pegawai'));
        return $pdf->stream('Data Pegawai.pdf');
    }
}
