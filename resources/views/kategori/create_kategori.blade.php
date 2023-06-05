@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Kategori</h4>
                        <form class="forms-sample" action="/insert_kategori" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_kategori">ID Kategori Barang</label>
                                <input name="id_kategori" type="text" class="form-control" id="id_kategori"
                                    placeholder="ex - KT01">
                            </div>
                            <div class="form-group">
                                <label for="id_data_gudang">ID Data Gudang</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_data_gudang" id="id_data_gudang">
                                        @foreach ($tb_datagudang as $p)
                                            <option value="{{ $p->id_data_gudang }}">{{ $p->id_data_gudang }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_barang">Jenis Barang</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="form-control" name="jenis_barang" id="jenis_barang">
                                            <option selected disabled>~~ Jenis Barang ~~</option>
                                            <option name="jenis_barang">Furnitur Ruang Tamu</option>
                                            <option name="jenis_barang">Furnitur Ruang Makan</option>
                                            <option name="jenis_barang">Furnitur Ruang Keluarga</option>
                                            <option name="jenis_barang">Furnitur Ruang Kamar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_material">Jenis Material</label>
                                <div class="form-group">
                                    <div class="form-group">
                                        <select class="form-control" name="jenis_material" id="jenis_material">
                                            <option selected disabled>~~ Jenis Material ~~</option>
                                            <option name="jenis_material">Kayu</option>
                                            <option name="jenis_material">Besi</option>
                                            <option name="jenis_material">Aluminium</option>
                                            <option name="jenis_material">Plastik</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_kategori">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
