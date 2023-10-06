<?php /* Template Name: Sell */ ?>


<?php get_header(); ?>


<main>
	<div class="banner" style="background-image: url('<?php bloginfo('template_url'); ?>/img/banner.jpg');">
		<div class="banner-info">
			<div class="banner-main-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="banner-main-description mt-5">
				<h2>Real estate transactions in today’s market typically exceed $150,000 and are usually the largest financial investments in a person’s lifetime. Why wouldn't you use a professional?</h2>
			</div>
		</div>
	</div>
	<div class="container mt-5 mt-5">
		<div class="row justify-content-center">
			<div class="col col-md-10">
				<?php the_content(); ?>
			</div>
		</div>
	</div>

</main>


<?php get_footer(); ?>