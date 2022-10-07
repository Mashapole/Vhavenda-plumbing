<?php
require ("../DBConn.php");
session_start();



if(isset($_GET['save']))
{
	
					$bookID = $_GET['bookID'];
				    $insert="Update tbluser SET FName='".$_GET['Name']."', LName='".$_GET['Surname']."', Email='".$_GET['email']."', Password='".md5($_GET['Password'])."' Where ID='".$bookID."'";
					  //passing to the action 
					  $getAction=mysqli_query($connect,$insert);
					  
					  if($getAction==true)
					  {
                        echo "<script>alert('User is details Updated.')</script>";
                        echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
                       
					  }
					  else
					  {
                        echo '<script>alert("SOMETHING WENT WRONG")</script>';
                        echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
					
					  }
}


?>