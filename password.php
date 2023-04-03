<?php
session_start();
if($_SESSION['name'] && $_SESSION['pass'])
{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" href="user-setting.html">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>
<body>
    <center>
        <h1 class="h3 mb-3">Change Password</h1>
        <div class="col-md-7 col-xl-6">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h6 class="card-title mb-0">
</h6>
                            
                            <div class="card-body">
                                <form name="f1" method="post">
                                    <div class="row">
                                        <div class="col-md-8">
                                        <?php
					$con=mysqli_connect("localhost","root","","rjelectronic");
					if(isset($_POST["ok"]))
					{
						$new=$_POST['newpass'];
						$cn=$_POST['confirmpass'];
						if($new==$cn)
						{
							$q = "update signup set password='".$_POST['confirmpass']."' where name='".$_SESSION['name']."'";
							$res = mysqli_query($con,$q);
							if($res)
							{
								echo "<scirpt>alert('Updated')</script>";
								echo "<script>window.location='index.php'</script>";
							}
							else
							{
							echo "<script>alert('something went wrong')</script>";
							}
						}
						else
						{
							echo "<script>alert('new & confirm password does not match')</script>";
						}
					
					}
					
					
					
					$q="select * from signup where name='".$_SESSION['name']."'";
					$re = mysqli_query($con,$q);
					$row=mysqli_fetch_array($re);
				?>
                                            <div class="form-group">
                                            <h6 class="card-title mb-0">
                                            Use the form below to change the password for your RJ Electronic account
                                            <?php echo $_SESSION['name'] ?>
                                                        </h6>
                                                        <br>
        

                                                <label for="inputUsername">New password</label>
                                                <input type="text" name="newpass" class="form-control" id="inputUsername">
                                            
                                                <label for="inputUsername">Reenter new password</label>
                                                <input type="text" name="confirmpass" class="form-control" id="inputUsername">
                                                <tr>
				<td align="center" valign="top">
				<input type="reset" name="rst" value="RESET">
				</td>
				<td align="center" valign="top">
				<input type="submit" name="ok" value="Change Password">
				</td>
			</tr>                                        </div>
        
                                    </div>
                                </form>
                            </div>
                        </div>
</center>
</body>
</html>
<?php
}
else{
    echo"<script>window.location='signin.php'</script>";
}
?>