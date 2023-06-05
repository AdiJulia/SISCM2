@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Kategori Barang</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Tenaga Kerja</th>
                                        <th scope="col">ID Pegawai</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Divisi</th>
                                        <th scope="col">Status Pekerjaan</th>
                                        <th scope="col">Upah Tenaga Kerja</th>
                                        <th scope="col">
                                            Opsi
                                        </th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @php
                                        $no = 0;
                                    @endphp
                                    @foreach ($tb_tenagakerja as $data)
                                    <tr>
                                        <td>{{++$no}}</td>
                                        <td>
                                            {{$data->id_tenaga_kerja}}
                                        </td>
                                        <td>
                                            {{$data->id_pegawai}}
                                        </td>
                                        <td>
                                            {{$data->jabatan}}
                                        </td>
                                        <td>
                                            {{$data->divisi}}
                                        </td>
                                        <td>
                                            {{$data->status_pekerjaan}}
                                        </td>
                                        <td>
                                            {{$data->upah_tenaga_kerja}}
                                        </td>
                                        <td>
                                            <a href="/edit_ketenagakerjaan/{{$data->id_tenaga_kerja}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_ketenagakerjaan/{{$data->id_tenaga_kerja}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_ketenagakerjaan" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_ketenagakerjaan" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection