<?php 
   // Database connection
  include_once 'database.php';  

if(isset($_POST['name']) && isset($_POST['shout'])){
	$name = mysqli_real_escape_string($con,$_POST['name']);
	$shout = mysqli_real_escape_string($con,$_POST['shout']);
	//$date = mysqli_real_escape_string($con,$_POST['date']);

	//set timezone 
	date_default_timezone_get('America/New_York');
	$date = date('h:i:s a',time());


	$query = "INSERT INTO `shouts` (name,date,shout)
	VALUES ('$name','$date','$shout')";
	
	if(!mysqli_query($con,$query)){
	echo 'Error:'.mysqli_error($con);
	}else{
	echo '<li>'.$name.': '.$shout.':<h5> '.$date.'</h5></li>';
	}
}
