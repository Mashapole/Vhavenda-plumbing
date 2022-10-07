<?php
session_start();
require ("../DBConn.php");


    $bookID = $_GET['bookID'];
	if(isset($_POST['btnDonate']))
	{
		$title = trim($_POST['book_tittle']);
		$title = mysqli_real_escape_string($connect, $title);
		
		$itemCost = trim($_POST['itemCost']);
		$itemCost = mysqli_real_escape_string($connect, $itemCost);

		$Quantity = trim($_POST['Quantity']);
		$Quantity = mysqli_real_escape_string($connect, $Quantity);
		
		$description = trim($_POST['txt_subject']);
		$description = mysqli_real_escape_string($connect, $description);
		
		$itemSellPrice = trim($_POST['itemSellPrice']);
		$itemSellPrice = mysqli_real_escape_string($connect, $itemSellPrice);
	
		if(isset($_FILES['image']) && $_FILES['image']['name'] != "")
		{
			$image = $_FILES['image']['name'];
			$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
			$uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "../uploads/images/";
			$uploadDirectory .= $image;
			move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
		}
		$getStudent=0;
		//Book_Id,Tittle,ISBN,author_name,Description,Image,Publisher,Student_Number
		$query = " UPDATE tbl_item SET Item_Name = '".$title."', Description='".$description."', Cost_Price='".$itemCost."', Quantity='".$Quantity."', Sell_Price='".$itemSellPrice."', Image='".$image."' WHERE ItemID='".$bookID."'";
		$result = mysqli_query($connect, $query);
		
		if(!$result)
		{
			echo "The Caught Error" . mysqli_error($connect);
			exit;
		} else 
		{
			echo '<script>alert("The Book Is Being Updated")</script>';
			echo '<script>window.location="../Admin/HomeAdmin.php"</script>';
		}
	}

?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Add Book</title>
<style>
body {
  margin: 0;
  font-family: copperplate Gothic bold ;
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
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=number]
{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: black;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  width: 30%;
  cursor: pointer;
  float: left;
}

input[type=reset] {
  background-color: black;
  color: white;
  width: 50%;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}
input[type=submit]:hover {
  background-color: white;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
table
 {
  width: 100%;
}
</style>
</head>
<body>

<!-- Top navigation -->
<div class="topnav">


 <div class="topnav-centered">
  <a href="../Admin/Add_book.php" >Add Book</a></a>
	
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="../Admin/HomeAdmin.php" >Home</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
  <a href="../Admin/Logout.php">Sign Out</a>
  </div>
  
</div>
<?php

  $query = "SELECT * FROM tbl_item WHERE ItemID = '$bookID'";
  
  $result = mysqli_query($connect, $query);
  
  if(!$result)
  {
    echo "Error Says:" . mysqli_error($connect);
    exit;
  }

  $row = mysqli_fetch_assoc($result);
  
  if(!$row)
  {
    echo "Empty Details";
    exit;
  }
?>
 
 <h1 align="center">Update Book</h1>
 
 <div class="container">
  <form action="#" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="book_tittle">Book Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="book_tittle" name="book_tittle" value="<?php echo $row['Item_Name'];?>" placeholder="Programming Logic And Design">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="itemCost">Book Cost Price</label>
      </div>
      <div class="col-75">
        <input type="number" id="itemCost" name="itemCost" value="<?php echo $row['Cost_Price'];?>" placeholder="70">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
		<label for="Quantity">Book Quantity</label>
      </div>
      <div class="col-75">
              <input type="number" id="Quantity" name="Quantity" value="<?php echo $row['Quantity'];?>" placeholder="8">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Book Description</label>
      </div>
      <div class="col-75">
        <textarea id="txt_subject" name="txt_subject" placeholder="Write something.." style="height:200px"> <?php echo $row['Description']; ?></textarea>
     </div>
    </div>
	 <div class="row">
      <div class="col-25">
		<label for="image">Book Image</label>
      </div>
      <div class="col-75">
        <input type="file" name="image">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="publish">Book Sell Price</label>
      </div>
      <div class="col-75">
       <input type="number" name="itemSellPrice"  value="<?php echo $row['Sell_Price'];?>" required>
      </div>
    </div>
	<br><br>
	
	<table>
  <tr>
    <th><input type="submit" name="btnDonate" value="Update Book"></th>
    <th><input type="reset" value="Reset"></th>
  </tr>
  <table>
  </form>
</div>



</body>
</html>
