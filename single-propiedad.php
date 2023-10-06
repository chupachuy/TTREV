<?php get_header(); ?>

<div class="main">
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php if(get_field('presale')){ ?>
						<div class="alert alert-danger">
						<h3><strong><?php the_field('presale'); ?></strong></h3>
					</div>
					<?php } ?>
					<div class="data-property">
						<h3>$ <strong><?php the_field('precio'); ?></strong></h3>
					</div>
					<?php if(get_field('level')){ ?>
					<div class="data-property">
						<h3><i class="fa-solid fa-building"></i> <strong><?php the_field('level'); ?></strong> <small>Level</small></h3>
					</div>
					<?php } ?>
					<?php if(get_field('year')){ ?>
					<div class="data-property">
						<h3><i class="fa-solid fa-calendar-check"></i> <strong><?php the_field('year'); ?></strong> <small>Year</small></h3>
					</div>
					<?php } ?>
					<div class="data-property">
						<h3><i class="fa-solid fa-bed"></i> <strong><?php the_field('beds'); ?></strong> <small>Bedrooms</small></h3>
					</div>
					<div class="data-property">
						<h3><i class="fa-solid fa-bath"></i> <strong><?php the_field('baths'); ?></strong> <small>Bathrooms</small></h3>
					</div>
					<div class="data-property">
						<h3><i class="fa-solid fa-vector-square"></i> <strong><?php the_field('foots'); ?></strong> <small>ft<sup>2</sup></small></h3>
					</div>
					<div class="data-property">
						<h3><i class="fa-solid fa-vector-square"></i> <strong><?php the_field('meters'); ?></strong> <small>m<sup>2</sup></small></h3>
					</div>
					<?php if(get_field('property_type')){ ?>
					<div class="data-property">
						<h3><i class="fa-solid fa-building"></i> <strong><?php the_field('property_type'); ?></strong> <!--<small>Property Type</small>--></h3>
					</div>
					<?php } ?>

					<hr>

					<?php if(get_field('pdf')){ ?>

					<div class="download-pdf">
						<h4><a href="<?php echo the_field('pdf'); ?>" target="_blank">Download Profile <i class="fa-solid fa-download"></i></a></h4>
					</div>

					<?php } ?>
					
					<?php if(get_field('video_youtube')){ ?>
					<hr>
					<div class="video-responsive">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo the_field('video_youtube'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>

					<?php } ?>
					<hr>
					<div class="whaths-app">
						<?php $phone = '525568032061';
						    $message = 'I want property information: '.get_the_title().' en '.get_permalink().' ';
						    $text = 'Ask for Whatsapp';
						   /* $ico = '<img src="'.get_stylesheet_directory_uri().'/img/whatsaap.png" width=50 height=50 />';*/

						    $url = 'https://api.whatsapp.com/send?phone='.$phone.'&amp;text='.str_replace(' ', '%20', $message);
						    $link = '<div class="logo-whatsapp"><a class="dc-link" href="'.$url.'" target="_blank"><i class="fa-brands fa-whatsapp fa-2x"></i><span> '.$text.'</span></a></div>';

						   ?>

						<h4><?php echo $link; ?></h4>
					</div>
					<hr>
					<?php if(get_field('amenidades')){ ?>
					<div class="amenidades">
						<h3>Features</h3>
						<?php the_field('amenidades'); ?>
					</div>
					<?php } ?>
				</div>

				<!-- GALERIAS -->
				<div class="col-md-8">
					<h1><?php the_title(); ?></h1>

					<h5 class="mb-5"><i class="fa-solid fa-location-dot"></i> <?php the_field('direccion'); ?></h5>
					<!--<h4 class="mt-5">About This Property</h4>-->
					<?php the_content(); ?>


					<div class="thumbnail-image">
						<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>">
					</div>
					

					<div class="row mt-5 justify-content-center">

						
						<?php $image = get_field('imagen_1'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_2'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_3'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_4'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_5'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_6'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_7'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_8'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_9'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_10'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_11'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_12'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_13'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_14'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_15'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_16'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_17'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_18'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_19'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_20'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						<?php $image = get_field('imagen_21'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>


						<?php $image = get_field('imagen_22'); ?>
						<?php if( !empty( $image ) ): ?>
							<div class="col-4 col-md-3 thumbnail-gallery">
								<a data-fslightbox href="<?php echo esc_url($image['url']); ?>"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
								</a>
							</div>
						<?php endif; ?>

						


					</div>
				</div>



				<!-- GALERIAS -->
				
			</div>
			<div class="separar"></div>
			<div class="row mt-5">
				<div class="map">
					<?php the_field('map'); ?>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="contact-agent">
	<div class="container alert alert-success">
		<div class="row">
			<div class="col-md-12">
				<p>Contact Agent <strong>Jose Viloria</strong> 322 127 8531 <a href="mailto:thetoprealestatevallarta@gmail.com">thetoprealestatevallarta@gmail.com</a></p>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>