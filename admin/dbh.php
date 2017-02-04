<?php

/*$conn=mysql_connect("localhost","root","Qtel123%");

if(!$conn){
	die("Connection failed : ".mysqli_connect_error());
}*/

$conn=mysqli_connect("localhost","root","Qtel123%")or die ("could not connect to mysql");

mysqli_select_db($conn, "library")or die(mysqli_error($con));