<section class="section3">
	<div class="container">
		<div class="row">

			<div class="col-md-9 bg-white py-md-3 py-2">
				<?php
					$categoryNumber = 2;
					$catId = get_theme_mod('rjs_category_dropdown_6'); //changeable
					if (empty($catId)) {
						$catId = 1; //changeable
					}
					query_posts(array(
						'cat'               =>  $catId, //changeable
						'posts_per_page'    =>  6,
						'order'             =>  'DESC'
					)); ?>
				<div class="row">
					<div class="col-12">
						<p class="bg-cat6 py-1 px-2 mb-2">
							<a href="<?php echo get_category_link($catId); ?>">
								<?php echo get_cat_name($catId); ?>
								<!-- category no on off start -->
								<?php
								if (is_user_logged_in()) {
									$categoryOnOff = get_theme_mod('npa_category_switcher_id');
									if ('0' != $categoryOnOff) { ?>
								<span class="mb-0 text-white text-center bg-danger py-1 px-2"> <?php echo $categoryNumber;?> </span>
								<?php }
								} ?>
								<!-- category no on off end -->
							</a>
						</p>
					</div>
				</div>

				<div class="row">

					<?php while (have_posts()) : the_post(); ?>
					<div class="col-md-4 mb-3 col-6 last_3_mb_none wow zoomIn">
						<a href="<?php the_permalink(); ?>" class="d-flex flex-column">
							<?php
								$videolink = get_field('embed_code');
								$fbVideo = get_field('fbVideo');
								if (!empty($videolink)  or !empty($fbVideo)) {
									get_template_part('include/for_400x250px_2');
								} else { ?>

							<span class="mb-2 overflow-hidden">
								<?php
										$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
										if (!empty($lead_image)) { ?>
								<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
								<?php } else { ?>
								<img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>"
									alt="<?php the_title(); ?>">
								<?php } ?>
							</span>

							<?php } ?>

							<h6 class="text-dark mb-0">
								<?php the_title(); ?>
							</h6>
							<small class="text-muted"> <?php the_time('l, d F Y'); ?> </small>
						</a>
					</div>
					<?php endwhile;
					wp_reset_postdata(); ?>

				</div>
			</div>

			<div class="col-md-3 bg-white px-md-3 p-1">
				<?php echo get_template_part( 'get/categories/category-3' )?>
			</div>
			<!-- temporary segment end	-->
		</div>
	</div>
	</div>
	</div>
</section>