<?php
    if (isset($_POST['nombre'])){
        extract($_POST);
        $body='
                <style type="text/css">
                <!--
                .style1 {
                    font-family: Arial, Helvetica, sans-serif;
                    font-size: 10px;
                    color: #666666;
                    text-decoration: none;
                }
                -->
                </style>
                </head>
                <span><p>
                    <table width="524" border="1" align="center" cellpadding="4" cellspacing="4" bordercolor="#CCCCCC" class="style1" style="border-collapse:collapse">
                        <tr>
                            <td><strong>Nombre:</strong></td>
                            <td>'.$nombre.'</td>
                        </tr>
                        <tr>
                            <td><strong>Email:</strong></td>
                            <td>'.$email.'</td>
                        <tr>
                        <tr>
                            <td><strong>Mensaje:</strong></td>
                            <td>'.$mensaje.'</td>
                        <tr>
                    </table>
                </span>
            ';

        // Env&iacute;o de mensaje al administrador
        $headers  = '';
        $to      = 'info@inhotelcol.org';
        $subject = 'Contacto Pagina Web';
        // Cabeceras

        $headers .= 'MIME-Version: 1.0' . "\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
        
        // Cabeceras adicionales
        //$headers .= 'To: INHOTELCOL <'.$to.'>' . "\n";
        $headers .= 'Return-Path: <' . $to . '>' . "\n";
        $headers .= 'From: Web  INHOTELCOL <'.$to.'>' . "\n";	   
        $send = mail($to, $subject, $body, $headers);
        
        //mail($to," INHOTELCOL",$body,"From: INHOTELCOL <".$to."> \nContent-Type:text/html");
        echo $info;
        $mensaje = "Gracias por contactarse con nosotros, nos pondremos en contacto contigo en breve";}
    ?>
<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="INHOTELCOL" content="INHOTELCOL Asociación de propietarios de la Industria Hotelera">
		<style type="text/css">
            @-ms-viewport{width: device-width;}.cap2 {
                color: #fff;
            }
        </style>
		<title>INHOTELCOL</title>
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	    <link rel="icon" href="favicon.ico">
		<link rel="apple-touch-icon" href="img/in-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/in-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/in-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/in-icon-152x152.png">		
	</head>


	<body class="single single-portfolio">
		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="index.php"><img src="img/logo.png" alt="Inhotelcol"></a></h1>
					</div><!-- brand -->
					<a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
					<nav>
						<ul class="reset" role="navigation">
							<li class="menu-item">
								<a href="index.php">Inicio</a>
								
							</li>
							<li class="menu-item">
								<a href="la_asociacion.php">La Asociación</a>
								
							</li>
							<li class="menu-item">
								<a href="servicios.php">Servicios</a>
								
							</li>
							<li class="menu-item"><a href="">Normatividad</a>
                                <ul class="sub-menu">
									<li><a href="leyes.php">Leyes</a></li>
									<li><a href="estatutos.php">Estatutos</a></li>
									<li><a href="decretos.php">Decretos</a></li>
									
								</ul></li>
							<li class="menu-item">
								<a href="galeria.php">Galería</a>
																								
							</li>
							<li class="menu-item">
                                <a href="contacto.php">Contacto</a>
                            
                            </li>
						</ul>
					</nav>
				</div><!-- row-content -->	
			</div><!-- row -->	
		</header>

		<main role="main">
			<div id="intro-wrap"  data-height="22.222">
				<div id="intro" class="preload darken">
					<div class="intro-item" style="background-image: url(img/contacto.jpg);">
						<div class="caption">
							<h2>Contáctenos</h2>
							
						</div><!-- caption -->		
					</div><!-- intro -->
				</div><!-- intro -->				
			</div><!-- intro-wrap -->

			<div id="main">

				<section class="row section">
					<div class="row-content buffer even clear-after" style="padding-top: 0.5%;">
						<div class="section-title">
						    <h3>ESCRÍBANOS</h3>
                        </div>	
						<p>Por favor consulte con nosotros cualquier duda o información que requiera a través de nuestro formulario de contacto.</p>
						<div class="column nine">
							<form id="contact-form" class="contact-section" method="post" action="">
                            	<span class="pre-input"><i class="icon icon-user"></i></span>
                            	<input class="email plain buffer" type="text" name="name" id="name" autocomplete="off" placeholder="Nombre Completo">
                            	
                            	
                            	<span class="pre-input"><i class="icon icon-smartphone"></i></span>
                            	<input class="email plain buffer" type="text" name="phone" id="phone" autocomplete="off" placeholder="Teléfono">
                            	
                            	<span class="pre-input"><i class="icon icon-email"></i></span>
                            	<input class="email plain buffer" type="email" name="email" id="email" autocomplete="off" placeholder="Correo electrónico">
                            	<textarea class="plain buffer" name="message" id="message" autocomplete="off" placeholder="Escriba acá su mensaje"></textarea>
                            	<input id="send" class="plain button red" type="button" value="Enviar mensaje">
                            </form>	
                            <div id="success"></div>
						</div>
						<div class="column three last">
							<div class="widget">
								<p>
								    
						            <div class="column two">
                                        <div class="small-icon red">
                                            <i class="icon icon-home"></i>
                                        </div> 
                                    </div>
                                    <div class="column ten last">
                                        &nbsp; CALLE 74 No. 15-80 <br>
                                        &nbsp; Interior 2&nbsp; Oficina 401<br>
                                        &nbsp; BOGOTÁ D. C.<br>
                                        &nbsp; COLOMBIA
                                    </div>
                                </p>
                                <p>
                                    <div class="column two">
                                        <div class="small-icon red">
                                            <i class="icon icon-email"></i>
                                        </div>
                                    </div>
                                    <div class="column ten last">
                                
    							        &nbsp;	info@inhotelcol.org
    							    </div>
    							</p>
                                <p>
                                    <div class="column two">
        							    <div class="small-icon red">
                                            <i class="icon icon-phone-two"></i>
                                        </div>
                                    </div>
                                    
                                    <div class="column ten last">
        							    &nbsp;	317 4968 - 317 4956
                                        <br>
                                        &nbsp;
                                        3142981903
                                    </div>
                                </p>
							</div>
						</div>
					</div>
				</section>

			</div><!-- id-main -->
		</main><!-- main -->

		<footer role="contentinfo">
			<div class="row">
				<div class="row-content buffer clear-after">
                    <section id="top-footer">
                        <div class="widget column three"><!-- la class="widget" è forse generata utomaticamente da wp -->
                            <h4>Menú</h4>
                            <ul class="plain">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="la_asociacion.php">La Asociación</a></li>
                                <li><a href="servicios.php">Servicios</a></li>
                                <li><a href="leyes.php">Normatividad</a></li>
                                <li><a href="galeria.php">Galeria</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </div>
                        <div class="widget column three">
                            <h4><a href="boletin.php">Boletines</a></h4>
                            <?php
                                require_once ("boletin_inc.php");
                            ?>
                            <ul class="plain">
                                <?php
                                    for ($i=0; $i < $boletines; $i++) {
                                        echo '<li><a href="boletin.php?id=' . $boletinid[$i] . '">' . utf8_encode($boletinombre[$i]) . '</a></li>';
                                    }
                                ?>
                            </ul>
                        </div>								
                                
                        <div class="widget meta-social column three">
                            <h4>Nuestras Redes</h4>
                            <ul class="inline">
                                <li><a href="https://twitter.com/inhotelcol" target="_blank" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="https://www.facebook.com/Inhotelcol-Asociaci%C3%B3n-Hotelera-1413555012059281/" target="_blank" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://www.youtube.com" target="_blank" class="youtube-share border-box"><i class="fa fa-youtube fa-lg"></i></a></li>
                            </ul>
                        </div>														
                    </section><!-- top-footer -->
                    <section id="bottom-footer">
                        <p class="keep-left">&copy; 2017 <a href="http://www.spyralweb.com/" alt="Spyralweb">Inhotelcol</a>. Derechos Reservados.</p>
                        
                    </section><!-- bottom-footer -->			
				</div><!-- row-content -->	
			</div><!-- row -->	
		</footer>

		<script src="https://code.jquery.com/jquery.js"></script>
		<script>
            $(document).ready(function(){
            	$('#send').click(function(){
            		$(this).val('Enviando ...');
            		$('#success p').remove();
            		$.post('contact/contact.php', $('#contact-form').serialize(), function(response) {
            			$('#success').html(response);
            			//$('#success').hide('slow');
            			$('#send').val('Enviar mensaje');
                		$('#name').val('');
                		$('#phone').val('');
                		$('#email').val('');
                		$('#message').val('');
            		});
            		return false;
            	});
            });
        </script>
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/beetle.js"></script>
		

	</body>

</html>
