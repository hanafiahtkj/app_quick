
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Dashboard 2";
    include 'partials/title-meta.php'; ?>

        <!-- plugin css -->
        <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

       <?php include 'partials/head-css.php'; ?>
    </head>

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include 'partials/menu.php'; ?>

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <?php include 'partials/topbar.php'; ?>

                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <?php
                        $sub_title = "Dashboards";
                        $title = " Quick Count ";
                        include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-primary border-primary border">
                                                    <i class="fe-heart font-22 avatar-title text-primary"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Total 1</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-success border-success border">
                                                    <i class="fe-shopping-cart font-22 avatar-title text-success"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Total 2</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-info border-info border">
                                                    <i class="fe-bar-chart-line- font-22 avatar-title text-info"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Total 3</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->

                            <div class="col-md-6 col-xl-3">
                                <div class="widget-rounded-circle card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="avatar-lg rounded-circle bg-soft-warning border-warning border">
                                                    <i class="fe-eye font-22 avatar-title text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-end">
                                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">0.58</span>%</h3>
                                                    <p class="text-muted mb-1 text-truncate">Total 4</p>
                                                </div>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>
                                </div> <!-- end widget-rounded-circle-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-1" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-2" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-3" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-4" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-5" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-xl-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Total Suara</h4>

                                        <div id="cardCollpase3" class="collapse show">
                                            <div class="text-center pt-3">
                                                <div id="total-users-6" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                                                <div class="row mt-3">
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 01</p>
                                                        <h4><i class="fe-arrow-down text-danger me-1"></i>18k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 02</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>3.25k</h4>
                                                    </div>
                                                    <div class="col-4">
                                                        <p class="text-muted font-15 mb-1 text-truncate">Paslon 03</p>
                                                        <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                                    </div>
                                                </div> <!-- end row -->
                                            </div>
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                        </div>
                        <!-- end row -->

                        <div class="row">
                            
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-widgets">
                                            <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                            <a data-bs-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase5"><i class="mdi mdi-minus"></i></a>
                                            <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                        </div>
                                        <h4 class="header-title mb-0">Top Selling Products</h4>

                                        <div id="cardCollpase5" class="collapse show">
                                            <div class="table-responsive pt-3">
                                                <table class="table table-hover table-centered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>Price</th>
                                                            <th>Quantity</th>
                                                            <th>Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Lightweight Shirt</td>
                                                            <td>$128.50</td>
                                                            <td>37</td>
                                                            <td>$4,754.50</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Marco Shoes</td>
                                                            <td>$28.49</td>
                                                            <td>69</td>
                                                            <td>$1,965.81</td>
                                                        </tr>
                                                        <tr>
                                                            <td>ASOS Ridley High Waist</td>
                                                            <td>$79.49</td>
                                                            <td>82</td>
                                                            <td>$6,518.18</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Half Sleeve Shirt</td>
                                                            <td>$39.99</td>
                                                            <td>64</td>
                                                            <td>$2,559.36</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Lightweight Jacket</td>
                                                            <td>$20.00</td>
                                                            <td>184</td>
                                                            <td>$3,680.00</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> <!-- end table responsive-->
                                        </div> <!-- collapsed end -->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <?php include 'partials/footer.php'; ?>

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <?php include 'partials/right-sidebar.php'; ?>
        
        <?php include 'partials/footer-scripts.php'; ?>

        <!-- Plugins js-->
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

        <!-- Dashboard 2 init -->
        <script src="assets/js/pages/dashboard-2.init.js"></script>
       
    </body>
</html>