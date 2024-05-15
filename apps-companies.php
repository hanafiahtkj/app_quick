
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Companies";
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
$sub_title = "Apps";$title = "Companies";
include 'partials/page-title.php'; ?>


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-md-8">
                                                <form class="d-flex flex-wrap align-items-center">
                                                    <label for="inputPassword2" class="visually-hidden">Search</label>
                                                    <div class="me-3">
                                                        <input type="search" class="form-control my-1 my-md-0" id="inputPassword2" placeholder="Search...">
                                                    </div>
                                                    <label for="status-select" class="me-2">Sort By</label>
                                                    <div class="me-sm-3">
                                                        <select class="form-select my-1 my-md-0" id="status-select">
                                                            <option>Select</option>
                                                            <option>Date</option>
                                                            <option selected>Name</option>
                                                            <option>Revenue</option>
                                                            <option>Employees</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="text-md-end mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light me-1"><i class="mdi mdi-plus-circle me-1"></i> Add New</button>
                                                </div>
                                            </div><!-- end col-->
                                        </div> <!-- end row -->
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row -->        

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/amazon.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Amazon Inc.</h4>
                                            <p class="text-muted  font-14">Seattle, Washington</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            Amazon.com, Inc., doing business as Amazon, is an American electronic commerce and cloud computing company based in Seattle..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>17,786 cr</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>566k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/apple.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Apple Inc.</h4>
                                            <p class="text-muted  font-14">Cupertino, California</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops,
                                            and sells..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>22,923.4 cr</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>47k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/google.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Google LLC</h4>
                                            <p class="text-muted  font-14">Menlo Park, California</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            Google LLC is an American multinational technology company that specializes in Internet-related services and products, which
                                            include..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>110 bn</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>72k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/airbnb.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Airbnb Inc.</h4>
                                            <p class="text-muted  font-14">San Francisco, California</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            A‌i‌r‌b‌n‌b‌, ‌ ‌I‌n‌c‌.‌ is a company based in San Francisco that operates an online marketplace and hospitality service
                                            for people to lease or rent..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>260 cr</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>3.1k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->
                            
                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/facebook.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Facebook Inc.</h4>
                                            <p class="text-muted  font-14">Cambridge, Massachusetts</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            Facebook is an American online social media and social networking service company based in Menlo Park, California..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>9.16 bn</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>25.1k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->

                            <div class="col-lg-4">
                                <div class="card bg-pattern">
                                    <div class="card-body">
                                        <div class="text-center">
                                            <img src="assets/images/companies/cisco.png" alt="logo" class="avatar-xl rounded-circle mb-3">
                                            <h4 class="mb-1 font-20">Cisco Systems</h4>
                                            <p class="text-muted  font-14">San Jose, California</p>
                                        </div>
    
                                        <p class="font-14 text-center text-muted">
                                            Cisco Systems, Inc. is an American multinational technology conglomerate headquartered in San Jose, California..
                                        </p>
    
                                        <div class="text-center">
                                            <a href="javascript:void(0);" class="btn btn-sm btn-light">View more info</a>
                                        </div>
    
                                        <div class="row mt-4 text-center">
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Revenue (USD)</h5>
                                                <h4>4,800.5 cr</h4>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="fw-normal text-muted">Number of employees</h5>
                                                <h4>73.4k</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end card -->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="text-end">
                                    <ul class="pagination pagination-rounded justify-content-end">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                                <span class="visually-hidden">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                                <span class="visually-hidden">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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