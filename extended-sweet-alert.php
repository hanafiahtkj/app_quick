
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "Sweet Alerts";
    include 'partials/title-meta.php'; ?>

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
$sub_title = "Extended UI";$title = "Sweet Alerts";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                            <h4 class="header-title">Examples</h4>

                                            <p class="sub-header">
                                                A beautiful, responsive, customizable, accessible (WAI-ARIA) replacement for JavaScript's popup boxes
                                            </p>

                                        <table class="table table-borderless table-centered mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th style="width:50%;">Alert Type</th>
                                                    <th>Example</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>A basic message</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-basic">Click me</button>
                                                </td>
                                            </tr>
            
                                            <tr>
                                                <td>A title with a text under</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-title">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A success message!</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-success">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>A modal window with a long content inside:</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-long-content">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>A custom positioned dialog</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-custom-position">Click me</button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>A modal with a title, an error icon, a text, and a footer</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-error">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A confirm dialog, with a function attached to the "Confirm"-button...</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-warning">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>By passing a parameter, you can execute something else for "Cancel".</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-params">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A message with custom Image Header</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-image">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A message with auto close timer</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="sa-close">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Custom HTML description and buttons</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="custom-html-alert">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>A message with custom width, padding and background</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="custom-padding-width-alert">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ajax request example</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="ajax-alert">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Chaining modals (queue) example</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="chaining-alert">Click me</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Dynamic queue example</td>
                                                <td>
                                                    <button type="button" class="btn btn-info btn-xs" id="dynamic-alert">Click me</button>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
            
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div>
                            <!-- end col -->
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

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.all.min.js"></script>

        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>

        
    </body>
</html>