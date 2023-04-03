<?php
session_start();
if($_SESSION['name'] && $_SESSION['pass'])
{
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
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
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>RJ Electronics</h3>
                </a>
                
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="mobile.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Add Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="mobile.php" class="dropdown-item">Mobile</a>
                            <a href="leptop.php" class="dropdown-item active">Leptop</a>
                            <a href="TV1.php" class="dropdown-item">T.V.</a>
                            <a href="audio.php" class="dropdown-item">Audio Headphones</a>
                        </div>
                    </div>
        
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Sign In</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.php" class="dropdown-item">Sign In</a>
            
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
        <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
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
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Navbar Start -->
            <!-- Navbar End -->
            <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
      <div class="navbar-nav">
        
      <a href="index.php" button type="button" class="btn btn-outline-primary">Product Details</button></a>
      <a href="userlist.php" button type="button" class="btn btn-outline-primary">User List</button></a>
      <a href="order.php" button type="button" class="btn btn-outline-primary">User Order Details</button></a>
    </div>
  </div>
</nav>

<div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Details</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Country</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Pincode</th>
                                            <th>Flat, House no., Building, Company, Apartment</th>
                                            <th>Area, Street, Sector, Village</th>
                                            <th>Landmark</th>
                                            <th>Town/City</th>
                                            <th>State</th>
                                            <th>Payment Method</th>
                                            <th>Product Id</th>
                                            <th>Email Id</th>
                                            <?php
                                    $con=mysqli_connect("localhost","root","","rjelectronic");
                                    $q="select * from order1";
                                    $r=mysqli_query($con,$q);
                                    $n=mysqli_num_rows($r);
                                    $a=1;
                                    while ($row=mysqli_fetch_assoc($r)) {
                              ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['country']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['mobile']?></td>
                                            <td><?php echo $row['pincode']?></td>
                                            <td><?php echo $row['flate']?></td>
                                            <td><?php echo $row['area']?></td>
                                            <td><?php echo $row['landmark']?></td>
                                            <td><?php echo $row['town']?></td>
                                            <td><?php echo $row['state']?></td>
                                            <td><?php echo $row['payment']?></td>
                                            <td><?php echo $row['mobileid']?></td>
                                            <td><?php echo $row['EmailId']?></td>

                                        <?php 
                                            }
                                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- headphone end-->



            <!-- Sale & Revenue Start -->
            <!-- Sale & Revenue End -->


    


            <!-- Recent Sales Start -->
            <!-- Widgets End -->


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
    echo "<script>window.location='signin.php'</script>";
}
?>