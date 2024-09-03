
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
<link rel="stylesheet" type="text/css" href="css/color.css">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/login.css">

<!--	Title
	=========================================================-->
<title>Premier Real Estate</title>
</head>
<style type="text/css">
    .content{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.5cm;
        min-width: 300px;
        border-bottom: 1px solid #dddddd ;
    }
     th{
        background-color: black;
        color: white;
        text-align: left;
        font-weight: bold;
    }
    table{
        align-content: center;
    }
    h1{
        text-align: center;
        color: chocolate;
    }

</style>
<body>
   <!--	Page Loader
=============================================================-->


    <!--	Header start  -->
		<?php include("include/header.php");?>
    <center>
        <h1>View Client's Information</h1><br>
<table border="2" class="content">
    <thead>
   <div class="field"> <tr>
       
        <th>No</th>
        <th>Names</th>
        <th>Telephone</th> 
        <th>Email</th>

    </tr></div>
    <div id="">
    <div class="row"> 
    
    <?php 

$con=mysqli_connect("localhost","root","","realestatephp");
$select=mysqli_query($con,"SELECT * from property");
$num=mysqli_num_rows($select);


if ($num>0) {
    // code...

 
 while($data=mysqli_fetch_array($select)) {
    ?>

    <tr>
        
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['Names'] ?></td> 
        <td><?php echo $data['Phone'] ?></td>
        <td><?php echo $data['email'] ?></td>
    
    </tr>   
    <?php

}
 }
 else{
    echo "there is no data";
 }


     ?>
</thead>
</table>
</center>

            </div>
        </div><br><br>  
	<!--	Submit property   -->
        
        
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