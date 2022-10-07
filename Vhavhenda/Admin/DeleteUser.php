<?php

 session_start();
 include "../DBConn.php";

 $bookID = $_GET['bookID'];
 $query = "DELETE FROM tbluser WHERE ID ='".$bookID."'";
 
  $result = mysqli_query($connect, $query);
  
  if(!$result)
  {
    echo "Error Says:" . mysqli_error($connect);
    exit;
  }
  else
  {
	   echo '<script>alert("The user Is Deleted")</script>';
	   echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
  }
?>