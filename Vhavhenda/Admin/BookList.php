<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Available Books</title>
<style>
body
 {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav 
{
  position: fixed;
  overflow: hidden;
  width:100%;
  background-color: #333;
  top: 0;
  left: 0;
}

.topnav a 
{
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
  background-color: #04AA6D;
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
img
{
	opacity: 0.5;
}

img:hover
{
	  opacity:1.5;
	 -webkit-transform: scaleX(-1);
	 transform: scaleX(-1);
}

.button 
{
  border: none;
  padding: 8px;
  color: white;
  background-color: #24262b;
  margin-left:-30px;
  text-align: center;
  cursor: pointer;
  width: 100%;
}


.button:hover {
  background-color: #555;
}

input[type=number]
{
	  width: 100%;
	  margin-left:-30px;
}

#shopping-cart {
	margin: 40px;
}

#product-grid {
	margin: 40px;
}

#shopping-cart table {
	width: 100%;
	background-color: #F0F0F0;
}

#shopping-cart table td {
	background-color: #FFFFFF;
}

.txt-heading {
	color: #211a1a;
	border-bottom: 1px solid #E0E0E0;
	overflow: auto;
}

#btnEmpty {
	background-color: #ffffff;
	border: #d00000 1px solid;
	padding: 5px 10px;
	color: #d00000;
	float: right;
	text-decoration: none;
	border-radius: 3px;
	margin: 10px 0px;
}

#product-grid .txt-heading {
	margin-bottom: 18px;
}

.product-item {
	float: left;
	background: #ffffff;
	margin: 30px 30px 0px 0px;
	border: #E0E0E0 1px solid;
}
.product-image {
	height: 290px;
	width: 360px;
	background-color: #FFF;
}
img
{
	margin-top: 20px;
	margin-left: 40px;
	
}

.clear-float {
	clear: both;
}

.demo-input-box {
	border-radius: 2px;
	border: #CCC 1px solid;
	padding: 2px 1px;
}

.tbl-cart {
	font-size: 0.9em;
}

.tbl-cart th {
	font-weight: normal;
}

.product-title {
	margin-bottom: 10px;
}

.product-price {
	float:left;
}

.cart-action {
	float: right;
}

.product-quantity {
    padding: 5px 10px;
    border-radius: 3px;
    border: #E0E0E0 1px solid;
}

.product-tile-footer {
	margin-top: -35px;
    padding: 5px 5px 15px 50px;
    overflow: auto;

}

.cart-item-image {
	width: 30px;
    height: 30px;
    border-radius: 50%;
    border: #E0E0E0 1px solid;
    padding: 5px;
    vertical-align: middle;
    margin-right: 15px;
}
.no-records {
	text-align: center;
	clear: both;
	margin: 38px 0px;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="topnav">


  
  <!-- Left-aligned links (default) -->
  <a href="../Admin/HomeAdmin.php">Home</a>
  <a href="../Admin/Add_book.php" >Add Book</a>

  
  <!-- Right-aligned links -->
  <div class="topnav-right">
   <a href="#" class="active">Catalog</a>
   <a href="../Admin/Logout.php">Sign Out</a>
  </div>
  
</div>
<br><br><br><br>
 <h1 align="center">Book Catalog</h1>

 <div id="product-grid">

	<div class="txt-heading">Products</div>
	<?php
	include "../DBConn.php";
	
	$query= "SELECT * FROM tbl_item ORDER By ItemID ASC";
	$result = mysqli_query($connect, $query);
	
	 if(mysqli_num_rows($result)>0)
	 { 
		while($row = mysqli_fetch_array($result))
		{
	?>
		<div class="product-item" style="background-color: white;">
		
		<form method="post" action="Add_Cart.php?action=add&id=<?php echo $row["ItemID"];?>">
			
	
			<div class="product-image">
			
			<a class="change" href="#"><img src="../uploads/images/<?php echo $row['Image']; ?> " width= "70%" height="70%" class="image"></a>
			
			</div>
		
			<div class="product-tile-footer">
			<div class="product-title"><?php echo  $row["Item_Name"]; ?></div>
			<div class="product-price"><?php echo "R". $row["Sell_Price"]; ?></div>
            <br>
			<input type="hidden" class="product-quantity" name="quantity" min="1" value="1" max="10"/>
			<br>
	        <a href="../Admin/Delete.php?bookID=<?php echo $row['ItemID']; ?>">Delete Book</a>
			<br><br>
			<a href="../Admin/UpdateBook.php?bookID=<?php echo $row['ItemID']; ?>">Update Book</a>
			</div>
			
			
			</form>
		</div>
	
	
	
	<?php
		}
	}
	?>
</div>

</body>
</html>
