@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Stok Produksi</h3>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Stok Produksi</th>
                                        <th scope="col">ID Data Produksi</th>
                                        <th scope="col">Stok Masuk</th>
                                        <th scope="col">Stok Jumlah</th>
                                        <th scope="col">Stok Keluar</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_stokproduksi as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_stok_produksi}}
                                        </td>
                                        <td>
                                            {{$data->id_data_produksi}}
                                        </td>
                                        <td>
                                            {{$data->stok_masuk}}
                                        </td>
                                        <td>
                                            {{$data->stok_jumlah}}
                                        </td>
                                        <td>
                                            {{$data->stok_keluar}}
                                        </td>
                                        <td>
                                            <a href="/edit_stokproduksi/{{$data->id_stok_produksi}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_stokproduksi/{{$data->id_stok_produksi}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_stokproduksi" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_stokproduksi" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

	
