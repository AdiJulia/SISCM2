@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Kepegawaian</h3>
                        {{-- <p class="card-description">
            Add class <code>.table-{color}</code>
          </p> --}}
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">ID Pegawai</th>
                                        <th scope="col">Nama Pegawai</th>
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
                                    @foreach ($data_pegawai as $data)
                                    <tr>    
                                        <td>{{++$no}}</td>
                                        <td>{{$data->id_pegawai}}</td>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->nomor_hp}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->jenis_kelamin}}</td>
                                        <td>{{$data->tanggal_lahir}}</td>
                                        <td>
                                            <a href="/edit_pegawai/{{$data->id_pegawai}}" class="btn btn-primary">Update</a>
                                            <a href="/delete_pegawai/{{$data->id_pegawai}}" class="btn btn-primary">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <a class="btn btn-primary" href="/create_pegawai" role="button">Tambah Data</a>
                        <a class="btn btn-primary" href="/cetak_pegawai" role="button">Cetak Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- create --}}
{{-- 

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

--}}


{{-- edit --}}
{{-- 
    @extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Pegawai</h4>
                    <form class="forms-sample" action="/update_pegawai/{{$data_pegawai->id_pegawai}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pegawai</label>
                            <input type="text" name="id_pegawai" class="form-control" id="id_pegawai" value="{{$data_pegawai->id_pegawai}}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" class="form-control" id="nama" value="{{$data_pegawai->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="nomor_hp">Nomor HP</label>
                            <input type="nomor_hp" name="nomor_hp" class="form-control" id="nomor_hp" value="{{$data_pegawai->nomor_hp}}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="4" value="{{$data_pegawai->alamat}}"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="email" value="{{$data_pegawai->email}}">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" value="{{$data_pegawai->jenis_kelamin}}">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{$data_pegawai->tanggal_lahir}}">
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a class="btn btn-light" href="/view_pegawai">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

    --}}