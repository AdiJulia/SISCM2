<?php

namespace App\Http\Controllers;

use App\Models\DataPegawaiModel;
use App\Models\KetenagakerjaanModel; 
use Illuminate\Http\Request;
use PDF;

class tenagakerjacon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_tenagakerja = KetenagakerjaanModel::
            where('id_tenaga_kerja','LIKE','%'. request('search').'%')
            ->orwhere('id_pegawai','LIKE','%'. request('search').'%')
            ->orwhere('jabatan','LIKE','%'. request('search').'%')
            ->orwhere('divisi','LIKE','%'. request('search').'%')
            ->orwhere('status_pekerjaan','LIKE','%'. request('search').'%')
            ->orwhere('upah_tenaga_kerja','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_tenagakerja = KetenagakerjaanModel::paginate(6);
        }
        return view('ketenagakerjaan.view_ketenagakerjaan', compact('tb_tenagakerja'));
    }

    public function create(){
        $data_pegawai = DataPegawaiModel::all();
        return view('ketenagakerjaan.create_ketenagakerjaan', compact('data_pegawai'));
    }

    public function insert(Request $request)
    {
        KetenagakerjaanModel::create($request->all());
        return redirect()->route('view_ketenagakerjaan_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_tenaga_kerja){
        $tb_tenagakerja =  KetenagakerjaanModel::find($id_tenaga_kerja);
        $data_pegawai = DataPegawaiModel::all();
        return view('ketenagakerjaan.edit_ketenagakerjaan', compact('tb_tenagakerja', 'data_pegawai'));
    }

    public function update(Request $request, string $id_tenaga_kerja)
    {
        $tb_tenagakerja = KetenagakerjaanModel::find($id_tenaga_kerja);
        $tb_tenagakerja->update($request->all());
        return redirect()->route('view_ketenagakerjaan_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_tenaga_kerja){
        $tb_tenagakerja =  KetenagakerjaanModel::find($id_tenaga_kerja);
        //dd($data_pegawai);
        $tb_tenagakerja->delete();
        return redirect()->route('view_ketenagakerjaan_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_tenagakerja = KetenagakerjaanModel::all();
        view()->share('view_ketenagakerjaan', $tb_tenagakerja);
        // dd($data_pegawai);
        $pdf = PDF::loadview('ketenagakerjaan.cetak_ketenagakerjaan', compact('tb_tenagakerja'));
        return $pdf->stream('Data Ketenagakerjaan.pdf');
    }
}

