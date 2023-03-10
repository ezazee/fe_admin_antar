<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>CRM Transaksi | NusantaraKu Dashboard Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        @include('master.master-css')
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">

            
            <!-- ========== Topbar Start ========== -->
            @include('master.topbar')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('master.sidebar')
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    
                    <!-- Start Content-->
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title">Transaksi Setiap Mitra Kabupaten</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <ul class="nav-khusus nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Semua Transaksi</option>
                                                    <option value="1">Lamongan</option>
                                                    <option value="2">Bitung</option>
                                                    <option value="3">Madiun</option>
                                                    <option value="4">Garut</option>
                                                    <option value="5">Madiun</option>
                                                    <option value="6">Yogyakarta</option>
                                                    <option value="7">Padang</option>
                                                    <option value="8">Malang</option>
                                                    <option value="9">Surabaya</option>
                                                    <option value="10">Makasar</option>
                                                </select>
                                            </li>

                                            <ul class="nav-khusus nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Semua Status</option>
                                                    <option value="1">Dikirim</option>
                                                    <option value="2">Di Proses</option>
                                                    <option value="3">Dibatalkan</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->

                                         <ul class="nav-khusus nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Semua Type</option>
                                                    <option value="1">Anterin</option>
                                                    <option value="2">Belanjain</option>
                                                    <option value="3">Kirimin</option>
                                                </select>
                                            </li>
                                        </ul> <!-- end nav-->
                                        
                                        </ul> <!-- end nav-->
                                        </div>

                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode Transaksi</th>
                                                            <th>Mitra Kota / Kabupaten</th>
                                                            <th>Status</th>
                                                            <th>Kode Pembayaran</th>
                                                            <th>Nama Merchant</th>
                                                            <th>Nama Pembeli</th>
                                                            <th>Total Order</th>
                                                            <th>Type Order</th>
                                                            <th>Metode Pembayaran</th>
                                                            <th>Status Pembayaran</th>
                                                            <th>Tgl Order</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                           <td>
                                                                <form action="#" >
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('transaksi.details_anterin') }}">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                          <tr>
                                                            <td> 2 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Belanjain </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('transaksi.details_belanjain') }}">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                         <tr>
                                                            <td> 3 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-warning-lighten">Di Proses</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Kirimin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('transaksi.details_kirimin') }}">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                          <tr>
                                                            <td> 4 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 5 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-danger-lighten">Dibatalkan</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-danger-lighten">Dibatalkan</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                           <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 6 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 7 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 8 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 9 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                           <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 10 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                          <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 11 </td>
                                                            <td> XjcLYF </td>
                                                            <td> Lamongan </td>
                                                            <td> <h5><span class="badge badge-success-lighten">Dikirim</span></h5> </td>
                                                            <td >XjcLYFXjcLYFXjcLYF </td>
                                                            <td>Toko Reza Mentari</td>
                                                            <td>Reza</td>
                                                            <td>Rp. 50.000</td>
                                                            <td> Anterin </td>
                                                            <td>Saldo</td>
                                                             <td> <h5><span class="badge badge-success-lighten">Dibayar</span></h5> </td>
                                                             <td>2011/04/25</td>
                                                           <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        
                                                    </tbody>
                                                </table>                                           
                                            </div> <!-- end preview-->
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>

                </div>

                <!-- content -->

                <!-- Footer Start -->
                @include('master.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->



             @include('master.script')
             

    </body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 04:00:53 GMT -->
</html>