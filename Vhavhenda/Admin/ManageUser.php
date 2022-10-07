
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin Home</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<style>
body 
{
  margin: 0;
  font-family:copperplate Gothic bold ;
}

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: blue;
  color: white;
}

.topnav-centered a {
  float: none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.topnav-right {
  float: right;
}

/* Responsive navigation menu (for mobile devices) */
@media screen and (max-width: 600px) {
  .topnav a, .topnav-right {
    float: none;
    display: block;
  }
  
  .topnav-centered a {
    position: relative;
    top: 0;
    left: 0;
    transform: none;
  }
}
 th, td 
 {
  padding: 15px;
}

/* ----- Statistic ----- */
.statistic {
    padding-top: 57px;
}

.statistic__item {
    border: 1px solid #e5e5e5;
    background: #fff;
    padding: 20px 30px;
    position: relative;
    min-height: 180px;
    overflow: hidden;
    margin-bottom: 40px;
}

@media (min-width: 992px) and (max-width: 1199px) {
    .statistic__item {
        padding: 20px 10px;
    }
}

.statistic__item h2 {
    font-size: 36px;
    font-weight: 300;
    color: #4272d7;
}

@media (min-width: 992px) and (max-width: 1199px) {
    .statistic__item h2 {
        font-size: 22px;
    }
}

.statistic__item .desc {
    font-size: 18px;
    text-transform: uppercase;
    font-weight: 300;
    color: rgba(128, 128, 128, 0.6);
}

@media (min-width: 992px) and (max-width: 1199px) {
    .statistic__item .desc {
        font-size: 13px;
    }
}

.statistic__item .icon {
    display: inline-block;
    position: absolute;
    bottom: -50px;
    right: -7px;
}

.statistic__item .icon i {
    font-size: 180px;
    color: #808080;
    opacity: .2;
    line-height: 1;
    vertical-align: baseline;
}

.statistic__item--green {
    background: #00b26f;
}

.statistic__item--orange {
    background: #ff8300;
}

.statistic__item--blue {
    background: #00b5e9;
}

.statistic__item--red {
    background: #fa4251;
}

/* ----- Statistic 2 ----- */
.statistic2 {
    padding-top: 50px;
}

.statistic2 .statistic__item {
    border: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    -webkit-box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.03);
    -moz-box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.03);
    box-shadow: 0px 10px 20px 0px rgba(0, 0, 0, 0.03);
}

.statistic2 .statistic__item h2 {
    color: #fff;
}

.statistic2 .statistic__item .desc {
    color: rgba(255, 255, 255, 0.6);
}
.min
{
	width: 50%;
	
}
</style>


</head>
<body>

<?php



require ("../DBConn.php");
?>
<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
	 <a href="../Admin/BookList.php">Catalog</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="../Admin/HomeAdmin.php">Home</a>
  <a href="../Admin/ManageUser.php" class="active">Manage User</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
  <a href="../Admin/Logout.php">Sign Out</a>
  </div>
</div>

<br><br>


<a class="btn btn-primary" href="../Admin/AddUser.php">Add User</a>
<br><br>
<table   class="table table-striped table-responsive">
			<tr>
										
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
											<th>Student Number</th>
											<th>Action</th>
											
											
								
            </tr>
			
			<?php 


						$sql = "SELECT* FROM tbluser Where ID!=1 ORDER BY ID ASC";
						$sendReq = mysqli_query($connect,$sql );
            
							if(mysqli_num_rows($sendReq) > 0)
							 {
							 while($row2 = mysqli_fetch_array($sendReq))
							 {
								 $cnt=1;
							 ?>
							
						
							  
							  
                                        <tr>
											<td class="center"><?php echo $row2["ID"]; ?></td> 
										    <td class="center"><?php echo $row2["FName"]; ?></td>                                      
                                            <td class="center"><?php echo $row2["LName"]; ?></td>
											<td class="center"><?php echo $row2["Email"]; ?></td>
											<td class="center"><?php echo $row2["StudentNumber"]; ?></td>
											 <th>
											<a href="../Admin/DeleteUser.php?bookID=<?php echo $row2['ID']; ?>">Delete User</a>
											<br>
											<a href="../Admin/UpdateUser.php?bookID=<?php echo $row2['ID']; ?>">Update User</a>
											<br>
										
										</th>
                                        </tr>                 
							 <?php  $cnt++;}?>
							   
                                </table>
                            </div>
							 <br>
							<?php }?>








 

</body>
</html>
