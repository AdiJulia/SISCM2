@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Ketenagakerjaan</h4>
                        <form class="forms-sample" action="/update_ketenagakerjaan/{{ $tb_tenagakerja->id_tenaga_kerja }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_tenaga_kerja">ID Tenaga Kerja</label>
                                <input name="id_tenaga_kerja" type="text" class="form-control" id="id_tenaga_kerja"
                                value="{{ $tb_tenagakerja->id_tenaga_kerja }}">
                            </div>
                            <div class="form-group">
                                <label for="id_pegawai">ID Pegawai</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_pegawai" id="id_pegawai">
                                        <option selected disabled>{{$tb_tenagakerja->id_pegawai}}</option>
                                        @foreach ($data_pegawai as $p)
                                            <option value="{{ $p->id_pegawai }}">{{ $p->id_pegawai }} - {{ $p->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jabatan">Jabatan</label>
                                <input type="jabatan" name="jabatan" class="form-control" id="jabatan"
                                    value="{{ $tb_tenagakerja->jabatan }}">
                            </div>
                            <div class="form-group">
                                <label for="divisi">Divisi</label>
                                <div class="form-group">
                                    <select class="form-control" name="divisi" id="divisi">
                                        <option selected disabled>{{$tb_tenagakerja->divisi}}</option>
                                        <option name="divisi">Produksi</option>
                                        <option name="divisi">Quality Control</option>
                                        <option name="divisi">Pergudangan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="status_pekerjaan">Status Pekerjaan</label>
                                <div class="form-group">
                                    <select class="form-control" name="status_pekerjaan" id="status_pekerjaan">
                                        <option selected disabled>{{$tb_tenagakerja->status_pekerjaan}}</option>
                                        <option name="status_pekerjaan">Tetap</option>
                                        <option name="status_pekerjaan">Kontrak</option>
                                        <option name="status_pekerjaan">Training</option>
                                        <option name="status_pekerjaan">Magang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="upah_tenaga_kerja">Upah Tenaga Kerja</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                        id="upah_tenaga_kerja" name="upah_tenaga_kerja" type="upah_tenaga_kerja" value="{{ $tb_tenagakerja->upah_tenaga_kerja }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_ketenagakerjaan">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
