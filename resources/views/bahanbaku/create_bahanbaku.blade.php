@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah Bahan Baku</h4>
                        {{-- <p class="card-description">
                        Basic form elements
                    </p> --}}
                        <form class="forms-sample" action="insert_bahanbaku" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="id_bahan_baku">ID Bahan Baku</label>
                                <input type="text" name="id_bahan_baku" class="form-control" id="id_bahan_baku" placeholder="ID Bahan Baku">
                            </div>
                            <div class="form-group">
                                <label for="id_pemasok">ID Pemasok</label>
                                <div class="form-group">
                                    <select class="form-control" name="id_pemasok" id="id_pemasok">
                                        <option selected disabled>ID Pemasok</option>
                                        @foreach ($tb_pemasok as $p)
                                            <option value="{{ $p->id_pemasok }}">{{ $p->id_pemasok }} - {{ $p->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jenis_bahan">Jenis Bahan</label>
                                <div class="form-group">
                                    <select class="form-control" name="jenis_bahan" id="jenis_bahan">
                                        <option selected disabled>~~ Jenis Bahan ~~</option>
                                        <option name="jenis_bahan">Kayu</option>
                                        <option name="jenis_bahan">Besi</option>
                                        <option name="jenis_bahan">Aluminium</option>
                                        <option name="jenis_bahan">Plastik</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_bahan">Jumlah Bahan Baku</label>
                                <input type="jumlah_bahan" class="form-control" name="jumlah_bahan" id="jumlah_bahan"
                                    placeholder="Jumlah Bahan Baku">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_masuk">Tanggal Masuk Bahan</label>
                                <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk">
                            </div>
                            <div class="form-group">
                                <label for="harga_bahan">Harga Bahan Baku</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">Rp</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)"
                                        id="harga_bahan" name="harga_bahan" type="harga_bahan" placeholder=" - ">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a class="btn btn-light" href="/view_bahanbaku">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
