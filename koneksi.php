<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'web_d';


$link  = mysqli_connect($host,$user,$pass,$db);

if (! $link) {
	die(mysql_connect_error());
	# code...
}