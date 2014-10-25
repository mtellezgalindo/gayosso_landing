<?php 
/*

$host = "205.178.146.104";
$user = "bd_gayosso_u";
$pass = "8f7herjf76A";
$database = "gayosso";
*/

/*$host = 'localhost';
$user = 'root';
$pass = 'martintellez';
$database = 'gayosso';*/


$host = 'localhost';
$user = 'momartco_topo';
$pass = 'M.tellez1986';
$database ="momartco_gayosso";

$con=mysqli_connect($host,$user,$pass,$database);
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



 ?>