
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Chartist Charts";
    include 'partials/title-meta.php'; ?>

        <!-- Chartist Chart CSS -->
        <link rel="stylesheet" href="assets/libs/chartist/chartist.min.css">

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
$sub_title = "Charts";$title = "Chartist Charts";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Advanced Smil Animations</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="smil-animations" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Simple line chart</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Scatter Diagram</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="scatter-diagram" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Line chart with tooltips</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="line-chart-tooltips" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Line chart with area</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="chart-with-area" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Bi-polar Line chart with area only</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="bi-polar-line" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">SVG Path animation</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="svg-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Line Interpolation / Smoothing</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="line-smoothing" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Different configuration for different series</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="different-series" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">SVG Animations chart</h4>
                                        <p class="sub-header">
                                            Example of Label placement chart.
                                        </p>
    
                                        <div id="svg-dot-animation" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Bi-polar bar chart</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>

                                        <div id="bi-polar-bar" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Overlapping bars on mobile</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="overlapping-bars" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Multi-line labels</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="multi-line-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Stacked bar chart</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="stacked-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Horizontal bar chart</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="horizontal-bar-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Extreme responsive configuration</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="extreme-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Distributed series</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="distributed-series" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Label placement</h4>
                                        <p class="sub-header">
                                            Example of Label placement chart.
                                        </p>
    
                                        <div id="label-placement-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Animating a Donut with Svg.animate</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="animating-donut" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Simple pie chart</h4>
                                        <p class="sub-header">
                                            Example of Label placement chart.
                                        </p>
    
                                        <div id="simple-pie" class="ct-chart ct-golden-section simple-pie-chart-chartist"></div>
                                    </div> 
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Pie chart with custom labels</h4>
                                        <p class="sub-header">
                                            Example of Horizontal bar chart.
                                        </p>
    
                                        <div id="pie-chart" class="ct-chart ct-golden-section"></div>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->

                            <div class="col-lg-6">
                                <div class="card" dir="ltr">
                                    <div class="card-body">
                                        <h4 class="header-title">Gauge chart</h4>
                                        <p class="sub-header">
                                            Example of Label placement chart.
                                        </p>
    
                                        <div id="gauge-chart" class="ct-chart ct-golden-section"></div>
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

        <!--Chartist Chart-->
        <script src="assets/libs/chartist/chartist.min.js"></script>
        <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/chartist.init.js"></script>

    </body>
</html>