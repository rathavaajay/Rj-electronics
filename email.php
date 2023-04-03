<?php
session_start();
if($_SESSION['name']);
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="user-setting.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <center>
        <h1 class="h3 mb-3">Change your email address</h1>
        <div class="col-md-7 col-xl-6">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">Current email address : <?php echo $_SESSION['name']?>
            
Enter the new email address you would like to associate with your account below. We will send a One Time Password (OTP) to that address.
</h6>
                            
                            <div class="card-body">
                                <form name="ok" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <?php
                                                $con = mysqli_connect("localhost","root","","rjelectronic");
                                                if(isset($_POST["ok"]))
                                                {
                                                    $q="update signup set email='".$_POST['Email']."' where email='".$_SESSION['name']."'";
                                                    $res=mysqli_query($con,$q);
                                                    if($res)
                                                    {
                                                        echo"<script>alert('You need to login again.....')</script>";
                                                        echo"<script>window.location='signin.php'</script>";

                                                    }
                                                    else{
                                                        echo"<script>alert('Something going wrong ! ')</script>";
                                                    }
                                                }
                                                ?>
                                            <div class="form-group">
                                              
                                                <label for="inputUsername">New email address</label>
                                                <input type="text" name="Email"class="form-control" id="inputUsername">
                                            
                                            <button type="submit" name="ok" class="btn btn-warning">Save Changes</button>
                                            </form>

                                        </div>
        
                                    </div>
                                </form>
                            </div>
                        </div>
</center>
</body>
</html>
<?php
}

?>