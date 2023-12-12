<section class="section4">
	<div class="container bg-white pt-3">
		<div class="row">
			<div class="col-md-9">
				<?php
					echo get_template_part('get/categories/category-4');
						echo get_template_part('advertisement/ad-8-9');
					echo get_template_part('get/categories/category-5');
						echo get_template_part('advertisement/ad-10-11');
					echo get_template_part('get/categories/category-6');
						echo get_template_part('advertisement/ad-12-13');
					echo get_template_part('get/categories/category-7');
						echo get_template_part('advertisement/ad-14-15');
					echo get_template_part('get/categories/category-8');
						echo get_template_part('advertisement/ad-16-17');
					echo get_template_part('get/categories/category-9');
						echo get_template_part('advertisement/ad-18-19');
					echo get_template_part('get/categories/category-10');
						echo get_template_part('advertisement/ad-20-21');
					echo get_template_part('get/categories/category-11');
						echo get_template_part('advertisement/ad-22-23');
					echo get_template_part('get/categories/category-12');
						echo get_template_part('advertisement/ad-24-25');
					echo get_template_part('get/categories/category-13');
						echo get_template_part('advertisement/ad-26-27');
					echo get_template_part('get/categories/category-14');
						echo get_template_part('advertisement/ad-28-29');
					echo get_template_part('get/categories/category-15');
						echo get_template_part('get/photo-gallery');
				?>
			</div>

			<div class="col-md-3 col-12">
				<?php
						echo get_template_part('advertisement/ad-30');
					echo get_template_part('get/categories/category-16');
						echo get_template_part('advertisement/ad-31');
					echo get_template_part('get/categories/category-17');
						echo get_template_part('advertisement/ad-32');
					echo get_template_part('get/categories/category-18');

					// epaper
					echo get_template_part( 'get/e-paper' );

					// calendar
					dynamic_sidebar('calender');

					// facebook
					echo get_template_part( 'get/facebook' );

					// home page unlimited advertisements spaces
					dynamic_sidebar('right-sidebar');
					
				?>
			</div>
		</div>
	</div>
</section>