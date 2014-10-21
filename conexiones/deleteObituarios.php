<?php
session_start();
require("dbconnect.php");

	$sqlDelete = "UPDATE ob_guarda SET action = '2', iduser = ".$_SESSION['iduser']." WHERE idObituario = " . $_GET['idOb'];
	//echo $sqlDelete;
		
	mysqli_query($con,$sqlDelete);
	
	mysqli_close($con);
	
	$obDeleted = true;
	
?>