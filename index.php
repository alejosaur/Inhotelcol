<?php
    require_once ("http://inhotelcol.org/boletin_inc.php");
?>
<!DOCTYPE html>
<html lang="es">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="INHOTELCOL" content="INHOTELCOL Asociación de propietarios de la Industria Hotelera">
		<style type="text/css">
            @-ms-viewport{width: device-width;}.cap2 {
                color: #fff;
            }
        </style>
		<title>INHOTELCOL</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/layers.min.css" media="screen">
		<link rel="stylesheet" href="css/font-awesome.min.css" media="screen"> 
		<link rel="stylesheet" href="style.css?v=2" media="screen">
		<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		<link rel="icon" href="http://inhotelcol.org/favicon.ico">
		<link rel="apple-touch-icon" href="http://inhotelcol.org/img/in-icon.png">
		<link rel="apple-touch-icon" sizes="76x76" href="http://inhotelcol.org/img/in-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="http://inhotelcol.org/img/in-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="152x152" href="http://inhotelcol.org/img/in-icon-152x152.png">
		<style type="text/css">
		body,td,th {
	        font-family: "Open Sans", sans-serif;
        }
        body {
            background-color: #FFFFFF;
        }
        </style>
	</head>

	<body class="page">

		<header role="banner" class="transparent light">
			<div class="row">
				<div class="nav-inner row-content buffer-left buffer-right even clear-after">
					<div id="brand">
						<h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="http://inhotelcol.org/index.php"><img src="http://inhotelcol.org/img/logo.png" styles="max-width:50%" alt="Inhotelcol"></a></h1>
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
									
								</ul>
                            </li>
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
            <div id="intro-wrap">
                <div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp">					
                        
                    <div class="intro-item" style="background-image: url(http://inhotelcol.org/img/2.png);">
                        <div class="caption">
                            <h2>BIENVENIDOS</h2>
                            <span class="cap2">Asociación de propietarios de la Industria Hotelera</span>
                                
                            </div><!-- caption -->
                                <div class="photocaption">
                                
                                </div><!-- photocaption -->						
                        </div>						
                        <div class="intro-item" style="background-image: url(http://inhotelcol.org/img/3.png);">
                            <div class="caption">
                                <h2>BIENVENIDOS</h2>
                                <span class="cap2">Asociación de propietarios de la Industria Hotelera</span>
                                
                            </div><!-- caption -->
                            <div class="photocaption">
                                
                            </div><!-- photocaption -->						
                        </div>		
                        <div class="intro-item" style="background-image: url(http://inhotelcol.org/img/4.png);">
                            <div class="caption">
                                <h2>BIENVENIDOS</h2>
                                <span class="cap2">Asociación de propietarios de la Industria Hotelera</span>
                                
                            </div><!-- caption -->
                            <div class="photocaption">
                                
                            </div><!-- photocaption -->						
                        </div>																		
                    </div>
                </div><!-- intro -->
            </div><!-- intro-wrap -->

            <div id="main">
            
                <section class="row section text-light" style="background-color:#f2fdff">
                    <div class="row-content buffer even clear-after" style="min-height: 600px;">
                        <div class="column six push-six last-special">
                            <h2><?=utf8_encode($nombre_boletin)?></h2>
                                
                        
                            <?=utf8_encode($texto_contenido)?>
                                
                            <p><a href="boletin.php?id=<?=$id_contenido?>">Ver Más</a></p>
                            
                            <div class="timeline column six last">
                                <div class="year">
                                    
                                    <?php
                                    
                                    for ($i=0; $i < $boletines; $i++) { 
                                        
                                        echo '<div class="experience">
                                        <span class="circle"></span>
                                        <div class="small-icon red"><i class="icon icon-folder"></i></div>
                                        <div class="experience-info clear-after">
                                            <h5><a href="boletin.php?id=' . $boletinid[$i] . '">' . utf8_encode($boletinombre[$i]) . '</a></h5>
                                            
                                            
                                        </div><!-- experience-info -->
                                    </div>';
                                        
                                    }
                                    ?>							
                                </div>
                            </div>
        
                        </div>						
                        <div class="side-mockup left-mockup animation">
                            
                            <figure>
                                <div>
                                    <p>
                                        <?if($imagen_boletin!="")
                                            echo '<img src="galeria/' . $imagen_boletin . '" alt="">';
                                        ?>
                                    </p>
                                </div>
                                        
                            </figure>
                            <div class="slider iphone-slider white" data-autoplay="3000">
                            </div>
                        </div>						
                    </div>	
                </section>
                
                
                <div class="row-content buffer even clear-after">
                    <h2>NUESTRO PERIÓDICO</h2>		
                    <iframe style="width:100%; height:600px;" src="//e.issuu.com/embed.html#14431081/56252044" frameborder="0" allowfullscreen></iframe>
                </div>
                
                <section class="row section call-to-action">
                    <div class="row-content buffer even animation">
                        <p>Quiere hacer parte de la Asociación?</p>
                        <a class="button red" href="inscripcion.php">INSCRÍBASE</a>
                    </div>
                </section>								

                <section class="row section" style="background-color:#f2fdff">
                    <H2>"ADFSDF"</H2>
                </section>

                <section class="row section">
                    <style>
                        #map {
                            height: 400px;
                            width: 100%;
                        }
                    </style>
                
        
                    <div id="map"></div>
                        <script>
                            function initMap() {
                                var uluru = {lat: 4.661630, lng: -74.061189};
                                var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 19,
                                    center: uluru
                                });
                                var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                });
                            }
                        </script>
                        <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBI6CKJIsuRCLmpT0uoG3tqzlOdqcnLngU&callback=initMap">
                        </script>
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
                            <ul class="plain">
                            <?php
                                for ($i=0; $i < $boletines; $i++) {
                                    echo '<li><a href="boletin.php?id=' . $boletinid[$i] . '">' . utf8_encode($boletinombre[$i]) . '</a></li>';
                                }?>
                                
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/beetle.js"></script>

		
	</body>

</html>
