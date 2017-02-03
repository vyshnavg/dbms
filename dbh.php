<?php

$conn=mysql_connect("localhost","root","Qtel123%");

if(!$conn){
	die("Connection failed : ".mysqli_connect_error());
}