

<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");
								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!--	Fonts
	========================================================-->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
<title>Real Estate PHP</title>
<style type="text/css">
        
        .slide figure{
            position: relative;
            width: 250%;
            margin: 0;
            left: 0;
            animation: 5s  slider infinite;
        }
        .slide figure img{
            float: left;
            width: 20%;
        }
        @keyframes slider{
            0%{
                left: 0;
            }
            20%{
                left: 0;
            }
            25%{
                left: -100%;
            }
            45%{
                left: -100%;
            }
            50%{
                left: -200%;
            }
            70%{
                left: -200%;
            }
            75%{
                left: -300%;
            }
            
        }
     
        }
      .slide{

        flex-direction: left;
      }
     
    </style>
</head>
<body>

<!--	Page Loader
=============================================================

--> 

 
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
       
    
                  
         <!--	Banner   --->

		
        
					
                                          
                     <div class="slide">
    <figure>
    	<img src="images/kan1.jpg">
		<img src="images/kan2.jpg">
		<img src="images/kan3.jpg">
		<img src="images/kan4.jpg">
		<img src="images/kan5.jpg">
    </figure>
<h3>Property details</h3>
<p>Advert type:Rent</p>
<p>Type:Apartment</p>
<p>Price:$500/month</p>
<p>Bedroom:2</p>
<p>Bathroom:2</p>
<p>Address:Kigali city,Gasabo,kanombe</p>
<br><br>
<h3>Contact details</h3>
<p>Contact name: Ines UMUTONI</p>
<p>Phone:0786697640</p>
<p>Email: inestoni25@gmail.com</p>



</div><div class="col-lg-4">

                        <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Get in touch</h4>
                        <form class="d-inline-block w-100" action="req.php" method="POST">
                            <label class="sr-only">Fill information</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-number"><i class="far fa-person-alt"></i></div>
                                </div>
                                <input type="number" class="form-control" name="Names" placeholder="Names">
                            </div>
                            
                            <label class="sr-only"> </label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+250</div>
                                </div>
                                <input type="text" class="form-control" name="Phone" placeholder="Phone">
                            </div>
                            <label class="sr-only"></label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder=" email">
                            </div>
                            <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Send  </button> 


                    </div>
                </div>
            </div>
        </div>

         <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/custom.js"></script> 

</body>

</html>	