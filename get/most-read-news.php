<div class="bg-cat3 text-white px-2 py-1"> সর্বাধিক পঠিত </div>

<div>
	<!-- most read  -->
	<div class="specific-height">
		<?php
			query_posts(array(
				'posts_per_page'    =>  10,
				'order'             =>  'DESC'
			)); 
			 while (have_posts()): the_post();?>
				<div class="col-md py-2 px-0 mr-3 border-bottom">
					<div class="row">
						<a href="<?php the_permalink();?>" class="d-flex justify-content-center align-items-center wow zoomIn">
							<?php get_template_part('include/image_for_three')?>

							<div class="col-8">
								<h6 class="text-dark-bba mb-0 hover-bba">
									<?php echo short_title(6, '...'); ?>
								</h6>
								<small class="text-muted"> (<?php echo getPostViews(get_the_ID()); ?>) </small>
							</div>
						</a>
					</div>
				</div>
		<?php endwhile; wp_reset_postdata();?>
	</div>
</div>