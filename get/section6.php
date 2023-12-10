<section class="section4">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-9">
				<?php
				$catId = get_theme_mod('rjs_category_dropdown_14'); //changeable
				if (empty($catId)) {
					$catId = 1; //changeable
				}

				query_posts(
					array(
						'cat' => $catId,
						//changeable
						'posts_per_page' => 5,
						'order' => 'DESC'
					)
				); ?>
				<div class="row">
					<div class="col-12">
						<p class="bg-cat14 py-1 px-2 mb-2">
							<a href="<?php echo get_category_link($catId); ?>">
								<?php echo get_cat_name($catId); ?>
								<!-- category no on off start -->
								<?php
								if (is_user_logged_in()) {
									$categoryOnOff = get_theme_mod('npa_category_switcher_id');
									if ('0' != $categoryOnOff) { ?>
										<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 14 </span>
								<?php }
								} ?>
								<!-- category no on off end -->
							</a>
						</p>
					</div>
				</div>


				<div class="row mb-3 mb-md-0">
					<div class="col-md-8">
						<div id="another_slider" class="carousel slide mb-3 overflow-hidden" data-ride="carousel" data-interval="5000">

							<?php
							$active = 0;

							while (have_posts()) :
								the_post();
								$active++ ?>

								<?php if ($active == 1) : ?>
									<div class="carousel-item active">
									<?php else : ?>
										<div class="carousel-item">
										<?php endif; ?>

										<div class="carousel-inner wow zoomIn">
											<div class="imageBox position-relative">
												<a href="<?php the_permalink(); ?>">

													<?php
													$videolink = get_field('embed_code');
													$fbVideo = get_field('fbVideo');
													if (!empty($videolink) or !empty($fbVideo)) {
														get_template_part('include/for_542x348px');
													} else {
														$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '542x348px'); ?>
														<?php if (!empty($lead_image)) { ?>
															<img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
														<?php } else { ?>
															<img src="<?php echo get_template_directory_uri() . '/images/542x348px.jpg' ?>" alt="<?php the_title(); ?>">
														<?php } ?>
														<h5 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0">
															<?php the_title(); ?>
														</h5>

													<?php } ?>
												</a>
											</div>
											<a class="carousel-control-prev" href="#another_slider" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#another_slider" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>

										</div>

									<?php endwhile; ?>
									</div>
						</div>


						<div class="col-md-4 pl-md-0">
							<?php
							query_posts(
								array(
									'cat' => $catId,
									//changeable
									'posts_per_page' => 5,
									'offset' => 1,
									'order' => 'DESC'
								)
							); ?>

							<?php while (have_posts()) :
								the_post(); ?>
								<div class="col-md px-0 py-2 mr-3 border-bottom wow zoomIn">
									<div class="row">
										<a href="<?php the_permalink(); ?>" class="d-flex justify-content-center align-items-center">
											<div class="col-4 pr-0">
												<div class="overflow-hidden">
													<?php
													$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
													if (!empty($lead_image)) { ?>
														<img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
													<?php } else { ?>
														<img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
													<?php } ?>
												</div>
											</div>
											<div class="col-8">
												<h6 class="text-dark mb-0">
													<?php echo short_title(6, '...'); ?>
												</h6>
												<!-- <small class="text-muted"> (<?php //the_time('l, d F Y');
																													?>) </small> -->
											</div>
										</a>
									</div>
								</div>
							<?php endwhile;
							wp_reset_postdata(); ?>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-12 d-flex justify-content-center align-items-center bg-secondary">
					<div class="overflow-hidden">
						<?php get_template_part('advertisement/ad_10'); ?>
					</div>
				</div>
			</div>
		</div>
</section>