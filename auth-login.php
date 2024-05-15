<?php include 'partials/main.php'; ?>
<?php
    $_SESSION['error'] = null;
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if (strlen($email)==0) {
            $_SESSION['error'] =  "Please enter a email";
            $_POST['email'] = null;
        }else{
        if(checkAuth($email)===true){
            header('Location: index.php');
            die();
        }else{
            $_SESSION['error'] =  "Email is not valid";
        }
    }
    }

?>

<head>
    <?php
    $title = "Log In";
    include 'partials/title-meta.php'; ?>

		<?php include 'partials/head-css.php'; ?>
    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages" style="
            height: 100vh;
        ">
            <div class="container h-100" style="
                justify-content: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            ">
                <div class="row justify-content-center" style="
                    width: 100%;
                ">
                    <div class="" style="
                        max-width: 460px;
                    ">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <div class="auth-brand">
                                        <a href="index.php" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-dark.png" alt="" height="22">
                                            </span>
                                        </a>
                    
                                        <a href="index.php" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="assets/images/logo-light.png" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <!-- <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p> -->
                                </div>

                                <form method="POST">

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label">Username</label>
                                        <input class="form-control" type="email" id="emailaddress" placeholder="Enter your username" name="email" value="<?php echo ($_POST['email'] ?? "demo@customer.com") ?>">
                                        <span class="text-danger"><?php echo $_SESSION['error'] ?></span>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" class="form-control" placeholder="Enter your password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="text-center d-grid">
                                        <button class="btn btn-warning" type="submit"> Log In </button>
                                    </div>

                                </form>

                                <!-- <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="auth-recoverpw.php" class="text-white-50 ms-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="auth-register.php" class="text-white ms-1"><b>Sign Up</b></a></p>
                            </div>
                        </div> -->
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <!-- <footer class="footer footer-alt">
            2015 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a> 
        </footer> -->

        <!-- Authentication js -->
        <script src="assets/js/pages/authentication.init.js"></script>

    </body>
</html>