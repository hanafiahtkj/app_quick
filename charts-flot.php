
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Flot Charts";
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
$sub_title = "Charts";$title = "Flot Charts";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Multiple Statistics</h4>
                                        <div id="website-stats" style="height: 350px;" class="flot-chart mt-5" data-colors="#4fc6e1,#6658dd"></div> 
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Chart</h4>
                                        <div id="website-stats1" style="height: 350px;" class="flot-chart mt-5" data-colors="#6658dd,#f1556c"></div>    
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Donut Pie</h4>
                                        <div id="donut-chart" class="flot-chart mt-5" data-colors="#4a81d4,#f672a7,#f7b84b,#4fc6e1,#1abc9c" style="height: 350px;"></div> <!-- end card -->
                                    </div>
                                </div> <!-- end col -->
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Realtime Statistics</h4>
                                        <div id="flotRealTime" style="height: 350px;" data-colors="#4a81d4" class="flot-chart mt-5"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Chart</h4>
                                        <div id="line-chart-alt" class="mt-5" data-colors="#6c757d,#f1556c" style="height:350px;"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Combine Chart</h4>
                                        <div id="combine-chart" data-colors="#e3eaef,#f1556c,#1abc9c" class="flot-chart mt-5" style="height: 350px;"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Stacked Bar chart</h4>
                                        <div id="ordered-bars-chart" style="height: 350px;" class="mt-5" data-colors="#4fc6e1,#f7b84b,#4a81d4"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Pie Chart</h4>
                                        <div id="pie-chart" class="flot-chart mt-5" data-colors="#4a81d4,#f672a7,#f7b84b,#4fc6e1,#1abc9c" style="height: 350px;"></div>
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

        <script src="assets/libs/flot-charts/jquery.flot.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
        <script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.pie.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.stack.js"></script>
        <script src="assets/libs/flot-orderbars/js/jquery.flot.orderBars.js"></script>
        <script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/flot.init.js"></script>

        
    </body>
</html>