<?php

include "../DBConn.php";

$ema="admin";
$pass="12345";
$w="INSERT INTO tbladmin(Admin,Password) VALUES ('".$ema."','".md5($pass)."' )";
$getResult=mysqli_query($connect, $w);
?>