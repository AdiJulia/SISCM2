@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Pegawai</h4>
                        {{-- <p class="card-description">
                        Basic form elements
                    </p> --}}
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
                                <textarea class="form-control" name="alamat" id="alamat" rows="4">{{$data_pegawai->alamat}}</textarea>
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
