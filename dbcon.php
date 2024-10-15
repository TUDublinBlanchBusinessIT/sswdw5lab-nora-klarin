<?php
//Give the name of the program here
//Include your name and the date here
//Give a brief description of what the program does
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "tennisClub";
$port = 3306;

//set the default timezone - this is necessary since MySQL 8. This is an effort to store all dates and times together with their timezones. 
//This is particularly important where there is a timestamp indicating when something happened.
date_default_timezone_set('Europe/Dublin');

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
