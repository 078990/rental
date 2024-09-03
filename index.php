<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
	 
 							
?>
<!DOCTYPE html>
<html lang="en">

<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>Premier Real Estate </title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->


        <div class="container" >

         <div class="sliding-image">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/home3.jpg" alt="Los Angeles" style=" width:50%; height: 40%;">
      </div>

      <div class="item">
        <img src="images/home4.jpg" alt="Chicago" style="width:50%; height: 60%;">
      </div>
    
      <div class="item">
        <img src="images/home5.jpg" alt="New york" style=" width:50%; height: 60%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
        
        </div>
  
</div>
		
       
        <table> 
        <tr>
    <th><img src="images/kiy1.jpg" alt="image" width="400" height="350" ><a href="kiy.php" style="color: chocolate;" ></td>Apartment for rent <br>location: Kiyovu <br> price: $1000 per month </a></th>
    <th><img src="images/kab1.jpg" alt="image" width="400" height="350" ><a href="kab.php" style="color: chocolate;" >Apartment for rent <br>location: Kabuga <br> price: $1000 per month</a></th>
    <th><img src="images/kim1.jpg" alt="image" width="400" height="350" ><a href="kim.php" style="color: chocolate;" >Apartment for rent <br>location: Kimihurura <br> price: $1300 per month</a></th></tr>&nbsp&nbsp&nbsp
    <tr>
    <th><img src="images/kag1.jpg" alt="image" width="400" height="350" ><a href="kag.php" style="color: chocolate;" >Apartment for rent <br> location: Kagugu <br> price: $1600 per month</a></th>
    <th><img src="images/kag2.jpg" alt="image" width="400" height="350" ><a href="kan.php" style="color: chocolate;" >Apartment for rent <br> location: Kanombe <br> price: $1500 per month</a></th>

    <th><img src="images/kacy1.jpg" alt="image" width="400" height="350" ><a href="kacy.php" style="color: chocolate;" >Apartment for rent <br> location: Kacyiru <br> price: $1200 per month</a></th>
    </tr>
    <tr>
    <th><img src="images/house.jpg" alt="image" width="400" height="350" ><a href="house.php" style="color: chocolate;" >Apartment for rent <br> location: Kacyiru <br> price: $200 per month</a></th>
    <th><img src="images/home2.jpg" alt="image" width="400" height="350" ><a href="home2.php" style="color: chocolate;" >Apartment for rent <br> location: Kacyiru <br> price: $200 per month</a></th>
    <th><img src="images/home3.jpg" alt="image" width="400" height="350" ><a href="home3.php" style="color: chocolate;" >Apartment for rent <br> location: Kimihurura <br> price: $250 per month</a></th></tr>
    <tr> 
    <th><img src="images/home4.jpg" alt="image" width="400" height="350" ><a href="home4.php" style="color: chocolate;" >Apartment for rent <br> location: Kanombe <br> price: $200 per month</a></th>
    <th><img src="images/home5.jpg" alt="image" width="400" height="350" ><a href="home5.php" style="color: chocolate;" >Apartment for rent <br> location: Kabuga <br> price: $300 per month</a></th>
    <th><img src="images/home6.jpg" alt="image" width="400" height="350" ><a href="home6.php" style="color: chocolate;" >Apartment for rent <br> location: Kiyovu <br> price: $350 per month</a></th>
    </tr>
</table>
        <!--	Banner End  -->
        
        <!--	Text Block One
		======================================================-->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2></div>
                </div>
                <div class="text-box-one">
                    <div class="row">
                     
                        <div class="col-lg-3 col-md-6">
                            <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s"> 
								<i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Rental Service</a></h5>
                                <p>apartement</p>
                               
                                <p>house</p>
                               
                            </div>
                        </div>
                       
                     
                    </div>
                </div>
            </div>
        </div>
		<!-----  Our Services  ---->
		
        <!--	Recent Properties  -->
       >
		<!--	Recent Properties  -->
        
        <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/kacy1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Top Rated</h5>
										<p>9/10.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>They have degree in construction architecture .</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-success" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experienced Agents</h5>
										<p>The Agents have 3 to 5 years of experience,worket with the big famous company.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        

        <!--	How It Work -->
        
        <!--	Achievement
        ============================================================-->
      
        
        <!--	Popular Place -->
        
		<!--	Testonomial -->
		
		
        <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 

</body>

</html>

<!--<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script>-->  
<!--jQuery Layer Slider --> 
<!--<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/YouTubePopUp.jquery.js"></script> 
<script src="js/validate.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script> -->