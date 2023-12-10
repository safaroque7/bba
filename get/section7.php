<section class="section7">
	<div class="container">
		<div class="row">
			<!-- 15_category -->
			<div class="col-md-3">
				<?php
				$catId = get_theme_mod('rjs_category_dropdown_15'); //changeable
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  1,
					'order'             =>  'DESC'
				)); ?>

				<div class="row">
					<div class="col-12">
						<span class="bg-cat15 py-1 px-2 mb-2 d-block">
							<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
								<!-- category no on off start -->
								<?php
								if (is_user_logged_in()) {
									$categoryOnOff = get_theme_mod('npa_category_switcher_id');
									if ('0' != $categoryOnOff) { ?>
										<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 15 </span>
								<?php }
								} ?>
								<!-- category no on off end -->
							</a>
						</span>
					</div>
				</div>

				<div class="row mb-3 mb-md-0">
					<?php while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="wow zoomIn">

							<?php
							$videolink = get_field('embed_code');
							$fbVideo = get_field('fbVideo');
							if (!empty($videolink)  or !empty($fbVideo)) {
								get_template_part('include/for_400x250px_7');
							} else { ?>
								<div class="col-12">
									<div class="imageBox overflow-hidden">
										<?php
										$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
										if (!empty($lead_image)) { ?>
											<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
										<?php } else { ?>
											<img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
										<?php } ?>
									</div>

									<h6 class="bottom-0 text-dark text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>
								</div>

							<?php } ?>

						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>

				<!-- 16_category -->
				<?php
				$catId = get_theme_mod('rjs_category_dropdown_16'); //changeable
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  1,
					'order'             =>  'DESC'
				)); ?>

				<div class="row">
					<div class="col-12">
						<span class="bg-cat16 py-1 px-2 mb-2 d-block">
							<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
								<!-- category no on off start -->
								<?php
								if (is_user_logged_in()) {
									$categoryOnOff = get_theme_mod('npa_category_switcher_id');
									if ('0' != $categoryOnOff) { ?>
										<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 16 </span>
								<?php }
								} ?>
								<!-- category no on off end -->
							</a>
						</span>
					</div>
				</div>
				<div class="row mb-3 mb-md-0">
					<?php while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="wow zoomIn">
							<?php
							$videolink = get_field('embed_code');
							$fbVideo = get_field('fbVideo');
							if (!empty($videolink)  or !empty($fbVideo)) {
								get_template_part('include/for_400x250px_7');
							} else { ?>
								<div class="col-12">
									<div class="imageBox overflow-hidden">
										<?php
										$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
										if (!empty($lead_image)) { ?>
											<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
										<?php } else { ?>
											<img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
										<?php } ?>
									</div>

									<h6 class="bottom-0 text-dark text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>
								</div>

							<?php } ?>
						</a>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>

			<!-- 17_category -->
			<div class="col-md-6">
				<?php
				$catId = get_theme_mod('rjs_category_dropdown_17'); //changeable
				if (empty($catId)) {
					$catId = 1; //changeable
				}
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'posts_per_page'    =>  5,
					'order'             =>  'DESC'
				)); ?>
				<div class="row">
					<div class="col-12">
						<p class="bg-cat17 py-1 px-2 mb-2">
							<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
								<!-- category no on off start -->
								<?php
								if (is_user_logged_in()) {
									$categoryOnOff = get_theme_mod('npa_category_switcher_id');
									if ('0' != $categoryOnOff) { ?>
										<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 17 </span>
								<?php }
								} ?>
								<!-- category no on off end -->
							</a>
						</p>
					</div>
				</div>

				<div id="photoGallery" class="carousel slide mb-3 overflow-hidden" data-ride="carousel" data-interval="5000">
					<?php
					$active = 0;

					while (have_posts()) : the_post();
						$active++ ?>
						<?php if ($active == 1) : ?>
							<div class="carousel-item active">
							<?php else : ?>
								<div class="carousel-item">
								<?php endif; ?>
								<div class="carousel-inner wow zoomIn">
									<div class="imageBox">
										<a href="<?php the_permalink(); ?>">
											<?php
											$videolink = get_field('embed_code');
											$fbVideo = get_field('fbVideo');
											if (!empty($videolink)  or !empty($fbVideo)) {
												get_template_part('include/for_542x348px');
											} else {
												$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '542x348px'); ?>
												<?php if (!empty($lead_image)) { ?>
													<img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
												<?php } else { ?>
													<img src="<?php echo get_template_directory_uri() . '/images/542x348px.jpg' ?>" alt="<?php the_title(); ?>">
												<?php } ?>
												<h5 class="text-center text-dark p-2 w-100 mb-0"> <?php the_title(); ?> </h5>

											<?php } ?>
										</a>
									</div>
									<a class="carousel-control-prev" href="#photoGallery" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#photoGallery" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
								</div>
							<?php endwhile; ?>
							</div>
				</div>
				<div class="col-md-3 pl-0 mb-3 mb-md-0 text-center overflow-hidden wow zoomIn">
					<?php get_template_part('get/facebook'); ?>
				</div>
			</div>
		</div>
</section>