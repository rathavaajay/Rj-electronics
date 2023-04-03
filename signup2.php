<?php
            if(isset($_POST["ok"]))
            {
                $con=mysqli_connect("localhost","root","","rjelectronic");
                $q="insert into signup(id,name,email,number,password)values('null','".$_POST['uname']."',
                '".$_POST['email']."','".$_POST['number']."','".$_POST['pass']."')";
                $result=mysqli_query($con,$q);
                if($result)
                {
                    echo"<script>alert('You are successfully registered....')</script>";
                }
                else{
                    echo"<script>alert('something going wrong.....')</script>";
                }

            }
            ?>
