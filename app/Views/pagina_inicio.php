<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Servicio de Banca en Linea</title>

		<meta name="description" content="Acceso al servicio de banca en linea">
		<meta name="author" content="Diseño de Aplicaciones Web">

		<link rel="stylesheet" href=<?php echo base_url() . '/public/css/bootstrap.min.css'; ?>>

	</head>
	<body>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<ul class="nav">
						<li class="nav-item">
						<?php
							echo anchor('/', 'Inicio', ['class'=>'nav-link']);
						?>
						
						</li>
						<li class="nav-item">
						<?php 
							echo anchor('quienes', 'Qui&eacute;nes Somos', ['class'=>'nav-link']);
						?>
						
						<!--<a class="nav-link" href="#">Qui&eacute;nes Somos</a> -->
						</li>
						
						<li class="nav-item">
						<?php
							echo anchor('persona', 'Banca Personas', ['class'=>'nav-link']);
						?>
						</li>
						
						<li class="nav-item">
						<?php
						echo anchor ('centro', 'Centro de Atenci&oacute;n', ['class'=>'nav-link']);
						?>
						
						</li>
						
						<li class="nav-item dropdown ml-md-auto">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown">Banca en Linea</a>
						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
						<?php
							echo anchor('blinea', 'Banca Persona', ['class'=>'dropdown-item']); 
							echo anchor('usuario/nuevo', 'Crear Usuario', ['class'=>'dropdown-item']); 					 
						?>
						<a class="dropdown-item" href="#">Banca Empresarial</a> 
						<a class="dropdown-item" href="#">PYMES</a>
						
						</div>
						</li>
					</ul>
					<div class="carousel slide" id="carousel-588541">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-588541" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-588541">
							</li>
							<li data-slide-to="2" data-target="#carousel-588541">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" alt="Carousel Bootstrap First" src="<?php echo base_url().'/public/resource/bn_01.jpg'?>">
								<div class="carousel-caption">
									<h4>
										First Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Second" src="<?php echo base_url().'/public/resource/bn_02.jpg'; ?>">
								<div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="<?php echo base_url() . '/public/resource/bn_03.jpg'; ?>">
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							
							<div class="carousel-item">
								<img class="d-block w-100" alt="Carousel Bootstrap Third" src="<?php echo base_url() . '/public/resource/bn_04.jpg'; ?>">
								<div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>
							
						</div>
						<a class="carousel-control-prev" href="#carousel-588541" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a>
						<a class="carousel-control-next" href="#carousel-588541" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<h3>
						Credibank te ofrecemos lo mejor
					</h3>
				</div>
				
				<div class="col-md-6">
					<h3>
						h3. Lorem ipsum dolor sit amet.
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="<?php echo base_url().'/public/resource/ahorro.jpg'; ?>">
					<h5>
						Cuenta Ahorro
					</h5>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details Â»</a>
					</p>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="<?php echo base_url().'/public/resource/tarjeta.jpg'; ?>">
					<h5>
						Tarjetas de Credito
					</h5>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details Â»</a>
					</p>
				</div>
				<div class="col-md-4">
					<img alt="Bootstrap Image Preview" src="<?php echo base_url() . '/public/resource/cambio.jpg' ?>">
					<h5>
						Mesa de Cambio
					</h5>
					<p>
						Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
					</p>
					<p>
						<a class="btn" href="#">View details Â»</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li>Nuestra Historia</li>
						<li>Nuestros Pilares</li>
						<li>Información Financiera</li>
						<li>Trabaja con nosotros</li>
					</ul>
				</div>
				
				<div class="col-md-4">
					<h5>Centros de Atenci&oacute;n</h5>
					<p>
					Somos el banco de más cobertura y mayor cantidad de sucursales a nivel nacional, siendo una institución líder, nuestras sucursales cuentan con sistemas modernos de gestión y personal capacitado para atenderle.
					</p>
					
					<h6>Sucursal Tipitapa-Masaya</h6>
					<ul>
						<li>Dirección: Km. 47 1/2 carretera a Tipitapa - Masaya</li>
					</ul>
					
				</div>
				
				<div class="col-md-4">
					<h5>Contacto</h5>
					
					<ul>
						<li>Telf. 2244-6688</li>
						<li>Km 11 carretera Masaya.</li>
						<li>Edificio Credibank.</li>
						<li>Managua, Nicaragua</li>
					</ul>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url() .'/public/js/jquery.min.js"'; ?>> </script>
		<script src="<?php echo base_url() .'/public/js/bootstrap.min.js"'; ?>> </script>
		
	</body>
</html>