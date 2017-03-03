<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<!--

			title
			category breadcrumb (button?)
			
			2/3 Gallery with slider
			1/3 text content
				link

			4x related posts -->

			<article class="publication-wrap">
				<div class="container">

					<div class="row">
						<div class="col-sm-12">
							<h2 class="text-center"><?php the_title(); ?></h2>
						</div>
					</div>

					<div class="row">
						
						<div class="col-sm-12 col-lg-7">

<!-- 							<?php
							$images = get_field('image_gallery');
							if( $images ): ?>
								<div class="row">
									<div class="gallery js-project-gallery">
										<?php
											foreach( $images as $image ):
											$full = $image ['sizes']['lg_thumb'];
											$thumb = $image ['sizes']['lg_thumb'];
										?>
											<div class="col-sm-4">
												<div class="gallery-image">
													<a href="<?php echo $full ?>">
														<img class="thumb" src="<?php echo $thumb ?>" />
													</a>
												</div>
											</div>
										<?php endforeach; ?>
									</div>
								</div>
							<?php endif; ?> -->
							<?php 

								if ( has_post_thumbnail() ) { 
								    $image_id = get_post_thumbnail_id();
								    list( $url, $width, $height ) = wp_get_attachment_image_src( $image_id, 'lg_thumb' );

								?>
								<div class="gallery">
									<img src="<?php echo esc_url( $url ); ?>" />
								</div>
								<?php } ?>
						</div>

						<div class="col-sm-12 col-lg-5">
							<?php the_content();?>
							<?php 
								$link = get_field('publication_link');
								$button = get_field('button_text');
								if ($link){ ?>

									<p class="text-center"><a class="btn -orange" href="<?php echo $link; ?>" target="_blank"><?php echo $button; ?></a></p>

							<?php } ?>
						</div>

					</div>

				</div>
				
			</article>

			<?php get_template_part('partials/templates/related-posts') ;?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer();?>