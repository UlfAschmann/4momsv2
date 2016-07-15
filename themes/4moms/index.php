<?php get_header(); ?>
	<!-- Intro Section -->
	<div class="carousel fade-carousel slide" data-pause="click" id="bs-carousel">
		<!-- Overlay -->
		<div class="overlay"></div>

		<!--<video loop="loop" preload="auto" id="pretzel-video" autoplay class="video-playing">
		<source src="//a0.muscache.com/airbnb/static/Paris-P1-1.mp4" type="video/mp4">
		<source src="//a0.muscache.com/airbnb/static/Paris-P1-0.webm" type="video/webm">
	</video>-->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php $mensajes_banner = get_field('mensajes_banner', 'option'); ?>
				<?php foreach ($mensajes_banner as $i => $mensaje_banner): ?>
					<div class="item slides <?php echo ($i == 0 ? " active " : " "); ?>" style="background-image:url('http://lorempixel.com/1900/1048');">
						<div class="slide-<?php echo $i; ?>"></div>
						<div class="hero">

							<h1><?php echo $mensaje_banner['mensaje_banner_texto']; ?></h1>
							<h2><?php echo $mensaje_banner['mensaje_banner_subtexto']; ?></h2>

							<a class="page-scroll" href="#quienes"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
						</div>
					</div>
					<?php endforeach; ?>

		</div>
	</div>

	<!-- About Section -->
	<section id="quienes" class="quines">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Quienes somos<small> <?php echo get_field('subtitulo_quienes', 'option'); ?></small></h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 ">
					<p>
						<a href="#"><img class="img-responsive" src="http://babywp2.dan-fisher.com/wp-content/uploads/2014/10/Unknown.jpeg" alt="Unknown"></a>
					</p>
				</div>
				<div class="col-md-6 ">
					<h2>¡Bienvenidos!</h2>
					<p>
						<?php echo get_field('bienvenidos', 'option'); ?>
					</p>

					<h3>Nuestros valores</h3>
					<?php echo get_field('nuestros_valores', 'option'); ?>
				</div>
			</div>
			<div class="row spacer">
				<div class="col-md-5 col-md-offset-1 mision">
					<h2>Misión</h2>
					<p>
						<?php echo get_field('mision', 'option'); ?>
					</p>
				</div>
				<div class="col-md-5 vision">
					<h2>Visión</h2>
					<p>
						<?php echo get_field('vision', 'option'); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Services Section -->
	<section id="historia" class="inverso">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Nuestra Historia <small> <?php echo get_field('subtitulo_historia', 'option'); ?></small></h2>
					<hr>
					<p>
						<?php echo get_field('contenido_historia', 'option'); ?>
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="convencete" class="convencete">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Convéncete <small> <?php echo get_field('subtitulo_convencete', 'option'); ?></small></h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<?php $convencete_items = get_field('items_convencete', 'option'); ?>
					<?php foreach ($convencete_items as $convencete_item): ?>
						<div class="col-md-4 ">
							<div class="icon-box icon-box-color__null circled no no">
								<div class="icon"><i class="<?php echo $convencete_item['item_icono']; ?>"></i></div>
								<div class="icon-box-body">
									<h3><?php echo $convencete_item['item_titulo']; ?></h3>
									<?php echo $convencete_item['item_mensaje']; ?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="paquetes" class="inverso">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Costos<small> <?php echo get_field('subtitulo_paquetes', 'option'); ?></small></h2>
					<hr>
				</div>
			</div>
			<div class="row">
				<?php $paquetes_items = get_field('items_paquetes', 'option'); ?>
					<?php foreach ($paquetes_items as $paquete_item): ?>
						<div class="col-md-4 text-center">
							<div class="thumbnail">
								<img class="img-responsive" src="<?php echo $paquete_item['imagen_paquete']; ?>" alt="">
								<div class="caption">
									<h3><?php echo $paquete_item['item_titulo']; ?></h3>
									<p>
										<?php echo $paquete_item['item_mensaje']; ?>
									</p>
									<a href="#contact" class="btn btn-default page-scroll">¡Lo quiero!</a>
								</div>
							</div>
						</div>
						<?php endforeach; ?>

			</div>
		</div>
	</section>

	<section id="galeria">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>Imágenes<small> <?php echo get_field('subtitulo_imagenes', 'option'); ?></small></h2>
					<hr>
				</div>
			</div>
		</div>


		<!-- bootFolio content  -->
		<div id="second" class="bf">
			<!-- bootFolio category filter -->
			<ul class="filter">
				<li><a data-cat="all" href="#" class="active">Todas</a></li>
				<li><a data-cat="instalaciones" href="#">Instalaciones</a></li>
				<li><a data-cat="clases" href="#">Clases</a></li>
			</ul>
			<!-- bootFolio category filter -->

			<!-- bootFolio Items -->
			<ul class="items">
				<!-- single item -->
				<?php $imagenes_items = get_field('item_imagenes', 'options'); ?>
					<?php foreach ($imagenes_items as $imagenes_item): ?>
						<?php
				$cadena_tipos = "";
				foreach ($imagenes_item['imagen_tipo'] as $tipo) {
					$cadena_tipos .= " " . $tipo;
				}
				?>
							<li class="<?php echo $cadena_tipos; ?>">
								<div class="bf-single-item">
									<img src="<?php echo $imagenes_item['imagen_galeria']; ?>" alt="">
									<div class="caption">
										<div class="cap-in">
											<h3><?php echo $imagenes_item['imagen_titulo']; ?></h3>
											<p>
												<?php echo $imagenes_item['imagen_mensaje']; ?>
											</p>
											<div class="bf-lupa">
												<a href="<?php echo $imagenes_item['imagen_galeria']; ?>" rel="prettyPhoto"><i class="fa fa-search fa-2x" aria-hidden="true"></i></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<?php endforeach; ?>

			</ul>
			<!-- // bootFolio Items -->
		</div>
		<!-- //bootFolio content -->
	</section>

	<!-- Contact Section -->
	<section id="contact" class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2>Contácto<small> <?php echo get_field('subtitulo_contactanos','options'); ?></small></h2>
					<hr>
				</div>
			</div>



			<div class="row">
				<div class="col-md-4">
					<hr class="visible-sm visible-xs lg">
					<!-- Widget :: Contacts Info -->
					<div class="contacts-widget widget widget__sidebar">
						<h3 class="widget-title">Información</h3>
						<div class="widget-content">
							<ul class="contacts-info-list">
								<li>
									<i class="fa fa-map-marker"></i>
									<div class="info-item">
										<?php echo get_field('direccion','options'); ?>
									</div>
								</li>
								<li>
									<i class="fa fa-phone"></i>
									<div class="info-item">
										<?php echo get_field('telefono','options'); ?>
									</div>
								</li>
								<li>
									<i class="fa fa-envelope"></i>
									<span class="info-item">
									<a href="mailto:<?php echo get_field('email','options'); ?>"><?php echo get_field('email','options'); ?></a>
								</span>
								</li>
								<li>
									<i class="fa fa-skype"></i>
									<div class="info-item">
										<a href="skype:<?php echo get_field('skype','options'); ?>?call">
											<?php echo get_field('skype','options'); ?>
										</a>
									</div>
								</li>
								<li>
									<i class="fa fa-clock-o"></i>
									<div class="info-item">
										<?php echo get_field('horario','options'); ?>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<!-- /Widget :: Contacts Info -->
				</div>
				<div class="col-md-8">

					<?php //echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>

						<h2>Formulario</h2>
						<form action="php/contact-form.php" id="contact-form" novalidate="novalidate">

							<div class="alert alert-success hidden" id="contact-alert-success">
								<strong>Success!</strong> Thank you for your message. Reply will be in a while!
							</div>
							<div class="alert alert-danger hidden" id="contact-alert-error">
								<strong>Error!</strong> Something went wrong sending your message.
							</div>

							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label>Nombre <span class="required">*</span></label>
										<input type="text" value="" data-msg-required="Please enter your name." class="form-control" name="name" id="name">
									</div>
									<div class="form-group">
										<label>Coreo <span class="required">*</span></label>
										<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="email" id="email">
									</div>
									<div class="form-group">
										<label>Asunto</label>
										<input type="text" value="" data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject">
									</div>
								</div>
								<div class="col-md-7">
									<div class="form-group">
										<label>Mensaje <span class="required">*</span></label>
										<textarea data-msg-required="Please enter your message." rows="11" class="form-control" name="message" id="message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-right">
								<input type="submit" value="Enviar" class="btn btn-default btn-lg" data-loading-text="Loading...">
							</div>
						</form>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
