<div class="per_logo">
   <?php $mediaImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
    	$url = get_post_meta(get_the_ID(), 'website_link', true);
    
		if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) {
	?>
	
	<a href="<?php echo site_url().'/iframe/?url='.$url; ?>" target="_blank">
		<img src="<?php echo $mediaImage[0]?>" alt="<?php the_title();?>">
	</a>	
	
	<?php } else { ?>
		<a href="<?php echo site_url().'/iframe/?url='.$url; ?>" target="_blank">
			<img src="<?php echo get_template_directory_uri().'/images/160x160px.jpg'?>">
		</a>
	<?php } ?>
	
    <h2> <a href="<?php echo site_url().'/iframe/?url='.$url; ?>" target="_blank"> <?php the_title();?> </a> </h2>
	
</div>