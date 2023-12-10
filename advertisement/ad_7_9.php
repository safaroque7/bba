<div class="container">
	<div class="row mb-md-4 my-2 my-md-0">
		<!-- 7 -->
		<div class="col-md-4 col-12">
			<?php
			$ad_number = 7;

			$npa_ad_id = get_theme_mod('npa_ad_id');
			if ($npa_ad_id == $ad_number) { ?>
				<span class="badge badge-danger"> <?php echo $ad_number; ?> No. advertisement</span>
			<?php }

			$npa_advertisement_no_google_adSense = get_theme_mod('npa_advertisement_no_' . $ad_number . '_google_adSense');
			$npa_advertisement_no_upload = get_theme_mod('npa_advertisement_no_' . $ad_number . '_upload');
			$npa_advertisement_no_link = get_theme_mod('npa_advertisement_no_' . $ad_number . '_link');

			if (!empty($npa_advertisement_no_google_adSense)) {
				echo $npa_advertisement_no_google_adSense;
			} else if (!empty($npa_advertisement_no_upload)) { ?>
				<a href="<?php echo $npa_advertisement_no_link; ?>" target="_blank">
					<img src="<?php echo $npa_advertisement_no_upload; ?>" alt="<?php echo $npa_advertisement_no_link; ?>">
				</a>
			<?php } else { ?>
				<img class="img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/350x120px.jpg" alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>
		<!-- 8 -->
		<div class="col-md-4 col-12 my-2 my-md-0">
			<?php
			$ad_number = 8;

			$npa_ad_id = get_theme_mod('npa_ad_id');
			if ($npa_ad_id == $ad_number) { ?>
				<span class="badge badge-danger"> <?php echo $ad_number; ?> No. advertisement</span>
			<?php }

			$npa_advertisement_no_google_adSense = get_theme_mod('npa_advertisement_no_' . $ad_number . '_google_adSense');
			$npa_advertisement_no_upload = get_theme_mod('npa_advertisement_no_' . $ad_number . '_upload');
			$npa_advertisement_no_link = get_theme_mod('npa_advertisement_no_' . $ad_number . '_link');

			if (!empty($npa_advertisement_no_google_adSense)) {
				echo $npa_advertisement_no_google_adSense;
			} else if (!empty($npa_advertisement_no_upload)) { ?>
				<a href="<?php echo $npa_advertisement_no_link; ?>" target="_blank">
					<img src="<?php echo $npa_advertisement_no_upload; ?>" alt="<?php echo $npa_advertisement_no_link; ?>">
				</a>
			<?php } else { ?>
				<img class="img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/350x120px.jpg" alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>
		<!-- 9 -->
		<div class="col-md-4 col-12">
			<?php
			$ad_number = 9;

			$npa_ad_id = get_theme_mod('npa_ad_id');
			if ($npa_ad_id == $ad_number) { ?>
				<span class="badge badge-danger"> <?php echo $ad_number; ?> No. advertisement</span>
			<?php }

			$npa_advertisement_no_google_adSense = get_theme_mod('npa_advertisement_no_' . $ad_number . '_google_adSense');
			$npa_advertisement_no_upload = get_theme_mod('npa_advertisement_no_' . $ad_number . '_upload');
			$npa_advertisement_no_link = get_theme_mod('npa_advertisement_no_' . $ad_number . '_link');

			if (!empty($npa_advertisement_no_google_adSense)) {
				echo $npa_advertisement_no_google_adSense;
			} else if (!empty($npa_advertisement_no_upload)) { ?>
				<a href="<?php echo $npa_advertisement_no_link; ?>" target="_blank">
					<img src="<?php echo $npa_advertisement_no_upload; ?>" alt="<?php echo $npa_advertisement_no_link; ?>">
				</a>
			<?php } else { ?>
				<img class="img-fluid d-none d-md-block" src="<?php echo get_template_directory_uri(); ?>/images/350x120px.jpg" alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>
	</div>
</div>