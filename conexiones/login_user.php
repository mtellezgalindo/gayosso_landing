<?php
session_start();
$_SESSION['session_email'] = '';

require_once("dbconnect.php");

if ( isset($_POST['email']) && isset($_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])){
	login_user($_POST['email'], $_POST['password']);
}else{


	Header('Location: http://www.gayosso.com/adminobi/inicio-sesion.php?login_error_code=1');
}

function login_user($email, $password){

	global $con;

	$user_sql = "SELECT * FROM ob_users WHERE email = '".$email."' AND password = '".$password."' ";
	//echo $user_sql;

	$result = mysqli_query($con, $user_sql);

	if($result){
		$total_rows = mysqli_num_rows($result);
	}else{
		$total_rows = 0;
	}


	if($total_rows > 0){

		while($row = mysqli_fetch_array($result))

		{
			$_SESSION['activeUser'] = '1';
			$_SESSION['name'] = $row['name'];
			$_SESSION['permission'] = $row['permission'];
			$_SESSION['iduser'] = $row['iduser'];
			$_SESSION['beginSession'] = true;

		}
		mysqli_close($con);
		header('Location: http://www.gayosso.com/adminobi/');
	}else{
		$_SESSION['session_email'] = $email;
		header('Location: http://www.gayosso.com/adminobi/inicio-sesion.php?login_error_code=2');
	}
}

?>