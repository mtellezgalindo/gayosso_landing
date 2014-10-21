<?
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" class="demo-5">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- metas -->

<title>Administrador de Obituarios Gayosso V 1.0</title>
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>


<link href='http://fonts.googleapis.com/css?family=Orienta' rel='stylesheet' type='text/css'>

<link href="css/formCss.css?3.2.735" rel="stylesheet" type="text/css" />
<link type="text/css" rel="stylesheet" href="css/nova.css?3.2.735" />
<link type="text/css" media="print" rel="stylesheet" href="css/printForm.css?3.2.735" />
<style type="text/css">
.form-label{
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
	width:150px !important;
}
.form-label-left{
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
	width:150px !important;
}
.form-line{
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
	padding-top:12px;
	padding-bottom:12px;
}
.form-label-right{
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
	width:150px !important;
}
body, html{
	font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, Sans-Serif;
	margin:0;
	padding:0;
	background:false;
}

.form-all{
	margin:0px auto;
	padding-top:0px;
	width:690px;
	color:#555 !important;
	font-family:'Lucida Grande';
	font-size:14px;
}
</style>

<link type="text/css" rel="stylesheet" href="css/form-submit-button-big_white.css?3.2.735"/>
<script src="js/jotform.js?3.2.735" type="text/javascript"></script>
<script type="text/javascript">
JotForm.init(function(){
	JotForm.setCalendar("6", false);
	JotForm.displayLocalTime("hour_6", "min_6", "ampm_6");
	JotForm.setCalendar("7", false);
	JotForm.displayLocalTime("hour_7", "min_7", "ampm_7");
	JotForm.setCalendar("8", false);
	JotForm.displayLocalTime("hour_8", "min_8", "ampm_8");
	$('input_9').hint('ex: 23');
	JotForm.alterTexts({"alphabetic":"Este campo solo puede contener letras","alphanumeric":"Este campo solo puede contener letras y números.","confirmClearForm":"¿Está seguro de querer borra el formulario?","confirmEmail":"Correo electrónico no coincide","email":"Introduzca una dirección e-mail válida","generalError":"Existen errores en el formulario, por favor corríjalos antes de continuar.","generalPageError":"Hay errores en esta página. Por favor, corríjalos antes de continuar.","gradingScoreError":"El puntaje total debería ser sólo \"menos que\" o \"igual que\"","incompleteFields":"Existen campos requeridos incompletos. Por favor complételos.","inputCarretErrorA":"El valor introducido no puede ser menor que el mínimo especificado:","inputCarretErrorB":"Entrada no debe ser mas grande que el valor maximo:","lessThan":"Tu cuenta debería ser menor o igual que","maxDigitsError":"El máximo de dígitos permitido es","maxSelectionsError":"El número máximo de selecciones es","minSelectionsError":"El número mínimo de selección requerido es","multipleFileUploads_emptyError":"El fichero {file} está vacío; por favor, selecciona de nuevo los ficheros sin él.","multipleFileUploads_minSizeError":"{file} is demasiado pequeño, el tamaño mínimo de fichero es: {minSizeLimit}.","multipleFileUploads_onLeave":"Se están cargando los ficheros, si cierras ahora, se cancelará dicha carga.","multipleFileUploads_sizeError":"{file} es demasiado grande; el tamaño del archivo no debe superar los {sizeLimit}.","multipleFileUploads_typeError":"El fichero {file} posee una extensión no permitida. Sólo están permitidas las extensiones {extensions}.","numeric":"Este campo sólo admite valores numéricos","pastDatesDisallowed":"La fecha debe ser futura","pleaseWait":"Por favor, espere ...","required":"Campo requerido.","requireEveryRow":"Todas las filas son obligatorias.","requireOne":"Por lo menos un campo requerido","submissionLimit":"¡Lo siento! Sólo se permite una entrada. Múltiples envíos están desactivados para este formulario.","uploadExtensions":"Solo puede subir los siguientes archivos:","uploadFilesize":"Tamaño del archivo no puede ser mayor que:"});
});
</script>

<script type="text/javascript">
function FocusOnInput()
{
     document.getElementById("first_3").focus();
}
</script>
</head>

<body>
	<div id="wrap" class="container">
		<div id="header"><h2>Inicio de sesi&oacute;n</h2></div>
		<div id="body">
			<div id="cuerpo">
				<fieldset name="inicioSesion" id="inicioSesion">
						<!--*****************************************-->
					<form class="jotform-form" action="source/login_user.php" method="POST" name="form_sesion" id="form_sesion" accept-charset="utf-8">
					

						<div class="form-all">
							<ul class="form-section">
								<li id="cid_1" class="form-input-wide">
									<div class="form-header-group">
										<h2 id="header_1" class="form-header">
											Administración de Obituarios - Login
										</h2>
									</div>
								</li>
								<li>
									<?php
								if(isset($_GET['login_error_code']) && $_GET['login_error_code'] > 0){
									echo '<div style="border:solid 3px #E1C46B; background:#FCFCA7; padding:5px; margin-left:35px; font-size:11px; color:#884454;">Por favor, verifica tu usuario y contraseña</div>';
								}
								?>

							</li>
							<li class="form-line" id="id_3">
								<label class="form-label-left" id="label_3" for="input_3">
									Nombre de usuario<span class="form-required">*</span>
								</label>
								<div id="cid_3" class="form-input"><span class="form-sub-label-container">
									<input class="form-textbox validate[required]" type="text" size="46" name="email" id="first_3" value="<?php
									if(isset($_SESSION['session_email'])){
										echo $_SESSION['session_email'];
									}
									
									?>"/>
									</span>
								</div>
							</li>
							<li class="form-line" id="id_4">
								<label class="form-label-left" id="label_4" for="input_4">
									Contraseña<span class="form-required">*</span>
								</label>
								<div id="cid_4" class="form-input"><span class="form-sub-label-container">
									<input class="form-textbox validate[required]" type="password" size="46" name="password" id="first_4" />
									</span>
								</div>
							</li>

							<li class="form-line" id="id_2">
								<div id="cid_2" class="form-input-wide">
									<div style="margin-left:156px" class="form-buttons-wrapper">
										<button id="input_2" type="submit" class="form-submit-button form-submit-button-big_white">
											Login
										</button>
									</div>
								</div>
							</li>
							<li style="display:none">
								Should be Empty:
								<input type="text" name="website" value="" />
							</li>
						</ul>
					</div>
				</form>
				</fieldset>
			</div>
				
		</div>
		<div id="footer">Gayosso <?php echo date("Y");?>. Todos los derechos reservados.</div>
	</div>
</body>
</html>