@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Stok Gudang</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Data Gudang</th>
                                        <th scope="col">ID Stok Produksi</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Jumlah Masuk</th>
                                        <th scope="col">Jumlah Keluar</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Tanggal Keluar</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_datagudang as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_data_gudang}}
                                        </td>
                                        <td>
                                            {{$data->id_stok_produksi}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_stok}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_masuk}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_keluar}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_masuk}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_keluar}}
                                        </td>
                                        <td>
                                            <a href="/edit_gudang/{{$data->id_data_gudang}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_gudang/{{$data->id_data_gudang}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_gudang" role="button">Tambah Data</a>

                        <a class="btn btn-primary" href="/cetak_gudang" role="button">Cetak Data Gudang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection