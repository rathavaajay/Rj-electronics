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
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"></i>Rj Electronics</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                  
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Add Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="mobile.php" class="dropdown-item">Mobile</a>
                            <a href="leptop.php" class="dropdown-item active">Leptop</a>
                            <a href="tv.php" class="dropdown-item">T.V.</a>
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
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            
            <!-- Navbar End -->

            <?php 
  	if(isset($_POST["ok"]))
    {
        $conn=mysqli_connect("localhost","root","","rjelectronic");
	  $t=$_FILES["photo"]["name"];
	  if (file_exists("upload/".$_FILES["photo"]["name"])){	
		$rand_name = md5(time());
		$rand_name=rand(0,999999999);
		$pic=$rand_name;
		$pic="upload/".$rand_name.$_FILES["photo"]["name"];
		move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
	}
	else{
	  $pic="upload/".$_FILES["photo"]["name"];		
	  move_uploaded_file($_FILES['photo']['tmp_name'],$pic);
			  }
		    $query="insert into tv(brand,model,screen,suppoertedInternet,display,dimensions,resolution,refreashRate,specialFeature,
            mountingHardware,connectorType,price,image)
             values('".$_POST["Brand"]."','".$_POST["Model"]."','".$_POST["Screen"]."','".$_POST["Supported"]."',
             ".$_POST["Display"]."','".$_POST["Product"]."','".$_POST["Resolution"]."','".$_POST["Refresh"]."',
             '".$_POST["Special"]."','".$_POST["Mounting"]."','".$_POST["Connectore"]."','".$_POST["Price"]."','$pic')";
				$result= mysqli_query($conn,$query);
					if($result)
					{
						echo"<script>alert('Uploaded Sucessfully..')</script>";
					}
					else {
						echo"<script>alert(' Not Uploaded due to some technical issue')</script>";
					}
    }
?>
            <!-- Other Elements Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add New T.V.</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Brand Name</label>
                                    <input type="text" name="Brand" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Model Name</label>
                                    <input type="text" name="Model" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Screen Size</label>
                                    <input type="text" name="Screen" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Supported Internet Services</label>
                                    <input type="text" name="Supported" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Display Technology</label>
                                    <input type="text" name="Display" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Product Dimensions</label>
                                    <input type="text" name="Product" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Resolution</label>
                                    <input type="text" name="Resolution" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Refresh Rate</label>
                                    <input type="text" name="Refresh" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Special Feature</label>
                                    <input type="text" name="Special" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mounting Hardware</label>
                                    <input type="text" name="Mounting" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Connector Type</label>
                                    <input type="text" name="Connectore" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Price</label>
                                    <input type="text" name="Price" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" name="Image" class="form-label">Main Image</label>
                                    <input class="form-control" type="file" name="photo">
                                </div>
                                <button type="submit" name="ok" class="btn btn-primary">Add</button>
                            </form>
                        </div>
                    </div>
            <!-- Other Elements End -->


            <!-- Footer Start -->
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