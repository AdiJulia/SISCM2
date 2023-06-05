<?php

namespace App\Http\Controllers;

use App\Models\DataOutletModel;
use App\Models\DataBarangModel;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use PDF;

class dataoutletcon extends Controller
{
    public function index(){
        if(request('search')){
            $tb_dataoutlet = DataOutletModel::
            where('id_outlet','LIKE','%'. request('search').'%')
            ->orwhere('id_data_barang','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_stok','LIKE','%'. request('search').'%')
            ->orwhere('jumlah_restok','LIKE','%'. request('search').'%')
            ->orwhere('tanggal_masuk','LIKE','%'. request('search').'%')
            ->orwhere('lokasi_outlet','LIKE','%'. request('search').'%')
            ->paginate(6);
        }
        else {
            $tb_dataoutlet = DataOutletModel::paginate(6);
        }
        return view('outlet.view_outlet', compact('tb_dataoutlet'));
    }

    public function create(){
        $tb_databarang = DataBarangModel::all();
        return view('outlet.create_outlet', compact('tb_databarang'));
    }

    public function insert(Request $request)
    {
        DataOutletModel::create($request->all());
        return redirect()->route('view_outlet_index')->with('input', 'Data Berhasil Ditambah');
    }

    public function edit(string $id_outlet){
        $tb_dataoutlet =  DataOutletModel::find($id_outlet);
        $tb_databarang = DataBarangModel::all();
        return view('outlet.edit_outlet', compact('tb_dataoutlet', 'tb_databarang'));
    }

    public function update(Request $request, string $id_outlet)
    {
        $tb_dataoutlet = DataOutletModel::find($id_outlet);
        $tb_dataoutlet->update($request->all());
        return redirect()->route('view_outlet_index')->with('edit','Data Berhasil Diubah');
    }

    public function delete(string $id_outlet){
        $tb_dataoutlet =  DataOutletModel::find($id_outlet);
        //dd($data_pegawai);
        $tb_dataoutlet->delete();
        return redirect()->route('view_outlet_index')->with('delete','Data Berhasil Dihapus');
    }

    public function cetak(){
        $tb_dataoutlet = DataOutletModel::all();
        view()->share('view_outlet_index', $tb_dataoutlet);
        //dd($data_pegawai);
        $pdf = PDF::loadview('outlet.cetak_outlet', compact('tb_dataoutlet'));
        return $pdf->stream('Data Outlet.pdf');
    }
}
