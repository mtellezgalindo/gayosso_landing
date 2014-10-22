<?php 
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("America/Mexico_City");
include('con_.php');
$nombre = $_POST['name1'];
$lada = $_POST['lada1'];
$email = $_POST['email1'];
$phone = $_POST['phone1'];
$zip =  $_POST['zip1'];
$place = $_POST['place1'];
$fecha = date('Y-m-d H:i:s');
$result = mysqli_query($con,"SELECT * FROM leads_crm_gayosso");

while($row = mysqli_fetch_array($result)) {

	if ($row['firstname']==$nombre) {
		echo "ese nombre ya exite!!!";		
	}elseif ($row['emailaddress1']== $email) {
		echo "ese correo ya existe!!!";
	}else{
		mysqli_query($con,"INSERT INTO leads_crm_gayosso (firstname, emailaddress1,address1_telephone1, gys_codigopostalid, gys_fuenteweb,fecha)
		VALUES ('".$nombre."', '".$email."','".$phone."', '".$zip."', '".$place."','".$fecha."')");
	}
  
}

mysqli_close($con);



?>