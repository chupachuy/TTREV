<?php get_Header(); ?>



<section>
	<div class="container">
		<div class="main-title">
			<h1>Blog pemium taxonomy category</h1>
		</div>
		<div class="row mt-5">		


		<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_title();
		//
	} // end while
} // end if
?>	

			<div class="col-11 col-md-6">
				<div class="card blog">
				  <img src="<?php bloginfo('template_url'); ?>/img/image-front.jpg" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title">Esta es una entrada de Blog</h5>
				    <h6>Jose Viloria</h6>
				    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris suscipit cursus arcu elementum maximus. Aenean id tincidunt erat. Ut sapien sapien, malesuada id metus ut, pretium tristique est.</p>
				    <a href="#" class="btn btn-primary">Leer Más</a>
				  </div>
				</div>
			</div>

			

		</div>
	</div>
</section>

<?php get_footer(); ?>