<div class="container">
	<div class="row mb-4">

		<!--22 no category -->
		<div class="col-md-3 mb-3 mb-md-0">
			<?php
			$catId = get_theme_mod('rjs_category_dropdown_22'); //changeable
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
					<p class="bg-cat22 py-1 px-2 mb-2">
						<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
							<!-- category no on off start -->
							<?php
							if (is_user_logged_in()) {
								$categoryOnOff = get_theme_mod('npa_category_switcher_id');
								if ('0' != $categoryOnOff) { ?>
									<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 22 </span>
							<?php }
							} ?>
							<!-- category no on off end -->
						</a>
					</p>
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-12">
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('query/loop1'); ?>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>

			<div class="row">
				<?php
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'offset'			=> 1,
					'posts_per_page'    =>  4,
					'order'             =>  'DESC'
				)); ?>

				<div class="col-12">
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('query/loop2'); ?>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>

			</div>
		</div>

		<!-- 23 no category -->
		<div class="col-md-3 mb-3 mb-md-0">
			<?php
			$catId = get_theme_mod('rjs_category_dropdown_23'); //changeable
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
					<p class="bg-cat23 py-1 px-2 mb-2">
						<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
							<!-- category no on off start -->
							<?php
							if (is_user_logged_in()) {
								$categoryOnOff = get_theme_mod('npa_category_switcher_id');
								if ('0' != $categoryOnOff) { ?>
									<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 23 </span>
							<?php }
							} ?>
							<!-- category no on off end -->
						</a>
					</p>
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-12">
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('query/loop1'); ?>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>

			<div class="row">
				<?php
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'offset'			=> 1,
					'posts_per_page'    =>  4,
					'order'             =>  'DESC'
				)); ?>

				<?php while (have_posts()) : the_post(); ?>

					<div class="col-12">
						<?php get_template_part('query/loop2'); ?>
					</div>

				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>

		<!-- 24 no category -->
		<div class="col-md-3 mb-3 mb-md-0">
			<?php
			$catId = get_theme_mod('rjs_category_dropdown_24'); //changeable
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
					<p class="bg-cat24 py-1 px-2 mb-2">
						<a href="<?php echo get_category_link($catId); ?>"> <?php echo get_cat_name($catId); ?>
							<!-- category no on off start -->
							<?php
							if (is_user_logged_in()) {
								$categoryOnOff = get_theme_mod('npa_category_switcher_id');
								if ('0' != $categoryOnOff) { ?>
									<span class="mb-0 text-white text-center bg-danger py-1 px-2"> 24 </span>
							<?php }
							} ?>
							<!-- category no on off end -->
						</a>
					</p>
				</div>
			</div>

			<div class="row pb-2">
				<div class="col-12">
					<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part('query/loop1'); ?>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>

			<div class="row">
				<?php
				query_posts(array(
					'cat'               =>  $catId, //changeable
					'offset'			=> 1,
					'posts_per_page'    =>  4,
					'order'             =>  'DESC'
				)); ?>

				<?php while (have_posts()) : the_post(); ?>

					<div class="col-12">
						<?php get_template_part('query/loop2'); ?>
					</div>

				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>

		<!-- calender -->
		<div class="col-md-3">
			<?php dynamic_sidebar('np_archieve'); ?>
			<br>
			<div class="overflow-hidden">
				<?php echo get_template_part('advertisement/ad_13'); ?>
			</div>
		</div>

	</div>
</div>