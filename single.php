<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="content-blog mt-5">

				<div class="row justify-content-center">
					<div class="col col-md-9">
						<div class="main-title">
							<h1><?php the_title(); ?></h1>
							<h6>POR: JOSE LUIS VILORIA</h6>
						</div>
						<div class="content-blog mt-5">
							<div class="image-blog mt-5 mb-5">
								<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="content-blog">
								<?php the_content(); ?>
							</div>
						</div>
						<hr>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col col-md-9">
					<?php get_template_part('template', 'sharing-box'); ?>
				</div>
			</div>
		</div>
	</section>
</main>




<?php get_footer(); ?>