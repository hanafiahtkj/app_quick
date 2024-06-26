
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "ION Range Slider";
    include 'partials/title-meta.php'; ?>

        <!-- ION Slider -->
        <link href="assets/libs/ion-rangeslider/css/ion.rangeSlider.min.css" rel="stylesheet" type="text/css"/>

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
$sub_title = "Extended UI";$title = "Range Slider";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Default</h4>
                                        <p class="sub-header">
                                            Start without params
                                        </p>
                                        <input type="text" id="range_01">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Min-Max</h4>
                                        <p class="sub-header">
                                            Set min value, max value and start point
                                        </p>
                                        <input type="text" id="range_02">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Prefix</h4>
                                        <p class="sub-header">
                                            Showing grid and adding prefix "$"
                                        </p>
                                        <input type="text" id="range_03">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Range</h4>
                                        <p class="sub-header">
                                            Set up range with negative values
                                        </p>
                                        <input type="text" id="range_04">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Step</h4>
                                        <p class="sub-header">
                                            Using step 250
                                        </p>
                                        <input type="text" id="range_05">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Custom Values</h4>
                                        <p class="sub-header">
                                            Using any strings as values
                                        </p>
                                        <input type="text" id="range_06">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Prettify Numbers</h4>
                                        <p class="sub-header">
                                            Prettify enabled. Much better!
                                        </p>
                                        <input type="text" id="range_07">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Disabled</h4>
                                        <p class="sub-header">
                                            Lock slider by using disable option
                                        </p>
                                        <input type="text" id="range_08">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Extra Example</h4>
                                        <p class="sub-header">
                                            Whant to show that max number is not the biggest one?
                                        </p>
                                        <input type="text" id="range_09">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Use decorate_both option</h4>
                                        <p class="sub-header">
                                            Use decorate_both option
                                        </p>
                                        <input type="text" id="range_10">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Postfixes</h4>
                                        <p class="sub-header">
                                            Using postfixes
                                        </p>
                                        <input type="text" id="range_11">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Hide</h4>
                                        <p class="sub-header">
                                            Or hide any part you wish
                                        </p>
                                        <input type="text" id="range_12">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modern skin</h4>
                                        <p class="sub-header">
                                            Example of modern skin
                                        </p>
                                        <input type="text" id="range_13">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Sharp skin</h4>
                                        <p class="sub-header">
                                            Example of sharp skin
                                        </p>
                                        <input type="text" id="range_14">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Round skin</h4>
                                        <p class="sub-header">
                                            Example of round skin
                                        </p>
                                        <input type="text" id="range_15">
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Square skin</h4>
                                        <p class="sub-header">
                                            Example of square skin
                                        </p>
                                        <input type="text" id="range_16">
                                    </div> 
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

        <!-- Ion Range Slider-->
        <script src="assets/libs/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

        <!-- Range slider init js-->
        <script src="assets/js/pages/range-sliders.init.js"></script>

        
    </body>
</html>