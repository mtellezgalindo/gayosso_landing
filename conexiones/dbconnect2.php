<?php
// Create connection
$host = "localhost";
$user = "munlo_leads_mun";
$pass = "bd42ms98.s";
$database = "munlog01_leads";




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