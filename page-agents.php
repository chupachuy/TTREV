<?php /* Template Name: Agents */ ?>


<?php get_header(); ?>


<main class="agents" style="background-image: url('<?php bloginfo('template_url'); ?>/img/playa.jpg');">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6 agent-biography">
				<?php the_content(); ?>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="agent">
					  <img src="<?php bloginfo('template_url'); ?>/img/joseviloria.jpg" class="card-img-top-agent" alt="Jose Viloria">
					</div>
					  <div class="card-body">
					    <h5 class="card-title">JOSE L. VILORIA</h5>
					    <p class="card-text"><strong>SALES AGENT</strong><br/>Email: <a href="thetoprealestatevallarta@gmail.com">thetoprealestatevallarta@gmail.com</a><br/>Tel: (+52) 322 127 8531</p>

					  </div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php get_footer(); ?>