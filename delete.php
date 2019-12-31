<?php
$deleteid=$_GET["id"];
$con =mysqli_connect("localhost", "root", "root0", "test_db");
$result =mysqli_query($con, "DELETE  FROM `student` WHERE id=$deleteid");
header("location:sqlconnectreal.php");

 ?>
