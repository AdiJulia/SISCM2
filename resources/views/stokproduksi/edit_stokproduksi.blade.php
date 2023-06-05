@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Stok Produksi</h4>
                        <form class="forms-sample" action="/update_stokproduksi/{{$tb_stokproduksi->id_stok_produksi}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_stok_produksi">ID Stok Produksi</label>
                                <input name="id_stok_produksi" type="text" class="form-control" id="id_stok_produksi"
                                    value="{{$tb_stokproduksi->id_stok_produksi}}">
                            </div>
                            <div class="form-group">
                                <label for="id_data_produksi">ID Data Produksi</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_data_produksi" id="id_data_produksi">
                                        <option selected disabled>{{$tb_stokproduksi->id_data_produksi}}</option>
                                        @foreach ($tb_dataproduksi as $p)
                                            <option value="{{ $p->id_data_produksi }}">{{ $p->id_data_produksi }} - {{ $p->keterangan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="stok_masuk">Stok Masuk</label>
                                <input name="stok_masuk" type="stok_masuk" class="form-control" id="stok_masuk"
                                    value="{{$tb_stokproduksi->stok_masuk}}">
                            </div>
                            <div class="form-group">
                                <label for="stok_jumlah">Stok Jumlah</label>
                                <input name="stok_jumlah" type="stok_jumlah" class="form-control" id="stok_jumlah"
                                    value="{{$tb_stokproduksi->stok_jumlah}}">
                            </div>
                            <div class="form-group">
                                <label for="stok_keluar">Stok Keluar</label>
                                <input name="stok_keluar" type="stok_keluar" class="form-control" id="stok_keluar"
                                    value="{{$tb_stokproduksi->stok_keluar}}">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_stokproduksi">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
