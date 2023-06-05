<?php

namespace App\Http\Controllers;

use App\Models\DataPegawai;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataPegawaiController extends Controller
{
    // public function showpegawai(Request $request){
    //     // $data = $request->only(['id_pegawai', 'nama', 'nomor_hp', 'alamat', 'email', 'jenis_kelamin', 'tanggal_lahir']);
    //     // $product = DataPegawai::create($data);
    //     // return response()->json($product, 201);
    // }

    public function index(){
        if(request('search')){
            $data_pegawai = DataPegawai::where('id_pegawai','LIKE','%'.request('search').'%')
            ->orwhere('nama','LIKE','%'.request('search').'%')
            ->orwhere('nomor_hp','LIKE','%'.request('search').'%')
            ->orwhere('alamat','LIKE','%'.request('search').'%')
            ->orwhere('email','LIKE','%'.request('search').'%')
            ->orwhere('jenis_kelamin','LIKE','%'.request('search').'%')
            ->orwhere('tanggal_lahir','LIKE','%'.request('search').'%')
            ->paginate(6);
        } 
        else {
            $data_pegawai = DataPegawai::paginate(6);
        }
        return view('kepegawaian.view_pegawai', compact('data_pegawai'));
    }

    // PEGAWAI
    public function showpegawai(){
        //$data_pegawais = DataPegawai::all();
        //return view('kepegawaian.view_pegawai');
        
        // $data_pegawais = new DataPegawai();
        // $data_pegawais = $data_pegawais->get();
        // // dd($data);
        // return view('kepegawaian.view_pegawai', ['data_pegawais' => $data_pegawais]);
    }

    public function createpegawai(){
        return view('kepegawaian.create_pegawai');
    }

    // KETENAGAKERJAAN
    public function showketenagakerjaan(){
        return view('kepegawaian.view_ketenagakerjaan');
    }
    public function createketenagakerjaan(){
        return view('kepegawaian.create_ketenagakerjaan');
    }    


    // PEMASOK

    public function showpemasok(){
        return view('pemasok.view_pemasok');
    }
    public function createpemasok(){
        return view('pemasok.create_pemasok');
    }


    // BAHAN BAKU
    public function showbahanbaku(){
        return view('bahanbaku.view_bahanbaku');
    }
    public function createbahanbaku(){
        return view('bahanbaku.create_bahanbaku');
    }


    // PRODUKSI
    public function showproduksi(){
        return view('produksi.view_produksi');
    }
    public function createproduksi(){
        return view('produksi.create_produksi');
    }
    public function showstokproduksi(){
        return view('produksi.view_stokproduksi');
    }


    // GUDANG
    public function showgudang(){
        return view('gudang.view_gudang');
    }
    public function creategudang(){
        return view('gudang.create_gudang');
    }
    public function viewdatabarang(){
        return view('gudang.view_databarang');
    }


    // OUTLET
    public function showoutlet(){
        return view('outlet.view_outlet');
    }
    public function createoutlet(){
        return view('#');
    }


    // LAIN LAIN
    public function showdatauser(){
        return view('datauser.view_datauser');
    }


    // LOGIN
    public function logoutuser(){
        return view('login.login');
    }

    public function loginuser(){
        return view('login.login');
    }

    public function registeruser(){
        return view('login.register');
    }


//     public function index()
//     {
//         $list_lagus = new ListLagu();
//         $list_lagus = $list_lagus->get();

//         return view('koordinator.list_lagu.index', ['list_lagus' => $list_lagus]);
//     }

    
}
