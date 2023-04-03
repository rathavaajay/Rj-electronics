<?php
session_start();
if($_SESSION['name'] && $_SESSION['pass'])
{
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RJ Electronic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet">

<link rel="stylesheet" href="style.css">

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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Electronics</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="mobile.php" class="dropdown-item">Mobiles & Accessories</a>
                            <a href="leptop.php" class="dropdown-item">Laptops Accessories</a>
                            <a href="tv.php" class="dropdown-item">TV & Home Entertainment</a>
                            <a href="audio.php" class="dropdown-item">Audio</a>

                        </div>
                        <a href="customer.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Customer Service</a>
                        <a href="customer.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Cart</a>

                    </div>

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
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
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
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
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
            <!-- Navbar End -->

            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-2">
                    <div class="row">
                        <div class="col-12 col-sm-3 text-center text-sm-start">
                            <div class="navbar-nav align-items-center ms-auto">
                                <a href="mobile.php"><i</i>Mobiles</a>

                            </div>
                        </div><div class="col-12 col-sm-3 text-center text-sm-start">
                            <div class="navbar-nav align-items-center ms-auto">
                                <a href="leptop.php"><i</i>Laptops</a>
                            </div>
                        </div>
                        <div class="col-12 col-sm-3 text-center text-sm-start">
                            <div class="navbar-nav align-items-center ms-auto">
                                <a href="tv.php"><i</i>TV</a>

                            </div>
                        </div>
                        <div class="col-12 col-sm-3 text-center text-sm-start">
                            <div class="navbar-nav align-items-center ms-auto">
                                <a href="audio.php"><i</i>Headphones</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--order -->
            <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Details</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Country</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Pincode</th>
                                            <th>Flate</th>
                                            <th>Area</th>
                                            <th>Landmark</th>
                                            <th>Town</th>
                                            <th>State</th>
                                            <th>Payment</th>
                                            <th>ProductId</th>
                                            <?php
                                    $con=mysqli_connect("localhost","root","","rjelectronic");
                                    $q="select * from order1 where EmailId='".$_SESSION['name']."'";
                                    $r=mysqli_query($con,$q);
                                    $n=mysqli_num_rows($r);
                                    $a=1;
                                    while ($row=mysqli_fetch_assoc($r)) {
                              ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
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
                                        <?php 
                                            }
                                        ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

            <!--End order-->


                   
         <!-- Content End -->
         <?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","rjelectronic");
    $q="select * from mobile where id='$id'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
$a=1;
while ($row=mysqli_fetch_assoc($r)) {
?>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Summary</h6>
                        <img src="Admin/<?php echo $row["image"]; ?>" alt="" style="width: 450px; height: 300px;">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"><?php echo $row["brand"] ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <th scope="row">Id : <?php echo $row["id"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Model Name : <?php echo $row["model"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Network Service Provider : <?php echo $row["network"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">OS : <?php echo $row["os"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Cellular Technology : <?php echo $row["cellular"] ?></th>
                                        
                                    </tr> <tr>
                                        <th scope="row">Colour : <?php echo $row["colour"] ?></th>
                                        
                                    </tr> <tr>
                                        <th scope="row">RAM : <?php echo $row["ram"] ?></th>
                                        
                                    </tr> <tr>
                                        <th scope="row">Storage : <?php echo $row["storage"] ?></th>
                                        
                                    </tr> <tr>
                                        <th scope="row">About this item : <?php echo $row["about"] ?></th>
                                        
                                    </tr> <tr>
                                        <th scope="row">Price : <?php echo $row["price"] ?></th>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php
}
    ?>

<!-- start laptop -->
<?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","rjelectronic");
    $q="select * from laptop where id='$id'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
$a=1;
while ($row=mysqli_fetch_assoc($r)) {
?>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Summary</h6>
                        <img src="Admin/<?php echo $row["image"]; ?>" alt="" style="width: 450px; height: 300px;">

                            <table class="table">
                            <thead>
                                    <tr>
                                        <th scope="col"><?php echo $row["brand"] ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <th scope="row">Id : <?php echo $row["id"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Model : <?php echo $row["model"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Colour : <?php echo $row["colour"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Screen Size : <?php echo $row["screenSize"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">CPU Model : <?php echo $row["cpu"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">RAM Memory Installed Size : <?php echo $row["ram"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Operating System : <?php echo $row["operatingSystem"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Generation : <?php echo $row["generation"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Special Feature : <?php echo $row["specialFeature"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Graphics Card Description : <?php echo $row["graphicsCard"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Windows : <?php echo $row["windows"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Storage : <?php echo $row["storage"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">SSD OR HDD : <?php echo $row["ssdORhdd"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Price : <?php echo $row["price"] ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php
}
    ?>


<!-- end laptop -->
<!--start tv -->
<?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","rjelectronic");
    $q="select * from tv1 where id='$id'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
$a=1;
while ($row=mysqli_fetch_assoc($r)) {
?>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Summary</h6>
                        <img src="Admin/<?php echo $row["image"]; ?>" alt="" style="width: 450px; height: 300px;">

                            <table class="table">
                            <thead>
                                    <tr>
                                        <th scope="col"><?php echo $row["brand"] ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <th scope="row">Id : <?php echo $row["id"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Model Name : <?php echo $row["model"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Screen  Size : <?php echo $row["screen"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Supported Internet Services : <?php echo $row["internet"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Display Technology : <?php echo $row["display"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Dimensions : <?php echo $row["product"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Resolution : <?php echo $row["resolution"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Refresh Rate : <?php echo $row["refresh"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Special Feature : <?php echo $row["feature"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mounting Hardware : <?php echo $row["hardware"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Connectore Type : <?php echo $row["connector"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Price : <?php echo $row["price"] ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php
}
    ?>



<!-- end tv -->
<!-- start audio -->
<?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","rjelectronic");
    $q="select * from audio where id='$id'";
$r=mysqli_query($con,$q);
$n=mysqli_num_rows($r);
$a=1;
while ($row=mysqli_fetch_assoc($r)) {
?>

                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Order Summary</h6>
                        <img src="Admin/<?php echo $row["image"]; ?>" alt="" style="width: 450px; height: 300px;">

                            <table class="table">
                            <thead>
                                    <tr>
                                        <th scope="col"><?php echo $row["brand"] ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Model Name : <?php echo $row["model"] ?></th>
                                    
                                    </tr>
                                    <tr>
                                        <th scope="row">Colour : <?php echo $row["colour"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Headphones Form Factor : <?php echo $row["factor"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Connector Type : <?php echo $row["connector"] ?></th>
                                    </tr>  
                                    <tr>
                                        <th scope="row">Price : <?php echo $row["price"] ?></th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
<?php
}
    ?>



<!-- end audio -->


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