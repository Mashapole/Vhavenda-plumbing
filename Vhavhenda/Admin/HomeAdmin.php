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
  font-family: Century Schoolbooks;
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


session_start();
require ("../Connection/DBConn.php");
?>
<!-- Top navigation -->
<div class="topnav">

<?php
  
  
  $select="Select* from tbluser";
  $select2="select* from tbl_item";
  
   $getResult=mysqli_query($connect,$select);
   $getResult2=mysqli_query($connect,$select2);
   
   
    $row = mysqli_num_rows($getResult);
    $row2 = mysqli_num_rows($getResult2);
  ?>
  
  <!-- Left-aligned links (default) -->
  <a href="../Admin/HomeAdmin.php" class="active">Home</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
  <a href="../Admin/Logout.php">Sign Out</a>
  </div>
</div>

<br><br>

<div align="center">
           <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--green">
                                <h2 class="number"><?php echo    $row;?></h2>
                                <span class="desc">Total Number Of Pictures</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                            </div>
                        </div>
						<div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--red">
                                <h2 class="number"><?php echo  $row2;?></h2>
                                <span class="desc">Total Number Of Videos</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--orange">
                                <h2 class="number"><?php echo  $row2;?></h2>
                                <span class="desc">Total Number Of Users</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php echo  $row2;?></h2>
                                <span class="desc">Total Number of Subscribers</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
						<div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php echo  $row2;?></h2>
                                <span class="desc">Total Number of Emails</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>
												<div class="col-md-6 col-lg-3">
                            <div class="statistic__item statistic__item--blue">
                                <h2 class="number"><?php echo  $row2;?></h2>
                                <span class="desc">Total Number of Testimonial</span>
                                <div class="icon">
                                    <i class="zmdi zmdi-shopping-cart"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
      </div>

 

</body>
</html>
