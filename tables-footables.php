
<?php include 'partials/main.php'; ?>

<head>
    <?php
    $title = "FooTable";
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
$sub_title = "Tables";$title = "Foo Tables";
include 'partials/page-title.php'; ?>

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Filtering</h4>
                                        <p class="sub-header">
                                            include filtering in your FooTable.
                                        </p>
    
                                        <div class="mb-2">
                                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                                <div class="col-12 text-sm-center">
                                                    <select id="demo-foo-filter-status" class="form-select form-select-sm">
                                                        <option value="">Show all</option>
                                                        <option value="active">Active</option>
                                                        <option value="disabled">Disabled</option>
                                                        <option value="suspended">Suspended</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="table-responsive">
                                            <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                                                <thead>
                                                <tr>
                                                    <th data-toggle="true">First Name</th>
                                                    <th>Last Name</th>
                                                    <th data-hide="phone">Job Title</th>
                                                    <th data-hide="phone, tablet">DOB</th>
                                                    <th data-hide="phone, tablet">Status</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr class="active">
                                                    <td colspan="5">
                                                        <div class="text-end">
                                                            <ul class="pagination pagination-rounded justify-content-end footable-pagination mb-0"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Add &amp; Remove Rows</h4>
                                        <p class="sub-header">
                                            Add or remove rows from your FooTable.
                                        </p>

                                        <div class="mb-2">
                                            <div class="row row-cols-sm-auto g-2 align-items-center">
                                                <div class="col-12 text-sm-center">
                                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle me-2"></i> Add New Row</button>
                                                </div>
                                                <div class="col-12">
                                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                                            <thead>
                                            <tr>
                                                <th data-sort-ignore="true" class="min-width"></th>
                                                <th data-sort-initial="true" data-toggle="true">First Name</th>
                                                <th>Last Name</th>
                                                <th data-hide="phone">Job Title</th>
                                                <th data-hide="phone, tablet">DOB</th>
                                                <th data-hide="phone, tablet">Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Isidra</td>
                                                <td>Boudreaux</td>
                                                <td>Traffic Court Referee</td>
                                                <td>22 Jun 1972</td>
                                                <td><span class="badge label-table bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Shona</td>
                                                <td>Woldt</td>
                                                <td>Airline Transport Pilot</td>
                                                <td>3 Oct 1981</td>
                                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Granville</td>
                                                <td>Leonardo</td>
                                                <td>Business Services Sales Representative</td>
                                                <td>19 Apr 1969</td>
                                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Easer</td>
                                                <td>Dragoo</td>
                                                <td>Drywall Stripper</td>
                                                <td>13 Dec 1977</td>
                                                <td><span class="badge label-table bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Maple</td>
                                                <td>Halladay</td>
                                                <td>Aviation Tactical Readiness Officer</td>
                                                <td>30 Dec 1991</td>
                                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Maxine</td>
                                                <td><a href="#">Woldt</a></td>
                                                <td><a href="#">Business Services Sales Representative</a></td>
                                                <td>17 Oct 1987</td>
                                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Lorraine</td>
                                                <td>Mcgaughy</td>
                                                <td>Hemodialysis Technician</td>
                                                <td>11 Nov 1983</td>
                                                <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Lizzee</td>
                                                <td><a href="#">Goodlow</a></td>
                                                <td>Technical Services Librarian</td>
                                                <td>1 Nov 1961</td>
                                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Judi</td>
                                                <td>Badgett</td>
                                                <td>Electrical Lineworker</td>
                                                <td>23 Jun 1981</td>
                                                <td><span class="badge label-table bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                                                <td>Lauri</td>
                                                <td>Hyland</td>
                                                <td>Blackjack Supervisor</td>
                                                <td>15 Nov 1985</td>
                                                <td><span class="badge label-table bg-danger">Suspended</span></td>
                                            </tr>
                                            </tbody>
                                            <tfoot>
                                            <tr class="active">
                                                <td colspan="6">
                                                    <div class="text-end">
                                                        <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Triggers</h4>
                                        <p class="sub-header">
                                            Trigger certain FooTable actions.
                                        </p>
                                        <table id="demo-foo-row-toggler" class="table table-bordered toggle-circle mb-0">
                                            <thead>
                                                <tr>
                                                    <th data-toggle="true"> First Name </th>
                                                    <th> Last Name </th>
                                                    <th data-hide="phone"> Job Title </th>
                                                    <th data-hide="all"> DOB </th>
                                                    <th data-hide="all"> Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Pagination</h4>
                                        <p class="sub-header">
                                            Include pagination in your FooTable.
                                        </p>

                                        <label class="d-inline-flex align-items-center mb-3">
                                            Show
                                            <select id="demo-show-entries" class="form-select form-select-sm ms-1 me-1">
                                                <option value="5">5</option>
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                            </select>
                                            entries
                                        </label>
                                        
                                        <div class="table-responsive">
                                            <table id="demo-foo-pagination" class="table mb-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                                                <thead>
                                                <tr>
                                                    <th data-toggle="true"> First Name </th>
                                                    <th> Last Name </th>
                                                    <th data-hide="phone"> Job Title </th>
                                                    <th data-hide="all"> DOB </th>
                                                    <th data-hide="all"> Status </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                </tbody>
                                                <tfoot>
                                                <tr class="active">
                                                    <td colspan="5">
                                                        <div class="text-end">
                                                            <ul class="pagination pagination-split justify-content-end footable-pagination"></ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                            </table>
                                        </div> <!-- end .table-responsive-->
                                    </div>
                                </div> <!-- end card -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Accordion</h4>
                                        <p class="sub-header">
                                            include accordion in your FooTable.
                                        </p>

                                        <table id="demo-foo-accordion" class="table table-colored mb-0 toggle-arrow-tiny">
                                            <thead>
                                                <tr>
                                                    <th data-toggle="true"> First Name </th>
                                                    <th> Last Name </th>
                                                    <th data-hide="phone"> Job Title </th>
                                                    <th data-hide="all"> DOB </th>
                                                    <th data-hide="all"> Status </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Isidra</td>
                                                    <td>Boudreaux</td>
                                                    <td>Traffic Court Referee</td>
                                                    <td>22 Jun 1972</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Shona</td>
                                                    <td>Woldt</td>
                                                    <td>Airline Transport Pilot</td>
                                                    <td>3 Oct 1981</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Granville</td>
                                                    <td>Leonardo</td>
                                                    <td>Business Services Sales Representative</td>
                                                    <td>19 Apr 1969</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Easer</td>
                                                    <td>Dragoo</td>
                                                    <td>Drywall Stripper</td>
                                                    <td>13 Dec 1977</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maple</td>
                                                    <td>Halladay</td>
                                                    <td>Aviation Tactical Readiness Officer</td>
                                                    <td>30 Dec 1991</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Maxine</td>
                                                    <td><a href="#">Woldt</a></td>
                                                    <td><a href="#">Business Services Sales Representative</a></td>
                                                    <td>17 Oct 1987</td>
                                                    <td><span class="badge label-table  text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lorraine</td>
                                                    <td>Mcgaughy</td>
                                                    <td>Hemodialysis Technician</td>
                                                    <td>11 Nov 1983</td>
                                                    <td><span class="badge label-table bg-secondary text-light">Disabled</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lizzee</td>
                                                    <td><a href="#">Goodlow</a></td>
                                                    <td>Technical Services Librarian</td>
                                                    <td>1 Nov 1961</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Judi</td>
                                                    <td>Badgett</td>
                                                    <td>Electrical Lineworker</td>
                                                    <td>23 Jun 1981</td>
                                                    <td><span class="badge label-table bg-success">Active</span></td>
                                                </tr>
                                                <tr>
                                                    <td>Lauri</td>
                                                    <td>Hyland</td>
                                                    <td>Blackjack Supervisor</td>
                                                    <td>15 Nov 1985</td>
                                                    <td><span class="badge label-table bg-danger">Suspended</span></td>
                                                </tr>
                                            </tbody>
                                        
                                        </table>
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

        <!-- Footable js -->
        <script src="assets/libs/footable/footable.all.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/foo-tables.init.js"></script>

        
    </body>
</html>