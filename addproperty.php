<?php 	
$con=mysqli_connect("localhost","root","","realestatephp");
$title=$_POST['title'];
$ptype=$_POST['ptype'];
$pcode=$_POST['pcode'];

$insert=mysqli_query($con,"INSERT into addproperty values ('','$title','$ptype','$pcode')");
if ($insert==true){
	// code...
	echo "correct";
	include "viewproperty.php";
}
else{
	echo "0";
}

 ?> 