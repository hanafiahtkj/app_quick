<!-- ========== Menu ========== -->
<div class="app-menu">  

    <!-- Brand Logo -->
    <div class="logo-box">
        <!-- Brand Logo Light -->
        <a href="index.php" class="logo-light">
            <img src="assets/images/logo-light.png" alt="logo" class="logo-lg">
            <img src="assets/images/golkar.png" alt="small logo" class="logo-sm">
        </a>

        <!-- Brand Logo Dark -->
        <a href="index.php" class="logo-dark">
            <img src="assets/images/golkar.png" alt="dark logo" class="logo-lg" style="height: 50px;">
            <img src="assets/images/logo-sm.png" alt="small logo" class="logo-sm">
        </a>
    </div>

    <!-- menu-left -->
    <div class="scrollbar">

        <!-- User box -->
        <div class="user-box text-center">
            <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="dropdown-toggle h5 mb-1 d-block" data-bs-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted mb-0">Admin Head</p>
        </div>

        <!--- Menu -->
        <ul class="menu">

            <li class="menu-title">Utama</li>

            <li class="menu-item">
                <a href="index.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Dashboards  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="file-text"></i></span>
                    <span class="menu-text"> Quick Count </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse collapse-md" id="menuAuth">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="dashboard-2.php" class="menu-link">
                                <span class="menu-text">Chart</span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="tables-datatables.php" class="menu-link">
                                <span class="menu-text">Data Tabel</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-title">Master Data</li>

            <li class="menu-item">
                <a href="tables-datatables.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Data Paslon  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="tables-datatables.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Data TPS  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="tables-datatables.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Data Saksi  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="tables-datatables.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Data Kelurahan  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="tables-datatables.php" class="menu-link">
                    <span class="menu-icon"><i data-feather="calendar"></i></span>
                    <span class="menu-text"> Data Kecamatan  </span>
                </a>
            </li>

            <li class="menu-title">Sistem</li>

            <li class="menu-item">
                <a href="#menuTables" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="grid"></i></span>
                    <span class="menu-text"> Pengaturan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="menuTables">
                    <ul class="sub-menu">
                       
                        <li class="menu-item">
                            <a href="tables-datatables.php" class="menu-link">
                                <span class="menu-text">Admin Kecamatan</span>
                            </a>
                        </li>

                        <li class="menu-item">
                            <a href="tables-datatables.php" class="menu-link">
                                <span class="menu-text">Super Admin</span>
                            </a>
                        </li>
                
                    </ul>
                </div>
            </li>

            <li class="menu-item">
                <a href="#menuAuth" data-bs-toggle="collapse" class="menu-link">
                    <span class="menu-icon"><i data-feather="file-text"></i></span>
                    <span class="menu-text"> Auth Pages </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse collapse-md" id="menuAuth">
                    <ul class="sub-menu">
                        <li class="menu-item">
                            <a href="auth-login.php" class="menu-link">
                                <span class="menu-text">Log In</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Menu -->
        <div class="clearfix"></div>
    </div>
</div>
<!-- ========== Left menu End ========== -->