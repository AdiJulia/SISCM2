@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Outlet</h4>
                        {{-- <p class="card-description">
                        Basic form elements
                    </p> --}}
                        <form class="forms-sample" action="/update_outlet/{{$tb_dataoutlet->id_outlet}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_outlet">ID Outlet</label>
                                <input type="text" class="form-control" id="id_outlet" name="id_outlet" value="{{$tb_dataoutlet->id_outlet}}">
                            </div>
                            <div class="form-group">
                                <label for="id_data_barang">ID Data Barang</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_data_barang" id="id_data_barang">
                                        @foreach ($tb_databarang as $p)
                                            <option value="{{ $p->id_data_barang }}">{{ $p->id_data_barang }} - {{ $p->nama_barang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_stok">Jumlah Stok Barang</label>
                                <input type="jumlah_stok" class="form-control" name="jumlah_stok" id="jumlah_stok" value="{{$tb_dataoutlet->jumlah_stok}}">
                            </div>
                            <div class="form-group">
                                <label for="jumlah_restok">Jumlah Restok</label>
                                <input type="jumlah_restok" class="form-control" name="jumlah_restok"    id="jumlah_restok" value="{{$tb_dataoutlet->jumlah_restok}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk Stok</label>
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{$tb_dataoutlet->tanggal_masuk}}">
                            </div>
                            <div class="form-group">
                                <label for="lokasi_outlet">Lokasi Outlet</label>
                                <div class="form-group">
                                <select class="form-control" name="lokasi_outlet" id="lokasi_outlet">
                                    <option selected disabled>{{$tb_dataoutlet->lokasi_outlet}}</option>
                                    <option name="lokasi_outlet">Malang ~ Dinoyo</option>
                                    <option name="lokasi_outlet">Pasuruan ~ Purwodadi</option>
                                    <option name="lokasi_outlet">Surabaya ~ Krian</option>
                                </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_outlet">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
