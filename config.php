<?php

$host="localhost";
$username="root";
$password="";
$dbname="customers";


$conn=mysqli_connect($host,$username,$password,$dbname);

if(!$conn){

	echo "I think you have an error";
}

?>