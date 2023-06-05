@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Hasil Produksi</h4>
                        <form class="forms-sample" action="/update_produksi/{{$tb_dataproduksi->id_data_produksi}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_data_produksi">ID Data Produksi</label>
                                <input type="text" class="form-control" id="id_data_produksi" value="{{$tb_dataproduksi->id_data_produksi}}" name="id_data_produksi">
                            </div>
                            <div class="form-group">
                                <label for="id_bahan_baku">ID Bahan Baku</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_bahan_baku" id="id_bahan_baku">
                                        <option selected disabled>{{$tb_dataproduksi->id_bahan_baku}}</option>
                                        @foreach ($tb_bahanbaku as $p)
                                            <option value="{{ $p->id_bahan_baku }}">{{ $p->id_bahan_baku }} - {{ $p->jenis_bahan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="id_pegawai">ID Pegawai</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_pegawai" id="id_pegawai">
                                        <option selected disabled>{{$tb_dataproduksi->id_pegawai}}</option>
                                        @foreach ($data_pegawai as $p)
                                            <option value="{{ $p->id_pegawai }}">{{ $p->id_pegawai }} - {{ $p->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_produksi">Jumlah Produksi</label>
                                <input type="jumlah_produksi" class="form-control" id="jumlah_produksi" name="jumlah_produksi" value="{{$tb_dataproduksi->jumlah_produksi}}">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_produksi">Tanggal Produksi</label>
                                <input type="date" class="form-control" id="tanggal_produksi" name="tanggal_produksi" value="{{$tb_dataproduksi->tanggal_produksi}}">
                            </div>
                            <div class="form-group">
                                <label for="keterangan">Keterangan Produksi</label>
                                <textarea class="form-control" id="keterangan" name="keterangan" rows="4">{{$tb_dataproduksi->keterangan}}</textarea>
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
