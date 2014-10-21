<?php
//http://205.178.146.104/
// Create connection
// Create connection

$host = "205.178.146.104";
$user = "bd_gayosso_u";
$pass = "8f7herjf76A";
$database = "gayosso";
/*
$host = "localhost";
$user = "root";
$pass = "root";
$database = "gayosso";
*/

$con = new mysqli($host,$user,$pass,$database);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  };

if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
}
?>