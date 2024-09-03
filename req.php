<?php 	
$con=mysqli_connect("localhost","root","","realestatephp");
$Names=$_POST['Names'];
$Phone=$_POST['Phone'];
$email=$_POST['email'];

$insert=mysqli_query($con,"INSERT into property values ('','$Names','$Phone','$email')");
if ($insert==true){
	// code...
	include "report.php";
}
else{
	echo "0";
}

 ?> 