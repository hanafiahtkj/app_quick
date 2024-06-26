
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Sparklines Charts";
    include 'partials/title-meta.php'; ?>

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
$sub_title = "Charts";$title = "Sparklines Charts";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Charts</h4>
                                        <div class="mt-4">
                                            <div id="sparkline1" data-colors="#6658dd,#1abc9c"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bar Chart</h4>
                                        <div class="mt-4">
                                            <div id="sparkline2" data-colors="#4a81d4" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Pie Chart</h4>
                                        <div class="mt-4">
                                            <div id="sparkline3" data-colors="#4fc6e1,#f7b84b,#e3eaef,#f1556c" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Line Chart</h4>
                                        <div class="mt-4">
                                            <div id="sparkline4" data-colors="#2d7bf4,#4eb7eb" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Mouse Speed Chart</h4>
                                        <div class="mt-4">
                                            <div id="sparkline5" data-colors="#f1556c" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Composite bar Chart</h4>
                                        <div class="text-center mt-4">
                                            <div id="sparkline6" data-colors="#e3eaef,#6c757d" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Discrete Chart</h4>
                                        <div class="text-center mt-4">
                                            <div id="sparkline7" data-colors="#4a545e" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bullet Chart</h4>
                                        <div class="text-center mt-4" style="min-height: 164px;">
                                            <div id="sparkline8" data-colors="#64c5b1,#5553ce" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Box Plot Chart</h4>
                                        <div class="text-center mt-4" style="min-height: 164px;">
                                            <div id="sparkline9" data-colors="#6658dd,#1abc9c" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Tristate Charts</h4>
                                        <div class="text-center mt-4" style="min-height: 164px;">
                                            <div id="sparkline10" data-colors="#0acf97,#e3eaef,#ff679b" class="text-center"></div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
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

        <!-- Sparkline charts -->
        <script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/sparkline.init.js"></script>

        
    </body>
</html>