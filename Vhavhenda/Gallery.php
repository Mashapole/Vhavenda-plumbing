<html>
<?php
require ("Connection/DBConn.php");
?>
<title>Gallery</title>
<head>

<style>

.images
{
	height: 250px;
	width: 100%;
}
.portfolio-item
{
	padding: 20px;
}
@media screen and (max-width:800px)
{
	.images
	{
		width: 90%;
		height: 350px;
		display: block;
		margin-left: auto;
		margin-right: auto;
	}
}

.images:hover
{
	opacity: 0.5;
	box-shadow:
   -webkit-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
    -moz-box-shadow: 10px 10px 99px 6px rgba(76,201,240,1);
      box-shadow: 5px 10px gray;
}
</style>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

</head>

<body>



<script>

         $('.portfolio-menu ul li').click(function(){
         	$('.portfolio-menu ul li').removeClass('active');
         	$(this).addClass('active');
         	
         	var selector = $(this).attr('data-filter');
         	$('.portfolio-item').isotope({
         		filter:selector
         	});
         	return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
         	enabled : true
         }
         });
         });
</script>
</body>
</html>