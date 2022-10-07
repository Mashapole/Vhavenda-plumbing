<?php
require ("Connection/DBConn.php");
?>
<!DOCTYPE html>
<html>

    <title>Home</title>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Call Styling script for Home page-->
    <link rel="stylesheet" href="Css/index.css" >

    <!--Icon Librirary-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--Fede libriary for buttons-->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  
  <!---->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!--Links for AOS Libriaries-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</head>

<body>

<div id="index">

<div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="#index">
                                <h1>Vhavenda</h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Location</h3>
                                        <p>Sekgoses</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>+27 818 327 069</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>vhavenda@example.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
</div>

<nav class="navbar navbar-expand-lg py-3 navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a href="#index" class="navbar-brand">
      <!-- Logo Image -->
      <i class='fas fa-toilet' style='font-size:54px'></i>
    </a>

    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li><a href="#index" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#team" class="nav-link">Our Team</a></li>
        <li class="nav-item"><a href="#services" class="nav-link">Our Services</a></li>
        <li class="nav-item"><a href="#ContactUs" class="nav-link">Contact Us</a></li>
        <li class="nav-item"><a href="#Gallery" class="nav-link">Our Work</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="index_content">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image:url('Images/background/back3.jpg'); background-size: cover; min-height: 90vh;width: 100%;overflow: hidden;position: relative;   background-repeat: no-repeat;">
       
        <div class="carousel_content">

          <h1>Welcome To Vhavenda Plumbing.</h1>
          <br>
          <h3>WE ARE YOUR PLUMBERS</h3>
          <p><h5>Leave the Drains to the experts. Don't sleep with leaking pipes or busted sewage pipes.<br></h5>
             <h6>Call the best, flush the rest, a good flush beats a full house. call Vhavenda Plumbers Now.</h6></p>
             <br>
          <div class="row">
               <div class="column">
                 <form>
                <button type="button" class="intouch w3-container w3-center w3-animate-left">Get In touch</button>
               </div>
               <div class="column">
                <button type="button" class="aboutus w3-container w3-center w3-animate-right" >About Us</button>
              </div>
              
          </div>

        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
<br>
<!--About Us content -->
<div class="content_Aboutus" id="AboutUs" style="min-height: 101vh;">

  <br>
  <h1 data-aos="zoom-in">Know About Us</h1>
  <div class="Inner-lines" data-aos="zoom-in">
    <div class="Inner-row">
      <div class="Inner-Col">
      <hr class="Inner-line" style="Height: 2px;">
      </div>
      <div class="Inner-Col">
      <i class='fas fa-tools' style='font-size:28px; color: whitesmoke;'></i>
      </div>
      <div class="Inner-Col">
      <hr class="Inner-line" style="Height: 2px;">
      </div>
    </div>
  </div>
  <br><br>
  <div class="About_Row" data-aos="fade-up-right">

    <div class="About_Col" data-aos="zoom-in" data-aos-duration="2000">
     <img src="Images/background/back3.jpg" class="aboutUs_Image"></img>
    </div>
    <div class="About_Col" data-aos="fade-left" data-aos-duration="2000">
      <span><p>Welcome to Vhavhenda plumbing</span> where Honesty and deliverance  are the backbone of the business. Vhavhenda plumbing Company does everything from plumbing repairs to sewer line cleaning.<span id="dots">...</span>
      <span id="more">We are trustworthy Company with reasonable prices.<br><br>
     We are locally owned Company based in Limpopo, Sekgoses. We have years of Exprience in the Industry and we are able to tackle any plumbing needs, from small to complex. </span>
     </p>

     <a type="button" class="btn btn-secondary myBtn" onclick="myMore()" onsubmit="return false"  id="myBtn">Read more</a>

    </div>

  </div>
  <div class="aboutus-tabs" data-aos="fade-down" data-aos-duration="900">
    <div class="tabs-row">
       
       <div class="tabs-col" data-aos="fade-left" data-aos-duration="900">
        <a type="button" class="btn btn-Our-mission" id="btnMission"> Our Mission</a>
       </div>
       <div class="tabs-col" data-aos="fade-right" data-aos-duration="900">
       <a type="button" class="btn btn-Our-vison" id="btnVision">  Our vision</a>     
       </div>
    </div>
  </div>

  <div class="mission-message one-message" id="mission" data-aos="fade-down" data-aos-duration="900">
    <h4 data-aos="fade-right" data-aos-duration="1000">Our Mission</h4>
    <br>
   
    <div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card-box text-center">
        <div class="number-system">
          <h1>1</h1>
          </div>
					<p>Our mission is to build strong, enduring relationships with our employees as we work together to serve our customers.</p>

				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
          <div class="number-system">
          <h1>2</h1>
          </div>
					<p>Our mission is to provide the best customer service in the Plumbing industry. Simplicity, availability, pricing and quality are the key factors.
            At Vhavenda plumbing we strive to become the leading company in sekgosese and surrounding areas, expanding into other regions as we grow. </p>
				</div>
			</div>

			<div class="col-md-4">
				<div class="card-box text-center">
        <div class="number-system">
          <h1>3</h1>
          </div>
					<p>Our mission is to give something back to the community in appreciation for the community's support of our business.</p>
				</div>
			</div>
		</div>
	</div>


  </div>
  <div class="vision-message one-message" id="vision" style="display: none;">
  <h4 data-aos="fade-left" data-aos-duration="1000">Our Vission</h4>
  <div class="vission-paragraph">
   Our Vision is to be recognized and well known in the community as the most trustedand valuable service providers, Providing
   quality plumbing services to the highest standard and specifications to our clients.
  </div>   
</div>
</div>
<br><br>
  <!--Our team -->
  <div class="team_content" id="team" style="min-height: 105vh;">
 <br><br>
    <h1 data-aos="fade-right" data-aos-duration="900">Meet Our Team</h1>
  <div class="Inner-lines2" data-aos="zoom-in">
    <div class="Inner-row2">
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
      <div class="Inner-Col2">
      <div class="cen" align="center"> <i class='fas fa-tools' style='font-size:28px; color: black;'></i></div>
      </div>
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
    </div>
  </div>
    <br>
    <br>
    <div class="team-row">

      <div class="team-col" data-aos="fade-right" data-aos-offset="300" data-aos-duration="500"  data-aos-easing="ease-in-sine">
        <div class="team-container">
          <div class="container-team">
          <img src="Images/background/back3.jpg" class="team-image"></img>
          <div class="overlay-content">
            <div class="social-links">
              <div class="social-row">
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  
                 </div>
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="team-member-details">
            <h5>Majone 1</h5>
            <h6>CEO</h6>
            <p>Text to describe user</p>
            <a href="" class="btn btn-secondary" style="width:100%">Contact</a>
           </div>
      </div>
      </div>
      <div class="team-col" data-aos="fade-up" data-aos-offset="300">
        <div class="team-container">
          <div class="container-team">
          <img src="Images/background/back2.jpg" class="team-image"></img>
          <div class="overlay-content">
            <div class="social-links">
              <div class="social-row">
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  
                 </div>
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="team-member-details">
           <h5>Majone 2</h5>
           <h6>CEO2</h6>
           <p>Text to describe user</p>
           <a href="" class="btn btn-secondary" style="width:100%">Contact</a>
          </div>
        </div>
      </div>
      <div class="team-col" data-aos="fade-left" data-aos-offset="300" data-aos-duration="500">
        <div class="team-container">
          <div class="container-team">
          <img src="Images/background/back.jpg" class="team-image"></img>
          <div class="overlay-content">
            <div class="social-links">
              <div class="social-row">
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  
                 </div>
                 <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="socila-col">
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>
          </div>
          </div>
          <div class="team-member-details">
            <h5>Majone 3</h5>
            <p>Text to describe user</p>
            <h6>CEO3</h6>
            <a href="" class="btn btn-secondary" style="width:100%">Contact</a>
           </div>

      </div>
    </div>
    </div>
  </div>

  <br><br>
      <!--Services-->

      <div class="services_offered" id="services" style="min-height: 105vh;">
        <h1 data-aos="fade-right" data-aos-duration="1000">Services Offered</h1>
        <div class="Inner-lines" data-aos="zoom-in">
        <div class="Inner-row">
          <div class="Inner-Col">
          <hr class="Inner-line" style="Height: 2px;">
          </div>
          <div class="Inner-Col">
          <i class='fas fa-tools' style='font-size:28px; color: whitesmoke;'></i>
          </div>
          <div class="Inner-Col">
          <hr class="Inner-line" style="Height: 2px;">
          </div>
        </div>
  </div>
        <br><br>

        <div class="service_col">

           <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
              <img src="Images/background/Drain_Cleaning.jpg" class="service-image"></img>
              <br>
              <div class="sub-content">
                <h4 data-aos="fade-right" data-aos-duration="500">Drain Cleaning</h4>
              </div>
          
           </div>
           <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
            <img src="Images/background/Sewer_Repair.jpg" class="service-image"></img>
            <br>
            <div class="sub-content">
              <h4 data-aos="fade-right" data-aos-duration="500">Sewer Repair</h4>
            </div>

          </div>
          <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
            <img src="Images/background/Toilet_Repair.jpg" class="service-image"></img>
            <br>
            <div class="sub-content">
              <h4 data-aos="fade-right" data-aos-duration="500">Toilet Repair</h4>
            </div>
          </div>
        </div>
        <br>
        <div class="service_col" >

          <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
             <img src="Images/background/Leak_Repair.jpg" class="service-image"></img>
             <br>
             <div class="sub-content">
               <h4 data-aos="fade-left" data-aos-duration="500">Leak Repair</h4>
             </div>
         
          </div>
          <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
           <img src="Images/background/Geyser_Installation.jpg" class="service-image"></img>
           <br>
           <div class="sub-content">
             <h4 data-aos="fade-left" data-aos-duration="500">Geyser Installation</h4>
           </div>

         </div>
         <div class="service_row" data-aos="zoom-in" data-aos-duration="500">
           <img src="Images/background/Bathtub_Installation.jpg" class="service-image"></img>
           <br>
           <div class="sub-content">
             <h4 data-aos="fade-left" data-aos-duration="500">Bathtub Installation</h4>
           </div>
         </div>
       </div>
      </div>

<div id="ContactUs" style="min-height: 95vh;">
  <div class="small-portion">
    <br>
    <h1 data-aos="fade-left" data-aos-duration="1000">Contact Us</h1>
  <div class="Inner-lines2" data-aos="zoom-in">
    <div class="Inner-row2">
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
      <div class="Inner-Col2">
      <div class="cen" align="center"> <i class='fas fa-tools' style='font-size:28px; color: black;'></i></div>
      </div>
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
    </div>
  </div>
    <br>
    <p data-aos="fade-right" data-aos-duration="1000">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within a matter of hours to help you.</p>
      
  </div>
  <div class="contactus-content" style="min-height:90vh;">
    <br><br>
      <div class="wrapper">
    
        <div class="d-grid contact-view">
          <div class="cont-details" data-aos="fade-left" data-aos-duration="1000">


            <div class="cont-top">

              <div class="cont-left text-center">
                <i class='fas fa-phone-alt' style='color:gray; margin-top: 5px; font-size: 25px; opacity: 0.5;'></i>
              </div>

              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="#">+278 182 7069</a></p>
              </div>

            </div>


            <div class="cont-top margin-up">

              <div class="cont-left text-center">
               <i class='fas fa-envelope' style='color:gray; margin-top: 5px; font-size: 25px; opacity: 0.5;'></i>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">Vhavenda@gmail.com</a></p>
              </div>
              
            </div>


            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <i class='fas fa-map-marker-alt' style='color:gray; margin-top: 5px; font-size: 25px; opacity: 0.5;'></i>
              </div>
              <div class="cont-right">
                <h6>Find Us</h6>
                <p>Sekgosese</p>
                <a type="button" class="btn btn-secondary" onclick="myMap()" onsubmit="return false"  id="myMap">View Map</a>
              </div>
            </div>
          </div>



          <div class="map-content" data-aos="fade-right" data-aos-duration="1000">
            <form action="#" method="post">
              <div class="twice">
                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name*" required="">
  
              </div>
              <div class="twice">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name*" required="">
              </div>

              <div class="twice">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email*"
                  required="">
              </div>

              <textarea name="message" class="form-control" id="message" placeholder="Say Something....."
                required=""></textarea>
              <button type="submit" class="btn btn-contact">Send Message</button>
            </form>
          </div>



        </div>
        <br><br>

        <div class="myMore" id="myMore">
         <span id="dot">.</span>
         <div class=" Map-section">
     
         </div>
     
        </div>
        <br><br>
      </div>
     
  </div>
</div>

<br>
<div class="Gallery" id="Gallery" style="min-height: 120vh;">
<h1 data-aos="fade-right" data-aos-duration="1000">Gallery</h1>
<div class="Inner-lines2" data-aos="zoom-in">
    <div class="Inner-row2">
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
      <div class="Inner-Col2">
      <div class="cen" align="center"> <i class='fas fa-tools' style='font-size:28px; color: whitesmoke;'></i></div>
      </div>
      <div class="Inner-Col2">
      <hr class="Inner-line2" style="Height: 2px;">
      </div>
    </div>
  </div>
<br><br>
<div class="container" data-aos="zoom-in">


         <div class="portfolio-item row">
		    
			<?php
			
			$results_per_page=8;
			$select="SELECT* FROM tbl_item ORDER BY ItemID ASC";
			$get_result=mysqli_query($connect,$select);
			$getRows=mysqli_num_rows($get_result);
		    
		
			$calculated_pagination=ceil($getRows/$results_per_page);
            
			if(!isset($_GET['page']))
			{
				$page=1;
			}
			else
			{
				$page=$_GET['page'];
			}
			
			$pagination_limit=($page-1)*$results_per_page;
			$new_select="SELECT* FROM tbl_item ORDER BY ItemID ASC LIMIT ". $pagination_limit  . ',' .$results_per_page;
			$new_result=mysqli_query($connect,$new_select);
			if(mysqli_num_rows($new_result)>0)
			{
				while($row=mysqli_fetch_array($new_result))
				{
			?>
			     <div class="col-md-3">
				 <form method="post">
				   <a href="./uploads/images/<?php echo $row['Image']; ?> " width= "80%" height="70%" class="fancylight popup-btn" data-fancybox-group="light"> 
				  <img class="images" src="./uploads/images/<?php echo $row['Image']; ?>"  alt="">
				  </a>
				 
				 </form>
				 <br>
				 </div>
				 
				  
                				
			<?php
				}
			}

			$stating_limit=($page-1)*$results_per_page;
			for($page=1;$page<=$calculated_pagination;$page++)
			{
				echo '<a href="index.php?page=' . $page . '"> ' .$page. '</a> ';
			}
			?>


         </div>
</div>
      
</div>
</div>
<footer class="footer_area section_padding_130_0">
      <div class="container">
        <div class="row">
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Footer Logo-->
              <div class="footer-logo mb-3">VHAVENDA</div>
              <p>Leave the Drains to the experts</p>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Subscribe</h5>
              <!-- Footer form-->
              <div class="footer_menu">
              
		
         <form action="#" class="Subscribe" method="post">
              <div class="twice">
              <input type="text" id="subName" name="subName" placeholder="First Name*">
              </div>
              <div class="twice">
              <input type="text" id="subEmail" name="subEmail" placeholder="Email*">
            </div>

            <input type="submit" style="background-color: whitesmoke;" id="sub_submit" class="btn btn-contact" value="Subscribe" name="sub_submit">
            </form>
	
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Quick Links</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Our Work</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Contact</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="#">Vhavenda@gmail.com</a></li>
                  <li><a href="#">+27 818 327 069</a></li>
				  <li><a href="#">Address</a></li>
				  <li><a href="#">Map</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

<script>
function myMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

<script>
function myMap() 
{
  var dots = document.getElementById("dot");
  var moreText = document.getElementById("myMore");
  var btnText = document.getElementById("myMap");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "View Map";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Close Map";
    moreText.style.display = "inline";
  }
}
</script>

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

<script>
const mission = document.getElementById('btnMission')

mission.addEventListener("click", () => 
{
	document.getElementById('mission').style.display = "block";
  document.getElementById('vision').style.display = "none";
});

const vision = document.getElementById('btnVision')
vision.addEventListener("click", () => 
{
	document.getElementById('mission').style.display = "none";
  document.getElementById('vision').style.display = "block";
});

</script>

<!--INITIALIZE AOS-->
<script>
  AOS.init();
</script>
</body>

</html>