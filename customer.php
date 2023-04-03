
<?php
session_start();
if($_SESSION['name'] && $_SESSION['pass'])
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RJ Electronics</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
       
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
            <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>RJ Electronics</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elements</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="mobile.php" class="dropdown-item">Mobiles & Accessories</a>
                            <a href="leptop.php" class="dropdown-item">Laptops Accessories</a>
                            <a href="tv.php" class="dropdown-item">TV & Home Entertainment</a>
                            <a href="audio.php" class="dropdown-item">Audio</a></div>
                    </div>
                    <a href="customer.php" class="nav-item nav-link active"><i class="fa fa-th me-2"></i>Costomer Service</a>
                    <a href="customer.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Cart</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Sign In</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
                            <a href="signup.php" class="dropdown-item">Sign Up</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-10">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="feedback.php" class="nav-link dropdown-toggle">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Feedback</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/person.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION['name'] ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="account.php" class="dropdown-item">Your Account</a>
                            <a href="corder.php" class="dropdown-item">Your Orders</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a></div>
                    </div>
                </div>
            </nav>
            <!-- Navbar Start -->
            <h2><b><p>Hi,   What can we help you with?</p></b></h2>
            <h4><b><p>Some things you can do here</p></b></h4>

            <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4"><img class="rounded-circle" src="img/order.png" alt="" style="width: 40px; height: 40px;"><a href="corder.php">Your Orders</h6></a>
            <h7 class="mb-4">Track packages</h7><br>
            <h7 class="mb-4">Edit or cancel Orders</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4"><img class="rounded-circle" src="img/return.png" alt="" style="width: 40px; height: 40px;"><a href=".php"> Returns and Refunds</h6></a>
            <h7 class="mb-4"></h7>Returns or exchange items<br>
            <h7 class="mb-4">Print return mailing labels</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4"><img class="rounded-circle" src="img/address.png" alt="" style="width: 40px; height: 40px;"><a href="corder.php">Manage Address</h6></a>
            <h7 class="mb-4">Update your address</h7><br>
            <h7 class="mb-4">Add address,landmarks details</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4"><img class="rounded-circle" src="img/payment.jpg" alt="" style="width: 40px; height: 40px;"><a href=".php">Payment Settings</h6></a>
            <h7 class="mb-4">ADD or edit payment methods</h7><br>
            <h7 class="mb-4">change expired debit or credit card</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4"><img class="rounded-circle" src="img/account.png" alt="" style="width: 40px; height: 40px;"><a href="account.php">Account Settings</h6></a>
            <h7 class="mb-4">Change your email or password</h7><br>
            <h7 class="mb-4">Update login information</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4">
            <img class="rounded-circle" src="img/membership.png"alt="" style="width: 40px; height: 40px;"><a href=".php">Manage Prime</h6></a>
            <h7 class="mb-4">View your benefits</h7><br>
            <h7 class="mb-4">Membership Details</h7>

            </div>
            </div>
            <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                
            <h6 class="mb-4"><img class="rounded-circle" src="img/digital.png" alt="" style="width: 40px; height: 40px;"><a href="order">Digital services and Device support</h6></a>
            <h7 class="mb-4">Find device help and support</h7><br>
            <h7 class="mb-4">Troubleshoot device issues</h7>

            </div>
            </div>
            </div>
            </div>
            
          
            <!-- Navbar End -->


            <!-- Chart Start -->
            
            <!-- Chart End -->


            <!-- Footer Start -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
<?php
}
else{
    echo"<script>window.location='signin.php'</script>";
}
?>