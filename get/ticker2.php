<?php
	$catId = 2; //ot_get_option('1_category'); //changeable
	if (empty($catId)) {
		$catId = 1; //changeable
	}
	$newsticker = new WP_Query(array(
		'cat'               =>  $catId, //changeable
		'posts_per_page'    =>  10,
		'order'             =>  'DESC'
	)); 
?>
<div class="container fPOff">
	<div class="row h6 mb-0 border-bottom border-top pt-2 npa-bg-ticker tickerHeight">
		<div class="tickerH text-color-ticker"> <?php echo get_cat_name($catId); ?> >> </div>
		<div class="tickerNewsList">
			<ul id="webticker2" class="overflow-hidden">
				<?php while ($newsticker->have_posts()) : $newsticker->the_post(); ?>
					<li class="text-color-ticker"> <a class="text-color-ticker" href="<?php the_permalink() ?>"> <?php the_title(); ?> </a> </li>
				<?php endwhile;
				wp_reset_query(); ?>
			</ul>
		</div>
	</div>
</div>