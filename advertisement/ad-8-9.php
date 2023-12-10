
<div class="container bg-white p-md-3 p-2">
	<div class="row">
		<!-- 8 -->
		<div class="col-6 overflow-hidden pl-0">
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
			<img class="img-fluid d-none d-md-block w-100"
				src="<?php echo get_template_directory_uri(); ?>/images/415x125px.jpg" alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>

		<!-- 9 -->
		<div class="col-6 overflow-hidden pr-0">
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
			<img class="img-fluid d-none d-md-block"
				src="<?php echo get_template_directory_uri(); ?>/images/415x125px.jpg"
				alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>
	
	</div>
</div>