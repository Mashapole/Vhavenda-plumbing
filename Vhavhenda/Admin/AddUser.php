<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>index</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/e26e4799e8.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="Hover-master/css/hover-min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
.frm
		{
			justify-content: center;
			display:flex;
			margin-top: 125px;
            color: white;
			
		}

		form
		{
			width: 400px;
			height: 20px;
		}
		h2
		{
			text-align: center;
			font-family: "Courier New",monospace;
		}
		.forgotten
		{
			float: right;
		}
		.forgotten2
		{
		
			text-align: center;
		}
       
</style>
</head>
<body>

<div style="background-image:url('IMAGES/ICON.PNG'); background-size: cover; min-height: 115vh;width: 100%;overflow: hidden;position: relative;   background-repeat: no-repeat;">
 

    <br><br>
    <div class="frm">
        <form name="getEr" id="getEr"  action="RegisterAction.php" method="get" enctype="multipart/form-data">
            <h2 >Add Here</h2>
            <br>
            <div class="form-group">
                <input type="text" class="form-control" name="Name" id="Name" placeholder="First Name" required="required" style="width: 100%;">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="Surname" placeholder="Last Name" required="required" style="width: 100%;">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email" required="required" style="width: 100%;">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="Password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="save" style="border-radius: 30px;" class="btn btn-success btn-lg btn-block">Register User</button>
            </div>
            <br>
            <br>

        </form>
</div>
</div>
