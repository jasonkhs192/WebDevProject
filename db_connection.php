<?php
//define variables
$hostname = "localhost";
$username = "root";
$password = "indexme";
$dbname = "project";

//making the connection to mysql
$dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database, ERROR: ".mysqli_connect_error());
?>
