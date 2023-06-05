@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Outlet</h3>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Outlet</th>
                                        <th scope="col">ID Data Barang</th>
                                        <th scope="col">Jumlah Stok</th>
                                        <th scope="col">Jumlah Restok</th>
                                        <th scope="col">Tanggal Masuk</th>
                                        <th scope="col">Lokasi Outlet</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_dataoutlet as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_outlet}}
                                        </td>
                                        <td>
                                            {{$data->id_data_barang}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_stok}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_restok}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_masuk}}
                                        </td>
                                        <td>
                                            {{$data->lokasi_outlet}}
                                        </td>
                                        <td>
                                            <a href="/edit_outlet/{{$data->id_outlet}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_outlet/{{$data->id_outlet}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_outlet" role="button">Tambah Data Outlet</a>
                        <a class="btn btn-primary" href="/cetak_outlet" role="button">Cetak Data Outlet</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

	