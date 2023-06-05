@extends('interface.layouts.main')
@section('main-panel-yield')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Selamat Datang Di Dashboard</h2>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        {{-- <button type="button"
                        class="btn btn-light bg-white btn-icon mr-3 d-none d-md-block ">
                        <i class="mdi mdi-download text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-clock-outline text-muted"></i>
                    </button>
                    <button type="button" class="btn btn-light bg-white btn-icon mr-3 mt-2 mt-xl-0">
                        <i class="mdi mdi-plus text-muted"></i>
                    </button> --}}
                        {{-- <a href="/cetak_index"><button class="btn btn-primary mt-2 mt-xl-0">Download report</button></a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body dashboard-tabs p-0">
                        <p>
                            <br>
                        </p>
                        <ul class="nav nav-tabs px-8" role="tablist">
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="overview-tab" aria-controls="overview" aria-selected="true">Overview</a>
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li> --}}
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="sales-tab" data-toggle="tab" href="#sales" role="tab"
                                    aria-controls="sales" aria-selected="false">Sales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="purchases-tab" data-toggle="tab" href="#purchases" role="tab"
                                    aria-controls="purchases" aria-selected="false">Purchases</a>
                            </li> --}}
                        </ul>
                        <div class="tab-content py-0 px-0">
                            {{-- <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">

                                isi overview
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Produksi</small>
                                            <h5 class="mr-2 mb-0">545 Barang</h5>
                                            @foreach ($tb_dataproduksi as $p)
                                            <option value="{{ $p->id_pegawai }}">{{ $p->id_pegawai }} - {{ $p->nama }}
                                            </option>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Total Karyawan</small>
                                            <h5 class="mr-2 mb-0">78 Karyawan</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Jumlah Outlet</small>
                                            <h5 class="mr-2 mb-0">30 Unit</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Jumlah Outlet</small>
                                            <h5 class="mr-2 mb-0">30 Unit</h5>
                                        </div>
                                    </div>
                                </div>

                            </div> --}}
                            {{-- <div class="tab-pane fade" id="sales" role="tabpanel" aria-labelledby="sales-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Start date</small>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                    href="#" role="button" id="dropdownMenuLinkA"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                    <a class="dropdown-item" href="#">12 Aug
                                                        2018</a>
                                                    <a class="dropdown-item" href="#">22 Sep
                                                        2018</a>
                                                    <a class="dropdown-item" href="#">21 Oct
                                                        2018</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Downloads</small>
                                            <h5 class="mr-2 mb-0">2233783</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Total views</small>
                                            <h5 class="mr-2 mb-0">9833550</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Revenue</small>
                                            <h5 class="mr-2 mb-0">$577545</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Flagged</small>
                                            <h5 class="mr-2 mb-0">3497843</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="tab-pane fade" id="purchases" role="tabpanel" aria-labelledby="purchases-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Start date</small>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                    href="#" role="button" id="dropdownMenuLinkA"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                    <a class="dropdown-item" href="#">12 Aug
                                                        2018</a>
                                                    <a class="dropdown-item" href="#">22 Sep
                                                        2018</a>
                                                    <a class="dropdown-item" href="#">21 Oct
                                                        2018</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Revenue</small>
                                            <h5 class="mr-2 mb-0">$577545</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Total views</small>
                                            <h5 class="mr-2 mb-0">9833550</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Downloads</small>
                                            <h5 class="mr-2 mb-0">2233783</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Flagged</small>
                                            <h5 class="mr-2 mb-0">3497843</h5>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Cash deposits</p>
                    <p class="mb-4">To start a blog, think of a topic about and first brainstorm
                        party is ways to write details</p>
                    <div id="cash-deposits-chart-legend" class="d-flex justify-content-center pt-3">
                    </div>
                    <canvas id="cash-deposits-chart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-5 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Total sales</p>
                    <h1>$ 28835</h1>
                    <h4>Gross sales over the years</h4>
                    <p class="text-muted">Today, many people rely on computers to do homework, work,
                        and create or store useful information. Therefore, it is important </p>
                    <div id="total-sales-chart-legend"></div>
                </div>
                <canvas id="total-sales-chart"></canvas>
            </div>
        </div>
    </div> --}}
        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Laporan Keseluruhan</p>
                        <div class="table-responsive">
                            <table id="recent-purchases-listing" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Jumlah Produksi</th>
                                        <th>Jenis Barang</th>
                                        <th>Tanggal Produksi</th>
                                        <th>Outlet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @php
                                        $no = 0;
                                    @endphp

                                    @foreach ($data_pegawai as $item)
                                    <tr>
                                        <td>{{ ++$no }}</td>
                                        <td>{{ $item->nama }}</td>

                                        <td>{{ $item->tb_jumlah_produksi }}</td>
                                        
                                    </tr>
                                    @endforeach
                                <tr> --}}
                                    {{-- <td>{{++$no}}</td>
                                    <!-- Menampilkan data dari tb_dataproduksi -->
                                    @foreach ($tb_dataproduksi as $a)
                                        <td>{{ $a->jumlah_produksi }}</td>
                                    @endforeach

                                    <!-- Menampilkan data dari tb_kategoribarang -->
                                    @foreach ($tb_kategoribarang as $kategoribarang)
                                        <td>{{ $kategoribarang->jenis_barang }}</td>
                                    @endforeach

                                    <!-- Menampilkan data dari tb_dataoutlet -->
                                    @foreach ($tb_dataoutlet as $dataoutlet)
                                        <td>{{ $dataoutlet->lokasi_outlet }}</td>
                                    @endforeach --}}

                                {{-- </tr> --}}
                                    



                                    {{-- @foreach ($data_pegawai as $item)
                                        <tr>
                                            <td>{{ ++$no }}</td>
                                            <td>{{ $item->nama }}</td>
                                        </tr>
                                    @endforeach
                                    @foreach ($tb_dataproduksi as $item)
                                        <tr>
                                            <td>{{ $item->jumlah_produksi }}</td>
                                        </tr>
                                    @endforeach
                                    @foreach ($tb_kategoribarang as $item)
                                        <tr>
                                            <td>{{ $item->jenis_barang }}</td>
                                        </tr>
                                    @endforeach
                                    @foreach ($tb_dataproduksi as $item)
                                        <tr>
                                            <td>{{ $item->tanggal_produksi }}</td>
                                        </tr>
                                    @endforeach
                                    @foreach ($tb_dataproduksi as $item)
                                        <tr>
                                            <td>{{ $item->keterangan }}</td>
                                        </tr>
                                    @endforeach --}}

                                    {{-- <td>
                                        {{$data->jumlah_produksi}}
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
                                    </td> --}}
                                    <tr>
                                        <td>1</td>
                                        <td>Adi</td>
                                        <td>22 Barang</td>
                                        <td>Furnitur Ruang Tamu</td>
                                        <td>06 Jan 2022</td>
                                        <td>Singosari</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Julia</td>
                                        <td>12 Barang</td>
                                        <td>Furnitur Ruang Keluarga</td>
                                        <td>18 Jul 2022</td>
                                        <td>Malang</td>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Yuniar Faizati</td>
                                        <td>19 Barang</td>
                                        <td>Furnitur Ruang Makan</td>
                                        <td>16 Jul 2022</td>
                                        <td>Bali</td>
                                        
                                       
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Saputra</td>
                                        <td>16 Barang</td>
                                        <td>Furnitur Ruang Tamu</td>
                                        <td>30 Apr 2022</td>
                                        <td>Sidoarjo</td>
                                        
                                    </tr>                                                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
