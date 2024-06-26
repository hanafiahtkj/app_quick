
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Pricing";
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
$sub_title = "Extra Pages";$title = "Pricing";
include 'partials/page-title.php'; ?>


                        <div class="row justify-content-center">
                            <div class="col-xl-10">

                                <!-- Pricing Title-->
                                <div class="text-center">
                                    <h3 class="mb-2">Our <b>Plans</b></h3>
                                    <p class="text-muted w-50 m-auto">
                                        We have plans and prices that fit your business perfectly. Make your client site a success with our products.
                                    </p>
                                </div>

                                <!-- Plans -->
                                <div class="row my-3">
                                    <div class="col-md-4">
                                        <div class="card card-pricing">
                                            <div class="card-body text-center">
                                                <p class="card-pricing-plan-name fw-bold text-uppercase">Professional Pack</p>
                                                <span class="card-pricing-icon text-primary">
                                                    <i class="fe-users"></i>
                                                </span>
                                                <h2 class="card-pricing-price">$19 <span>/ Month</span></h2>
                                                <ul class="card-pricing-features">
                                                    <li>10 GB Storage</li>
                                                    <li>500 GB Bandwidth</li>
                                                    <li>No Domain</li>
                                                    <li>1 User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-primary waves-effect waves-light mt-4 mb-2 width-sm">Sign Up</button>
                                            </div>
                                        </div> <!-- end Pricing_card -->
                                    </div> <!-- end col -->

                                    <div class="col-md-4">
                                        <div class="card card-pricing card-pricing-recommended">
                                            <div class="card-body text-center">
                                                <p class="card-pricing-plan-name fw-bold text-uppercase">Business Pack</p>
                                                <span class="card-pricing-icon text-white">
                                                    <i class="fe-award"></i>
                                                </span>
                                                <h2 class="card-pricing-price text-white">$29 <span>/ Month</span></h2>
                                                <ul class="card-pricing-features">
                                                    <li>50 GB Storage</li>
                                                    <li>900 GB Bandwidth</li>
                                                    <li>2 Domain</li>
                                                    <li>10 User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-light waves-effect mt-4 mb-2 width-sm">Sign Up</button>
                                            </div>
                                        </div> <!-- end Pricing_card -->
                                    </div> <!-- end col -->

                                    <div class="col-md-4">
                                        <div class="card card-pricing">
                                            <div class="card-body text-center">
                                                <p class="card-pricing-plan-name fw-bold text-uppercase">Enterprise Pack</p>
                                                <span class="card-pricing-icon text-primary">
                                                    <i class="fe-aperture"></i>
                                                </span>
                                                <h2 class="card-pricing-price">$39 <span>/ Month</span></h2>
                                                <ul class="card-pricing-features">
                                                    <li>100 GB Storege</li>
                                                    <li>Unlimited Bandwidth</li>
                                                    <li>10 Domain</li>
                                                    <li>Unlimited User</li>
                                                    <li>Email Support</li>
                                                    <li>24x7 Support</li>
                                                </ul>
                                                <button class="btn btn-primary waves-effect waves-light mt-4 mb-2 width-sm">Sign Up</button>
                                            </div>
                                        </div> <!-- end Pricing_card -->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                            </div> <!-- end col-->
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

    </body>
</html>