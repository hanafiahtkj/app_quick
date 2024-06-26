
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Gallery";
    include 'partials/title-meta.php'; ?>

        <!-- Lightbox css -->
        <link href="assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />

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
$sub_title = "Extra Pages";$title = "Gallery";
include 'partials/page-title.php'; ?>

                        <!-- Filter -->
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center filter-menu">
                                    <a href="javascript: void(0);" class="filter-menu-item active" data-rel="all">All</a>
                                    <a href="javascript: void(0);" class="filter-menu-item" data-rel="web">Web Design</a>
                                    <a href="javascript: void(0);" class="filter-menu-item" data-rel="graphic">Graphic Design</a>
                                    <a href="javascript: void(0);" class="filter-menu-item" data-rel="illustrator">Illustrator</a>
                                    <a href="javascript: void(0);" class="filter-menu-item" data-rel="photography">Photography</a>
                                </div>
                            </div>
                        </div>
                        <!-- end row-->

                        <div class="row filterable-content">

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-1.jpg" class="image-popup" title="Screenshot-1">
                                        <img src="assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Man wearing black jacket</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-3.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Justin Coke</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all graphic photography">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-2.jpg" class="image-popup" title="Screenshot-2">
                                        <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Snow covered mountain</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-2.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Toni Sanchez</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-3.jpg" class="image-popup" title="Screenshot-3">
                                        <img src="assets/images/small/img-3.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Woman sitting on rock</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-4.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Maria Crowder</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all graphic illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-4.jpg" class="image-popup" title="Screenshot-4">
                                        <img src="assets/images/small/img-4.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Smiling woman's face</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-5.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Charles East</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-5.jpg" class="image-popup" title="Screenshot-5">
                                        <img src="assets/images/small/img-5.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Brown tabby cat sitting on concrete</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-6.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">David Buchanan</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all graphic photography">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-6.jpg" class="image-popup" title="Screenshot-6">
                                        <img src="assets/images/small/img-6.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Woman walking between brown </h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-7.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Lee Moore</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-7.jpg" class="image-popup" title="Screenshot-7">
                                        <img src="assets/images/small/img-7.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Landscape photography of mountains</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-8.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Julia Cruz</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-1.jpg" class="image-popup" title="Screenshot-8">
                                        <img src="assets/images/small/img-1.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Man wearing black jacket</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-9.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Craig Creek</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all graphic photography">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-2.jpg" class="image-popup" title="Screenshot-9">
                                        <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Snow covered mountain</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-10.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Gloria Pitt</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-3.jpg" class="image-popup" title="Screenshot-10">
                                        <img src="assets/images/small/img-3.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Woman sitting on rock</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-4.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Silas Seay</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all graphic illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-4.jpg" class="image-popup" title="Screenshot-11">
                                        <img src="assets/images/small/img-4.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Smiling woman's face</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-5.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Linda Ward</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
                            </div> <!-- end col -->

                            <div class="col-sm-6 col-xl-3 filter-item all web illustrator">
                                <div class="gal-box">
                                    <a href="assets/images/small/img-5.jpg" class="image-popup" title="Screenshot-12">
                                        <img src="assets/images/small/img-5.jpg" class="img-fluid" alt="work-thumbnail">
                                    </a>
                                    <div class="gall-info">
                                        <h4 class="font-16 mt-0">Brown tabby cat sitting on concrete</h4>
                                        <a href="javascript: void(0);">
                                            <img src="assets/images/users/user-6.jpg" alt="user-img" class="rounded-circle" height="24" />
                                            <span class="text-muted ms-1">Becky Eley</span>
                                        </a>
                                        <a href="javascript: void(0);" class="gal-like-btn"><i class="mdi mdi-heart-outline text-danger"></i></a>
                                    </div> <!-- gallery info -->
                                </div> <!-- end gal-box -->
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

        <!-- Magnific Popup-->
        <script src="assets/libs/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!-- Gallery Init-->
        <script src="assets/js/pages/gallery.init.js"></script>

        
    </body>
</html>