<?php

session_start();

//initialize
//$username="";
//$password="";


//connectdb
$connection=mysqli_connect('localhost','root','','pdatabase');

if(mysqli_connect_errno()){
	die('Database connection failed'.mysql_connect_error());
}else{
	echo "ssss";
}

























?>