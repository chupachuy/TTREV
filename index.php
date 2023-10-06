<?php get_header(); ?>

<main>

	
	<div class="banner" style="background-image: url('http://localhost/thetoprealestatevallarta/wp-content/uploads/2023/09/slider3.jpg');">
		<div class="banner-info">
			<!--<div class="banner-main-title">
				<h1>MARINA TOWERS</h1>
			</div>
			<div class="banner-main-description">
				<h2>THE LAST BEACHFRONT DEVELOPMENT IN MARINA VALLARTA</h2>
			</div>
			<div class="btn-banner">
				<a class="btn btn-primary" href="#">MORE INFO</a>
			</div>-->
		</div>
	</div>

	<section>
		<div class="container">
			<div class="section-title text-center">
				<h2><strong>THE TOP PROPERTIES FOR SALE</strong><br />THE PLACE TO FIND YOUR PROPERTIES FOR SALE IN PUERTO VALLARTA AND RIVIERA NAYARIT</h2>
			</div>


			<div class="row mt-5">

				<!-- LOOP PARA lAS NUEVAS PROPIEDADES -->

				<?php
		            $args = array(
		                'post_type' => 'propiedad',
		                'orderby' => 'rand',
		                'posts_per_page' => -1,
		            );
		            $the_query = new WP_Query( $args );
		         ?>

		        <?php if ( $the_query->have_posts() ) : ?>
          		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="col-md-4 cards">
					<div class="card">
					  <img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" class="card-img-top" alt="Imagen Muestra">
					  <div class="card-body">
					    <h5 class="card-title"><?php the_title(); ?></h5>
					    <h6 class="card-title"><small><?php the_field('direccion'); ?></small></h6>
					    <p class="card-precio">$ <strong><?php the_field('precio'); ?></strong> USD</p>
					    <p class="card-text">$ <strong><?php the_field('beds'); ?></strong> Beds <strong><?php the_field('baths'); ?></strong> Baths <strong><?php the_field('foots'); ?></strong> ft<sup>2</sup> | <strong><?php the_field('meters'); ?></strong> m<sup>2</sup></p>
					    <a href="<?php the_permalink(); ?>" class="btn btn-primary">More information</a>
					  </div>
					</div>
				</div>

				<?php endwhile; ?>
		          <?php wp_reset_postdata(); ?>
		        <?php endif; ?>


			</div>
		</div>
		
	</section>


	<section id="publicity">
		<div class="cool-image-1" style="background-image: url('<?php bloginfo('template_url'); ?>/img/pexels-travis-rupert-1032650.jpg');">
		</div>
		<div class="cool-image-1" style="background-image: url('<?php bloginfo('template_url'); ?>/img/playa.jpg');">
		</div>
		<div class="cool-image-1" style="background-image: url('<?php bloginfo('template_url'); ?>/img/huellas.jpg');">
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6">
					<h3><strong>GET IN TOUCH WITH US</strong></h3>
					<p>Tel: +52 322 127 8531</p>
					<p>Email: <a href="#">thetoprealestatevallarta@gmail.com</a></p>

					<form action="">
		          	<div class="form-floating mb-3">
					  <input type="text" class="form-control" id="nombre" placeholder="Nombre">
					  <label for="nombre">Nombre</label>
					</div>
		          	<div class="form-floating mb-3">
					  <input type="email" class="form-control" id="email" placeholder="email@email.com">
					  <label for="email">Email</label>
					</div>
					<div class="form-floating mb-3">
					  <input type="text" class="form-control" id="subject" placeholder="Asunto">
					  <label for="subject">Asunto</label>
					</div>
					<div class="form-floating">
					  <textarea class="form-control" placeholder="Escribe tus comentarios aqui" id="comments" style="height: 100px"></textarea>
					  <label for="comments">Comentarios</label>
					</div>
					<button type="submit" class="btn btn-primary mt-3">Enviar</button>
		          </form>
				</div>
			</div>
		</div>
	</section>

</main>



<?php get_footer(); ?>