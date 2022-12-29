<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from coderthemes.com/hyper_2/saas/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Nov 2022 03:59:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Total TopUp | NusantaraKu Dashboard Admin</title>
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
                                    <h4 class="page-title">Total TopUp</h4>
                                </div>
                            </div>
                        </div>

                        <!-- Table Data Kabupaten / Kota -->
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-bordered mb-3">
                                            <li class="nav-item ml-5">
                                                <select class="form-select" id="status-select">
                                                    <option selected>Semua Daerah</option>
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
                                        </ul> <!-- end nav-->

                                        <div class="tab-content" style="overflow: scroll;">
                                            <div class="tab-pane show active" id="basic-datatable-preview">
                                                <table id="basic-datatable" class="table table-striped dt-responsive nowrap ">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Tipe Pengguna</th>
                                                            <th>Asal Daerah</th>
                                                            <th>Nama</th>
                                                            <th>Layanan</th>
                                                            <th>Metode</th>
                                                            <th>Biaya Layanan</th>
                                                            <th>Kode TopUp</th>
                                                            <th>Jumlah TopUp</th>
                                                            <th>Total TopUp</th>
                                                            <th>Tanggal Dibuat</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                        <tr>
                                                            <td> 1 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('totaltop.details') }}">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 2 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 3 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 4 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 5 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 6 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 7 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 8 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 9 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 10 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="{{ route('totaltop.details') }}">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 11 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td> 12 </td>
                                                            <td> User </td>
                                                            <td> Lamongan </td>
                                                            <td> Reza </td>
                                                            <td> Tripay </td>
                                                            <td> Virtual Account </td>
                                                            <td> Rp.15.000 </td>
                                                            <td> hdskjfhFHKSDJFHfdsjkfh </td>
                                                            <td> Rp.50.000 </td>
                                                            <td> Rp.65.000 </td>
                                                            <td> 25-05-22 </td>
                                                            <td>
                                                                <form action="#" method="POST">
                                                                    <a class="btn btn-primary waves-effect btn-label waves-light btn-sm" href="#">Lihat</a>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    <tbody>
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