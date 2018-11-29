<?php
	$nombre = $_POST['name'];
	$mail = $_POST['email'];
	$telefono = $_POST['telephone'];
	$producto = $_POST['product'];
	$urgencia = $_POST['urgency'];
	$falla = $_POST['request'];

	$header = 'From: ' . $mail . " \r\n";
	$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
	$header .= "Mime-Version: 1.0 \r\n";
	$header .= "Content-Type: text/plain";

	$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
	$mensaje .= "Su e-mail es: " . $mail . " \r\n";
	$mensaje .= "Su telefono es: " . $telefono . " \r\n";
	$mensaje .= "Acerca del producto: " . $producto . " \r\n";
	$mensaje .= "Con urgencia: " . $urgencia . " \r\n";
	$mensaje .= "Consulta: " . $falla . " \r\n";
	$mensaje .= "Enviado el " . date('d/m/Y', time());

	$para = 'ventas@pcsolutioncenter.com.ar';
	$asunto = 'Apertura de ticket - Enviado desde formulario web';

	mail($para, $asunto, utf8_decode($mensaje), $header);

	//echo starting point ------------------------------------------------------------------------------->>
	
	echo '

	<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>PC Solution Center</title>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
	<body>
    	<nav class="navbar navbar-expand-lg navbar-light bg-light level-1">
            <a class="navbar-brand" href="#">
                <img src="image/logos/pcsc-isotipo.png" alt="Logo PCSC" class="nav-link" height="50">
            </a>	        
        </nav>
	    <div class="flex-container" id="php-response">
	        <div class="row full-height flex flex-column justify-content-center align-items-center">
	            <div class="col-xs-12 col-sm-6 offset-sm-5 col-md-4 offset-md-7 success-message text-center" id="">
	            	<h1 class="msg-title">Su consulta<br/>ha sido enviada<br/>correctamente!</h1>
	            	<h3 class="msg-subtitle">Estaremos respondiendo lo antes posible</h3>
	            	<div class="col-xs-12 top-10"><a href="javascript:history.back(1)" class="btn btn-success wide">Volver</a></div>
	            </div>
	        </div>
	    </div>
	</body>
	</html>
	
	';

	//echo ending point -------------------------------------------------------------------------------<<
?>
