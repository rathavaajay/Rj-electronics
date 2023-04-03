<?php
session_start();
if($_SESSION['name'])
{
?>
<html>

<head>
    <link rel="stylesheet" href="user-setting.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>

<body>

       <!-- First NAVBAR-->
       <nav class="navbar navbar-expand-lg py-3 sticky-top navbar-dark bg-light shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand">
            <!-- Logo Image -->
            <!-- Logo Text -->
          </a>
      
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
      
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
            <!-- <ul class="navbar-nav ml-auto">
              
              <li class="nav-item active bg-danger"><a href="#" class="nav-link">Log In <span class="sr-only"></span></a></li>
             &nbsp;     &nbsp;     &nbsp;     &nbsp;     &nbsp;
              <li class="nav-item active bg-danger"><a href="#" class="nav-link">Sign Up</a></li>
              
            </ul> -->   
          </div>
        </div>
      </nav>  
      
      <!-- End First NAVBAR-->

<!-- Start Second Navbar-->



    
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
<!-- End Second Navbar-->


    <div class="container p-0">
        <h1 class="h3 mb-3">User Settings</h1>
        <div class="row">
            <div class="col-md-5 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Settings</h5>
                    </div>
                    <div class="list-group list-group-flush" role="tablist">
                        <a class="list-group-item list-group-item-action " data-toggle="list" href="#account" role="tab"
                            aria-selected="false">
                            Account
                        </a>
                       
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications" role="tab"
                            aria-selected="false">
                            Notifications
                        </a>
                        
                        <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
                            Delete account
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-xl-8">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-actions float-right">
                                    <div class="dropdown show">
                                        <a href="#" data-toggle="dropdown" data-display="static">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-more-horizontal align-middle">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Private Informaton</h5>
                            </div>
                            <div class="card-body">
                                <form>
                                <?php
                        $con=mysqli_connect("localhost","root","","rjelectronic");
                        $q="select * from signup where email='".$_SESSION['name']."'";
                        $r=mysqli_query($con,$q);
                        while ($row=mysqli_fetch_assoc($r))
                          {
                ?>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                              
                                                <label for="inputUsername">Username : </label>
                                                <a  href="name.php">Edit</a>
                                                
                                                <input type="text" value="<?php echo $row['name']?>" class="form-control" id="inputUsername"
                                                    placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUsername">Email : </label>
                                                <a  href="email.php">Edit</a>
                                                <input type="text" value="<?php echo $row['email']?>" class="form-control" id="inputUsername"
                                                    placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUsername">Mobile Number : </label>
                                                <a  href="number.php">Edit</a>
                                                <input type="text" value="<?php echo $row['number']?>" class="form-control" id="inputUsername"
                                                    placeholder="Mobile Number">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputUsername">Password : </label>
                                                <a  href="password.php">Edit</a>
                                                <input type="text" value="<?php echo $row['password']?>" class="form-control" id="inputUsername"
                                                    placeholder="Password">
                                            </div>

                                        </div>
                                        <?php
                        }
                                        ?>

                                    
                                        <div class="col-md-4">
                                            <div class="text-center">
                                                <img alt="Andrew Jones"
                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                    class="rounded-circle img-responsive mt-2" width="128" height="128">
                                                <div class="mt-2">
                                                    <span class="btn btn-primary"><svg
                                                            class="svg-inline--fa fa-upload fa-w-16" aria-hidden="true"
                                                            data-prefix="fas" data-icon="upload" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                            data-fa-i2svg="">
                                                            <path fill="currentColor"
                                                                d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z">
                                                            </path>
                                                        </svg><!-- <i class="fas fa-upload"></i> --> Upload</span>
                                                </div>
                                                <small>For best results, use an image at least 128px by 128px in .jpg
                                                    format</small>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                  
                    <div class="tab-pane fade" id="password" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Password</h5>
                                <form name="ok" method="post">
                                <?php
                    $con=mysqli_connect("localhost","root","","rjelectronic");
                    if(isset($_POST["ok"]))
                    {
                      $n=$_POST['newpass'];
                      $c=$_POST['confirmpass'];
                      if($n==$c)
                      {
                        $q = "update signin set password='".$_POST['confirmpass']."' where email='".$_SESSION['name']."'";
                        $res = mysqli_query($con,$q);
                        if($res)
                        {
                          echo "<scirpt>alert('Updated')</script>";
                          header('location:index.php');
                        }
                        else
                        {
                        echo "<script>alert('wrong')</script>";
                        }
                      }
                      else
                      {
                        echo "<script>alert('new & confirm password does not match')</script>";
                      }
                    
                    }

                    ?>
                                   
                   
    <script type="text/javascript"></script>
</body>

</html>
<?php
  }
  
?>