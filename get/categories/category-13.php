<?php 
	$categoryNumber = 13;
	$catId = get_theme_mod('rjs_category_dropdown_13'); //changeable
					if (empty($catId)) {
						$catId = 1; //changeable
					}
					query_posts(
						array(
							'cat' => $catId,
							//changeable
							'posts_per_page' => 1,
							'order' => 'DESC'
						)
					);
?>

<!-- for showing category name -->
<div class="row">
	<div class="col-12">
		<p class="bg-cat8 py-1 px-2 mb-2">
			<a href="<?php echo get_category_link($catId); ?>">
				<?php echo get_cat_name($catId); ?>
				<!-- category no on off start -->
				<?php if (is_user_logged_in()) {
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
<!-- /for showing category name -->

<div class="row mb-md-4 mb-3">
	<div class="col-md-6">
		<?php get_template_part('get/components/loop-big-image'); ?>
	</div>
	<div class="col-md-6 pl-md-0">
		<?php query_posts( 
				array(
					'cat' => $catId, //changeable
					'posts_per_page' => 5,
					'offset' => 1,
					'order' => 'DESC'
					)); 

					//extra news
					get_template_part( 'get/components/loop-small-image-title');
		?>
	</div>
</div>