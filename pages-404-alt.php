
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Error Page | 404 | Page not Found";
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

                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="error-text-box">
                                <svg viewBox="0 0 600 200">
                                    <!-- Symbol-->
                                    <symbol id="s-text">
                                        <text text-anchor="middle" x="50%" y="50%" dy=".35em">404!</text>
                                    </symbol>
                                    <!-- Duplicate symbols-->
                                    <use class="text" xlink:href="#s-text"></use>
                                    <use class="text" xlink:href="#s-text"></use>
                                    <use class="text" xlink:href="#s-text"></use>
                                    <use class="text" xlink:href="#s-text"></use>
                                    <use class="text" xlink:href="#s-text"></use>
                                </svg>
                            </div>
                            <div class="text-center">
                                <h3 class="mt-0 mb-2">Whoops! Page not found </h3>
                                <p class="text-muted mb-3">It's looking like you may have taken a wrong turn. Don't worry...
                                    it happens to the best of us. You might want to check your internet connection.
                                    Here's a little tip that might help you get back on track.</p>

                                <a href="index.php" class="btn btn-success waves-effect waves-light">Back to Dashboard</a>
                            </div>
                            <!-- end row -->

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

</body>

</html>