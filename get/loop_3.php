<div class="col-5 pr-0 wow zoomIn">
    <?php
    $videolink = get_field('embed_code');
    $fbVideo = get_field('fbVideo');
    if (!empty($videolink)  or !empty($fbVideo)) { ?>
        <div class="overflow-hidden">
            <?php get_template_part('include/for_111x120px'); ?>
        </div>
    <?php } else { ?>
        <div class="overflow-hidden">
            <?php
            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '111x120px');
            if (!empty($lead_image)) { ?>
                <img class="fluid-img w-100" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
            <?php } else { ?>
                <img class="fluid-img w-100" src="<?php echo get_template_directory_uri() . '/images/111x120px.jpg' ?>" alt="<?php the_title(); ?>">
            <?php } ?>
        </div>
    <?php } ?>
</div>
<div class="col-7 wow zoomIn">
    <div class="text-dark mb-0 mitulTitle">
        <h6> <a class="text-dark font-weight-bold" href="<?php the_permalink() ?>"> <?php echo short_title(11, '...'); ?> </a> </h6>
    </div>
    <small class="text-muted"> <?php the_time('l, d F Y'); ?> </small>
    <!-- <div class="text-dark mb-0 mitulBody">
        <?php //echo wp_trim_words(get_the_content(), 4, '...'); 
        ?>
    </div> -->
</div>