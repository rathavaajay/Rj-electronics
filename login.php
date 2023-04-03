<?php
 session_start();
 if(isset($_post['ok']))
 {
     $con=mysqli_connect("localhost","root","","rjelectronic");
     $q="select * from signup where email='".$_POST['Email']."' and password='".$_POST['pass']."'";
     $result=mysqli_query($con,$q);
     $count=mysqli_num_rows($result);
     if($count==1)
     {
         $_SESSION['user']=$_POST['Email'];
         echo "<script>alert('Login')</script>";
         echo "<script>window.location='index.php'</script>";
     }
     else{
         echo "<script>alert('password is wrong...')</script>";
     }

 }
?>