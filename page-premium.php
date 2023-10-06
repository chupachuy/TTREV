<?php /* Template Name: Premium */ ?>


<?php get_Header(); ?>

<section>
	<div class="container">
		<div class="main-title">
			<h1>Premium</h1>
		</div>

		<?php 
$args = array(  
    'taxonomy' => 'premium',
    'posts_per_page' => -1, 
 
    
);
$new_query = new WP_Query($args);
while($new_query -> have_posts()) : $new_query -> the_post();
?>
<li>

    <span><?php the_title(); ?></span>
</li>

<?php endwhile; ?>

		
		
		</div>
	</div>
</section>

<?php get_footer(); ?>