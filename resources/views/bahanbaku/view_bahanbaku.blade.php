@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Bahan Baku</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Bahan Baku</th>
                                        <th scope="col">ID Pemasok</th>
                                        <th scope="col">Jenis Bahan Baku</th>
                                        <th scope="col">Jumlah Bahan Baku</th>
                                        <th scope="col">Harga Bahan Baku</th>
                                        <th scope="col">Tanggal Masuk Bahan</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_bahanbaku as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_bahan_baku}}
                                        </td>
                                        <td>
                                            {{$data->id_pemasok}}
                                        </td>
                                        <td>
                                            {{$data->jenis_bahan}}
                                        </td>
                                        <td>
                                            {{$data->jumlah_bahan}}
                                        </td>
                                        <td>
                                            {{$data->harga_bahan}}
                                        </td>
                                        <td>
                                            {{$data->tanggal_masuk}}
                                        </td>
                                        <td>
                                            <a href="/edit_bahanbaku/{{$data->id_bahan_baku}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_bahanbaku/{{$data->id_bahan_baku}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_bahanbaku" role="button">Tambah Data Bahan Baku</a>
                        <a class="btn btn-primary" href="/cetak_bahanbaku" role="button">Cetak Bahan Baku</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection