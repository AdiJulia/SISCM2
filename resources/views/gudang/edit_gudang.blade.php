@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Hasil Produksi</h4>
                        <form class="forms-sample" action="/update_gudang/{{$tb_datagudang->id_data_gudang}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_data_gudang">ID Data Gudang</label>
                                <input type="text" class="form-control" id="id_data_gudang" name="id_data_gudang" value="{{$tb_datagudang->id_data_gudang}}">
                            </div>  
                            <div class="form-group">
                                <label for="id_stok_produksi">ID Stok Produksi</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_stok_produksi" id="id_stok_produksi">
                                        <option selected disabled>{{$tb_datagudang->id_stok_produksi}}</option>
                                        @foreach ($tb_stokproduksi as $p)
                                            <option value="{{ $p->id_stok_produksi }}">{{ $p->id_stok_produksi }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_stok">Jumlah Stok</label>
                                <input type="jumlah_stok" class="form-control" id="jumlah_stok" name="jumlah_stok" {{$tb_datagudang->jumlah_stok}}>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_masuk">Jumlah Masuk</label>
                                <div class="form-group">
                                    <select class="form-control" name="jumlah_masuk" id="jumlah_masuk">
                                        <option selected disabled>{{$tb_datagudang->jumlah_masuk}}</option>
                                        @foreach ($tb_stokproduksi as $p)
                                            <option value="{{ $p->stok_keluar }}">{{ $p->id_stok_produksi }} - {{ $p->stok_keluar }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_keluar">Jumlah Keluar</label>
                                <input type="jumlah_keluar" class="form-control" id="jumlah_keluar" name="jumlah_keluar" value="{{$tb_datagudang->jumlah_keluar}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk</label>
                                <input type="date" class="form-control" id="tanggal_masuk" name="tanggal_masuk" value="{{$tb_datagudang->tanggal_masuk}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_keluar">Tanggal Keluar</label>
                                <input type="date" class="form-control" id="tanggal_keluar" name="tanggal_keluar" value="{{$tb_datagudang->tanggal_keluar}}">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_produksi">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
