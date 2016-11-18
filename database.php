<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'jschat';

$con =mysqli_connect($host,$username,$password,$database);
if(mysqli_connect_errno()){
	echo 'faild to connect:'.mysqli_connect_error() ;
}
 
