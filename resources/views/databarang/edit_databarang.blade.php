@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Data Barang</h4>
                        <form class="forms-sample" action="/update_databarang/{{$tb_databarang->id_data_barang}}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_data_barang">ID Data Barang</label>
                                <input name="id_data_barang" type="text" class="form-control" id="id_data_barang"
                                    value="{{$tb_databarang->id_data_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="id_kategori">ID Kategori</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_kategori" id="id_kategori">
                                        <option selected disabled>{{$tb_databarang->id_kategori}}</option>
                                        @foreach ($tb_kategoribarang as $p)
                                            <option value="{{ $p->id_kategori }}">{{ $p->id_kategori }} - {{ $p->jenis_barang }} - {{$p->jenis_material}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang">Nama Barang</label>
                                <input name="nama_barang" type="nama_barang" class="form-control" id="nama_barang"
                                    value="{{$tb_databarang->nama_barang}}">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga Barang</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                        id="harga" name="harga" type="harga" value="{{$tb_databarang->harga}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_databarang">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
