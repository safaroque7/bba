<a href="<?php the_permalink(); ?>" class="d-flex flex-column wow zoomIn">
        <?php
        $videolink = get_field('embed_code');
        $fbVideo = get_field('fbVideo');
        if (!empty($videolink)  or !empty($fbVideo)) {
                get_template_part('include/for_400x250px_2');
        } else { ?>
                <span class="mb-2 overflow-hidden">
                        <?php
                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
                        if (!empty($lead_image)) { ?>
                                <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                        <?php } ?>
                </span>
                <h6 class="text-dark mb-0 font-weight-bold pb-2">
                        <?php the_title(); ?>
                </h6>
                <!-- <small class="text-muted"> (<?php //the_time('l, d F Y');
                                                        ?>) </small> -->

        <?php } ?>
</a>