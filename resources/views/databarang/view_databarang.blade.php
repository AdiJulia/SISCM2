@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Data Barang</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Data Barang</th>
                                        <th scope="col">ID Kategori</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Harga Barang</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_databarang as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_data_barang}}
                                        </td>
                                        <td>
                                            {{$data->id_kategori}}
                                        </td>
                                        <td>
                                            {{$data->nama_barang}}
                                        </td>
                                        <td>
                                            {{$data->harga}}
                                        </td>
                                        <td>
                                            <a href="/edit_databarang/{{$data->id_data_barang}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_databarang/{{$data->id_data_barang}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_databarang" role="button">Tambah Data Barang</a>
                        <a class="btn btn-primary" href="/cetak_databarang" role="button">Cetak Data Barang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection