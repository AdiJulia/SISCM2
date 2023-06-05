@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Pemasok</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Pemasok</th>
                                        <th scope="col">Nama Pemasok</th>
                                        <th scope="col">Nomor HP</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Tanggal Lahir</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_pemasok as $data)
                                    <tr>    
                                        <td>{{++$no}}</td>
                                        <td>{{$data->id_pemasok}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nomor_hp}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->tanggal_lahir}}</td>
                                        <td>
                                            <a href="/edit_pemasok/{{$data->id_pemasok}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_pemasok/{{$data->id_pemasok}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_pemasok" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_pemasok" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
