<?php
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$con =mysqli_connect("localhost", "root", "root0", "test_db");
$result =mysqli_query($con, "INSERT INTO `student`(`fname`, `lname`, `gender`, `address`) VALUES ('$fname','$lname','$gender','$address')");
header("location:sqlconnectreal.php");
 ?>
