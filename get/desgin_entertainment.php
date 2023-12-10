<div>
    <?php while (have_posts()): the_post(); ?>
        <a href="<?php the_permalink() ?>" class="text-dark mb-0">
            <?php
                $videolink = get_field('embed_code');
                $fbVideo = get_field('fbVideo'); ?>
            <div class="overflow-hidden mb-2">
                <?php
                if (!empty($videolink) or !empty($fbVideo)) {
                    get_template_part('include/for_542x348px');
                } else {
                    $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '542x348px'); ?>
                <?php if (!empty($lead_image)) { ?>
                <img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                <?php } else { ?>
                <img src="<?php echo get_template_directory_uri() . '/images/542x348px.jpg' ?>" alt="<?php the_title(); ?>">
                <?php } ?>
            </div>
            <h5> <?php the_title(); ?> </h5>
                <small class="text-muted border-top border-bottom border-dotted d-block mb-2"> 
                    <?php the_time('l, d F Y'); ?> 
                </small>
            <?php } ?>
        </a>
        <p> <?php echo excerpt('50', '...');?> </p>
    <?php endwhile; ?>
</div>