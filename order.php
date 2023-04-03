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
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                        <a href="account.php" class="dropdown-item">Your Account</a>
                            <a href="corder.php" class="dropdown-item">Your Orders</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>   </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <!-- Header Start-->
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
            <!-- Header End-->


            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add a address</h6>
                            <form method="POST">
                            <?php 
  	if(isset($_POST["ok"]))
    {
        $conn=mysqli_connect("localhost","root","","rjelectronic");
		    $query="INSERT INTO `order1`(`name`, `mobile`, `pincode`, `flate`, `area`, `landmark`, `town`, `state`, `payment`) 
            VALUES ('".$_POST["Name"]."','".$_POST["Mobile"]."','".$_POST["Pincode"]."','".$_POST["Flate"]."','".$_POST["Area"]."',
            '".$_POST["Landmark"]."','".$_POST["Town"]."','".$_POST["State"]."','".$_POST["Payment"]."')";
				$result= mysqli_query($conn,$query);
					if($result)
					{
						echo"<script>alert('uploaded Sucessfully..')</script>";
					}
					else {
						echo"<script>alert(' Not Uploaded due to some technical issue')</script>";
					}
    }
?>
                            <div class="form-floating mb-3">
                                    <select name="Country" class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select Country/Region</option>
                                        <option>India</option>
                                    </select>
                                    <label for="floatingSelect">Select Country/Region</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="Name"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mobile Number</label>
                                    <input type="text" name="Number"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" name="Pincode"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Flat, House no., Building, Company, Apartment</label>
                                    <input type="text" name="House"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Area, Street, Sector, Village</label>
                                    <input type="text" name="Area"class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Landmark</label>
                                    <input type="text" name="Landmark" placeholder="E.g. near apolo hospital" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Town/City</label>
                                    <input type="text" name="City" placeholder="Rajkot" class="form-control">
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="State"class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Select State</option>
                                        <option>Gujrat</option>
                                        <option>GOA</option>
                                        <option>Delhi</option>
                                        <option>Assam</option>
                                        <option>Haryana</option>
                                        <option>Jammu & Kashmir</option>
                                        <option>Madhya pradesh</option>
                                        <option>Punjab</option>
                                    </select>
                                    <label for="floatingSelect">Select State</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select name="Method"class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option selected>Payment method</option>
                                        <option>Cash on delivery</option>
                                        <option>Credit card</option>
                                        <option>Debit card</option>
                                        <option>Net Banking</option>
                                    </select>
                                    <label for="floatingSelect">Select Payment Method</label>
                                </div>
                                <button type="submit" name="OK" class="btn btn-primary">Continue</button>
                            </form>
                        </div>
                    </div>
<!-- mobile start -->

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

    <!--mobile end -->

    <!--leptop start -->
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
    <!--leptop end-->

    <!--tv start -->
    <?php
    $id=$_REQUEST["id"];
    $con=mysqli_connect("localhost","root","","rjelectronic");
    $q="select * from tv where id='$id'";
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
                                        <th scope="row">Screen  Size : <?php echo $row["storage"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Supported Internet Services : <?php echo $row["price"] ?></th>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">Display Technology : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Product Dimensions : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Resolution : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Refresh Rate : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Special Feature : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mounting Hardware : <?php echo $row["price"] ?></th>
                                    </tr>
                                    <tr>
                                        <th scope="row">Connectore Type : <?php echo $row["price"] ?></th>
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

    <!--headphone start-->
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

    <!--headphone end-->
    <!--tv end -->
                </div>
            </div>
           
            <!-- Footer End -->

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