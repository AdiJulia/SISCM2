<?php

namespace App\Http\Controllers;

use App\Models\BiayaProduksiModel;
use App\Models\DataPegawaiModel;
use App\Models\BahanBakuModel;
use App\Models\DataBarangModel;
use App\Models\DataGudangModel;
use App\Models\DataOutletModel;
use App\Models\DataPemasokModel;
use App\Models\DataProduksiModel;
use App\Models\KategoriBarangModel;
use App\Models\KetenagakerjaanModel;
use App\Models\StokProduksiModel;
use Illuminate\Http\Request;
use PDF;
use Psy\Command\WhereamiCommand;

class controllerindex extends Controller
{
    public function index(){
        $data_pegawai = DataPegawaiModel::all();
        $tb_dataproduksi = DataProduksiModel::all();
        $tb_kategoribarang = KategoriBarangModel::all();
        $tb_dataoutlet = DataOutletModel::all();
        return view('index', compact('data_pegawai','tb_dataproduksi', 'tb_kategoribarang', 'tb_dataoutlet'));
    }
    public function read(){
        $tb_dataproduksi = DataProduksiModel::all();
        $tb_kategoribarang = KategoriBarangModel::all();
        $tb_dataoutlet = DataOutletModel::all();
        return view('index', compact('tb_dataproduksi', 'tb_kategoribarang', 'tb_dataoutlet'));
    }

    // public function index(){
    //     if(request('search')){
    //         $data_pegawai = DataPegawaiModel::
    //         $tb_dataproduksi = DataProduksiModel::
    //         where('id_biaya_produksi','LIKE','%'. request('search').'%')
    //         ->orwhere('id_data_produksi','LIKE','%'. request('search').'%')
    //         ->orwhere('biaya_produksi','LIKE','%'. request('search').'%')
    //         ->paginate(6);
    //     }
    //     else {
    //         $tb_biayaproduksi = BiayaProduksiModel::paginate(6);
    //     }
    //     return view('kepegawaian.view_pegawai', compact('tb_biayaproduksi'));
    // }

    public function cetak(){
        $tb_biayaproduksi = BiayaProduksiModel::all();
        view()->share('view_pegawai_index', $tb_biayaproduksi);
        //dd($data_pegawai);
        $pdf = PDF::loadview('kepegawaian.cetak_pegawai', compact('tb_biayaproduksi'));
        return $pdf->stream('Data Biaya.pdf');
    }
}
