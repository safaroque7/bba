<section class="section1">
	<div class="container bg-white">
		<div class="row p-3">

			<!-- top most last start -->
			<div class="col-md-3 pl-md-0 mb-md-0">
				<?php get_template_part('get/last-news');?>
			</div>
			<!-- top most last end -->

			<!-- /slider strating from -->
			<div class="col-md-6">
				<!-- category no on off start -->
				<?php
					$categoryNumber = 1;
						$catId = get_theme_mod('rjs_category_dropdown_2'); // unique id of the framework
							if (empty($catId)) {
								$catId = 1; //changeable
							}

					// show category number 		
					if (is_user_logged_in()) {
					$categoryOnOff = get_theme_mod('npa_category_switcher_id');
					if ('0' != $categoryOnOff) {?>
				<h3><span class="text-white badge bg-danger"> <?php echo $categoryNumber ?> no category </span></h3>
				<?php }
					}?>
				<!-- category no on off end -->

				<?php
					query_posts(array(
					'cat' => $catId, //changeable
					'posts_per_page' => 5,
					'order' => 'DESC',
					));?>
				<div id="mainSlider" class="carousel slide mb-md-0 mb-3 overflow-hidden	" data-ride="carousel"
					data-interval="5000">
					<?php
						$active = 0;
						while (have_posts()): the_post();
						$active++?>
					<?php if ($active == 1): ?>
					<div class="carousel-item active">
						<?php else: ?>
						<div class="carousel-item">
							<?php endif;?>
							<div class="carousel-inner wow zoomIn">
								<div class="imageBox position-relative">
									<a href="<?php the_permalink();?>">
										<?php
											$videolink = get_field('embed_code');
											$fbVideo = get_field('fbVideo');
											if (!empty($videolink) or !empty($fbVideo)) {
											get_template_part('include/for_542x348px');
											} else {
											$lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '525x310');?>
										<?php if (!empty($lead_image)) {?>
										<img class="img-fluid" src="<?php echo $lead_image[0] ?>"
											alt="<?php the_title();?>">
										<?php } else {?>
										<img src="<?php echo get_template_directory_uri() . '/images/542x348px.jpg' ?>"
											alt="<?php the_title();?>">
										<?php }?>
										<h5
											class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0 hover-bba">
											<?php the_title();?> </h5>

										<?php }?>
									</a>
								</div>
								<a class="carousel-control-prev" href="#mainSlider" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#mainSlider" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>
						<?php endwhile; wp_reset_postdata();?>
					</div>
				</div>
				<!-- /slider strating from -->

				<!-- most read starting from-->
				<div class="col-md-3 pr-md-0 mb-md-0 mb-3">
					<?php get_template_part('get/most-read-news');?>
				</div>
				<!-- /most read starting from-->
			</div>
		</div>

	</div>
	</div>

</section>