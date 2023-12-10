<?php while (have_posts()) : the_post(); ?>
    <?php 
        $videolink = get_field('embed_code');
        $fbVideo = get_field('fbVideo');
            if (!empty($videolink) or !empty($fbVideo)) {
                get_template_part('include/for_400x250px_6');
                } else { ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="overflow-hidden mb-md-2 mb-1">
                            <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '272x170px');
                                if (!empty($lead_image)) { ?>
                                <img class="fluid-img w-100" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                                <!-- close overflow div here -->
                        <?php } ?>
                    </div>
                    <h6 class="mb-2 mb-md-3 text-dark-bba hover-bba"> <?php the_title(); ?> </h6>
                    <small class="text-muted border-top border-bottom border-dotted d-block mb-2 mb-md-3"> 
                        <?php the_time('l, d F Y'); ?> 
                    </small>
                </a>
    <?php } ?>
<?php endwhile;	wp_reset_postdata(); ?>