<?php 
/*

$host = "205.178.146.104";
$user = "bd_gayosso_u";
$pass = "8f7herjf76A";
$database = "gayosso";
*/
$con=mysqli_connect("205.178.146.104","bd_gayosso_u","8f7herjf76A","gayosso");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



 ?>