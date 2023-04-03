<?php
session_start();
if($_SESSION['name'] && $_SESSION['pass'])
{
?>
<?php
        $id=$_REQUEST["id"];
        $con=mysqli_connect("localhost","root","","rjelectronic");
        $q="delete from mobile where id='$id'";
        $r=mysqli_query($con,$q);
        if($r>0)
        {
            echo "<script>alert('Deleted successfully')</script>";
            echo "<script>window.location='index.php'</script>";
        }
        else
        {
            echo "<script>alert('Your record is not deleted due to some technical issue')</script>";
        }
?>
<?php
}
else{
    echo "<script>window.location='login.php'</script>";
}
?>