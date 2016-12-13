<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "member";

// $connection database
$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname); //object oriented

if ($connection->connect_error) {
   die('Database Not Connect');
}
?>
