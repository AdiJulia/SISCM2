<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Furniture </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('interface.partial.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="mdi mdi-home menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                            aria-controls="ui-basic">
                            <i class="mdi mdi-account-circle menu-icon"></i>
                            <span class="menu-title">Kepegawaian</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/view_pegawai">Data Pegawai</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="/view_pemasok">Data Pemasok</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/view_ketenagakerjaan">Data
                                        Ketenagakerjaan</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/view_bahanbaku">
                            <i class="mdi mdi-grid-large menu-icon"></i>
                            <span class="menu-title">Bahan Baku</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <i class="mdi mdi-table-column-plus-before menu-icon"></i>
                            <span class="menu-title">Produksi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth" style="">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/view_produksi"> Data Produksi </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="/view_stokproduksi"> Stok Produksi
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view_gudang">
                            <i class="mdi mdi-table-edit menu-icon"></i>
                            <span class="menu-title">Data Gudang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view_kategori">
                            <i class="mdi mdi-dns menu-icon"></i>
                            <span class="menu-title">Kategori Barang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view_databarang">
                            <i class="mdi mdi-collage menu-icon"></i>
                            <span class="menu-title">Data Barang</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/view_outlet">
                            <i class="mdi mdi-houzz-box menu-icon"></i>
                            <span class="menu-title">Data Outlet</span>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                            aria-controls="auth">
                            <i class="mdi mdi-account menu-icon"></i>
                            <span class="menu-title">User Pages</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="auth">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login.html"> Login
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/login-2.html">
                                        Login 2 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register.html">
                                        Register </a></li>
                                <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/register-2.html">
                                        Register 2 </a></li>
                                <li class="nav-item"> <a class="nav-link" href="assets/pages/samples/lock-screen.html">
                                        Lockscreen </a></li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="assets/documentation/documentation.html">
                            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
                            <span class="menu-title">Documentation</span>
                        </a>
                    </li> --}}

                </ul>
            </nav>

            <!-- partial -->
            <div class="main-panel">
                @yield('main-panel-yield')

                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    @include('interface.partial.footer')
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('assets/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/js/data-table.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/js/dataTables.bootstrap4.js') }}"></script>
    <script>
        var penomoran = 1;
        // Fungsi untuk mengupdate nomor di dalam <td>
        function updatepenomoran() {
            document.getElementById("penomoran").innerHTML = penomoran;
            penomoran++;
        }

        updatepenomoran();
    </script>
    <!-- End custom js for this page-->
</body>

</html>
