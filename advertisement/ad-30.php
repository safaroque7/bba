
<div class="container bg-white px-md-3 pb-md-4 pb-3">
	<div class="row">
		<!-- 30 -->
		<div class="col-12 overflow-hidden px-0">
			<?php
			$ad_number = 30;

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
				src="<?php echo get_template_directory_uri(); ?>/images/260xauto.jpg" alt="<?php echo $npa_advertisement_no_link; ?>">
			<?php } ?>
		</div>
	
	
	</div>
</div>