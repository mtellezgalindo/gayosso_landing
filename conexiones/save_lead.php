<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set("America/Mexico_City");

// define variables and set to empty values
$c_name = $c_lastName = $c_email = $c_phone = $c_company = $c_jobTitle = $c_project = $c_terms = "";
$c_nameErr = $c_lastNameErr = $c_emailErr = $c_phoneErr  = $c_projectErr = $c_termsErr = "";
$error_style_msg = 'class="msgFieldsCustom"';
$msg_server = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//c_name
	if (empty($_POST["c_name"])) {
		$c_nameErr = "error";
	} else {
		$c_name = check_vars($_POST["c_name"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$c_name)) {
			$c_nameErr = "error"; 
		}
	}
	//c_lastName
	if (empty($_POST["c_lastName"])) {
		$c_lastNameErr = "error";
	} else {
		$c_lastName = check_vars($_POST["c_lastName"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$c_lastName)) {
			$c_lastNameErr = "error"; 
		}
	}
	//c_email
	if (empty($_POST["c_email"])) {
		$c_emailErr = "error";
	} else {
		$c_email = check_vars($_POST["c_email"]);
		// check if e-mail address syntax is valid
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$c_email)) {
			$c_emailErr = "error"; 
		}
	}
	//c_phone
	if (empty($_POST["c_phone"])) {
		$c_phoneErr = "error";
	} else {
		$c_phone = check_vars($_POST["c_phone"]);
		// check if phone number has only numbers
		if (!preg_match('/^[0-9]*$/', $c_phone)) {
			$c_phoneErr = "error"; 
		}
		if (clean_phone_number($c_phone) != '10'){
			$c_phoneErr = "error";
		}
		
	}
	//c_project
	if (empty($_POST["c_project"])) {
		$c_projectErr = "error";
	} else {
		$c_project = check_vars($_POST["c_project"]);
	}
	//c_terms
	if (empty($_POST["c_terms"])) {
		$c_termsErr = '<span class="errorAP">(Debes aceptar)</span>';
	} else {
		$c_terms = check_vars($_POST["c_terms"]);
	}

	//This field do not need to be checked for empty
	$c_company = check_vars($_POST["c_company"]);
	$c_jobTitle = check_vars($_POST["c_jobTitle"]);

	if(!empty($c_nameErr) OR !empty($c_lastNameErr) OR !empty($c_emailErr) OR !empty($c_phoneErr) OR !empty($c_projectErr) OR !empty($c_termsErr)){
		$error_style_msg = 'class="error"';
	}else{
		$error_style_msg = 'class="msgFieldsCustom"';
		save_lead($c_name, $c_lastName, $c_email, $c_phone, $c_company, $c_jobTitle, $c_project);
	}
}

function save_lead($c_name_s, $c_lastName_s, $c_email_s, $c_phone_s, $c_company_s, $c_jobTitle_s, $c_project_s){
	global $msg_server;
	require_once('dbconnect.php');

	$sqlInsert ="INSERT INTO leads_contact (c_name, c_lastName, c_email, c_phone, c_company, c_jobTitle, c_project, c_date) VALUES (?,?,?,?,?,?,?,?)";

	if ($stmt = $con->prepare($sqlInsert)) {

		/* Bind our params */
		$stmt->bind_param('ssssssss', $c_name_s, $c_lastName_s, $c_email_s, $c_phone_s, $c_company_s, $c_jobTitle_s, $c_project_s, $c_date_s);

		/* Set our params */
		$c_date_s = date("Y-m-d H:i:s");
		/* Execute the prepared Statement */
		$stmt->execute();
		$last_ID = mysqli_insert_id($con);
		/* Close the statement */
		$stmt->close();

		//If success
		$msg_server = '0';
		require_once('sendMandrillMail.php');

	}
	else {
		/* Error */
		$msg_server = '1';
		//die('prepare() failed: ' . htmlspecialchars($con->error));
		//printf("Prepared Statement Error: %s\n", $con->error);
	}
}

function check_vars($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function clean_phone_number($phone) {
	$ready = '';
	$cleaned = '';
	preg_match_all('/[0-9\(\)+.\- ]/s', $phone, $cleaned); 
	foreach($cleaned[0] as $k=>$v) { 
		$ready += 1; 
	}
	return $ready;
}
?>