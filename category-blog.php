<?php get_Header(); ?>



<section>
	<div class="container">
		<div class="main-title">
			<h1>Blog</h1>
		</div>
		<div class="row mt-5">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="col-11 col-md-4 blog-category mb-3">
				<div class="card blog">
					<div class="category-blog">
						<?php the_post_thumbnail();?>
					</div>
		
				  <div class="card-body">
				    <h5 class="card-title"><?php the_Title(); ?></h5>
				    <h6>Jose Viloria</h6>
				     <?php the_excerpt(); ?>
				    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read more</a>
				  </div>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>