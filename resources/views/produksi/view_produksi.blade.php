@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Produksi</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Data Produksi</th>
                                        <th scope="col">ID Bahan Baku</th>
                                        <th scope="col">ID Pegawai</th>
                                        <th scope="col">Jumlah Produksi</th>
                                        <th scope="col">Tanggal Produksi</th>
                                        <th scope="col">Keterangan</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_dataproduksi as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_data_produksi}}
                                        </td>
                                        <td>
                                            {{$data->id_bahan_baku}}
                                        </td>
                                        <td>
                                            {{$data->id_pegawai}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_produksi}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_produksi}}
                                        </td>
                                        <td>
                                            {{$data->keterangan}}
                                        </td>
                                        <td>
                                            <a href="/edit_produksi/{{$data->id_data_produksi}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_produksi/{{$data->id_data_produksi}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_produksi" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_produksi" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

	
