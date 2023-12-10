<?php
	$catNumber = 20;
	$catId = get_theme_mod('rjs_category_dropdown_{$catNumber}'); //changeable
		if (empty($catId)) {
			$catId = 1; //changeable
		}
	query_posts( array(
		'cat' => $catId, //changeable
		'posts_per_page' => 1,
		'order' => 'DESC'
	)); 
?>
<p class="bg-cat9 py-1 px-2 mb-2">
	<a href="<?php echo get_category_link($catId); ?>">
		<?php echo get_cat_name($catId); ?>
		<!-- category no on off start -->
		<?php if (is_user_logged_in()) { $categoryOnOff = get_theme_mod('npa_category_switcher_id'); if ('0' != $categoryOnOff) { ?>
		<span class="mb-0 text-white text-center bg-danger py-1 px-2"> <?php echo $catNumber;?> </span>
		<?php } } ?>
		<!-- category no on off end -->
	</a>
</p>

<div class="mb-2 last_child_margin_bottom_zero wow zoomIn">
	<?php get_template_part('get/components/loop-medium-image');?>
	<!-- start more 4 piece of news -->
	<?php
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'offset'			=>	1,
					'posts_per_page'    =>  4,
					'order'             =>  'DESC'
				)); 
				while (have_posts()) : the_post();
					get_template_part('get/components/loop-title');
				endwhile; wp_reset_query(); 
			?>
	<!-- /start more 4 piece of news -->
</div>