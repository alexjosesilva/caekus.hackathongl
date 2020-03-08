<?php
	// Initialize the session
	session_start();
	 
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: login.php");
		exit;
	}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css" media="screen" />
</head>
<body>

<div id="corpo_total">
	<div id="topo" class="header">
		<?php
			$pathFile = 'header.php';
			require_once $pathFile;
		?>
	</div>
	
	<div id="corpocapturadocumento" class="corpo">

		<label for="avatar">Escolha o arquivo:</label>
		<input type="file"  id="documento" name="documento" accept="image/png, image/jpeg">
	</div>

	<div id="rodape">
		<p style="font-size:14px";> &copy;copyright 2019 - todos os direitos estão reservados</p>
	</div>
</div>

</body>
</html>