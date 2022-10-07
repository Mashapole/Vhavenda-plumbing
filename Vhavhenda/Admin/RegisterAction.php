<?php
require ("../DBConn.php");
session_start();

$getSelection="Select* from tbluser";
			  
$SendResults=mysqli_query($connect,$getSelection);
$getRows = mysqli_num_rows($SendResults);

 if($getRows==0)
 {
     $pass="INSERT INTO `tbluser` (`ID`, `FName`, `LName`, `Email`, `StudentNumber`, `Password`) VALUES (NULL, '', '', '', '20220000', '')";
     $mes=mysqli_query($connect,$pass);
         
 }


if(isset($_GET['save']))
{
    $calculate=0;
$error=0;

if($error==0)
{

    $select= "Select* from tbluser Order by ID DESC LIMIT 1";
            	$result=mysqli_query($connect,$select);
                $fetc=mysqli_fetch_assoc($result);
            
            	if($result==true)
            	{
            	    $calculate=$fetc['StudentNumber']+1;
					
				}
	//this statement returns false, meaning the connection is not working
	if($connect==False)
	{
		print "the is something wrong with the connection";
	
	}
	// if the statement is not false then the following sytement returns true
	else
	{
		//the name of database
	  $db='bookstore';
	  //passing the database to mysql
	  $getResult=mysqli_select_db($connect,$db);
	  
	  //this return unfound database
	  if($getResult==False)
	  {
		  print"the database is not found";
	  }
	  //this block of code below returns true 
	  else
	  {
		  
		  if($error==0)
		  {
			  //this select from table
			  $state="select* from  tbluser where Email='".$_GET['email']."'";
			  
			  //passing query to actions
			  $getResult=mysqli_query($connect,$state);
			  
			  if($getResult==true)
			  {
				  //this is getting row
				  $row=mysqli_fetch_row($getResult);
				  
				  //if the row in table index 0 is null, then the table is empty
				  if($row[0]>0)
				  {
                    echo '<script>alert("THE EMAIL ENTERED IS ALREADY EXISTING, PLEASE RE_ENTER ANOTHER ONE!!!")</script>';
                    echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
					
				  }
				  else
				  {
					  //this statement is inserting to database's table
					  $insert="insert into tbluser (FName,LName,Email, StudentNumber,	Password) values('".$_GET['Name']."','".$_GET['Surname']."','".$_GET['email']."','".$calculate."','".md5($_GET['Password'])."')";
				      
					  //passing to the action 
					  $getAction=mysqli_query($connect,$insert);
					  
					  if($getAction==true)
					  {
                        echo "<script>alert('User is registered,student Number is: $calculate')</script>";
                        echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
                       
					  }
					  else
					  {
                        echo '<script>alert("SOMETHING WENT WRONG")</script>';
                        echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
					
					  }
				  
				  }
					  
			  }
		  }
		  
	  

	  
	}
}

}

}




?>

