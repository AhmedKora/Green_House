<?php

$dbhost = "localhost" ;
$dbuser = "root" ;
$dbpass = "kora" ;
$dbname = "plant world" ;

// connect to the database 

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname))
{
	die("failed to connect");
}


?>