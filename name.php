<?php
session_start();
if($_SESSION['name'])
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
        <h1 class="h3 mb-3">Change Your Name</h1>
        <div class="col-md-7 col-xl-6">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">If you want to change the name associated with your Amazon customer account, you may do so below. Be sure to click the Save Changes button when you are done.
</h6>
                            
                            <div class="card-body">
                                <form name="ok" method="post">
                                   
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <?php
                                                $con = mysqli_connect("localhost","root","","rjelectronic");
                                                if(isset($_POST["ok"]))
                                                {
                                                    $q="update signup set name='".$_POST['Name']."' where email='".$_SESSION['name']."'";
                                                    $res=mysqli_query($con,$q);
                                                    if($res)
                                                    {
                                                        echo"<script>alert('updated')</script>";
                                                        echo"<script>window.location='account.php'</script>";

                                                    }
                                                    else{
                                                        echo"<script>alert('wrong')</script>";
                                                    }
                                                }
                                                ?>

                                                <label for="inputUsername">New Name </label>
                                                <input type="text" name="Name" class="form-control" id="inputUsername" placeholder="Username">
                                            
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