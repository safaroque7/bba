<?php while (have_posts()) : the_post(); ?>
    <div class="col-md px-0 mr-3 border-bottom wow zoomIn custom-padding">
        <div class="row hover-bba">
            <a href="<?php the_permalink(); ?>" class="d-flex justify-content-center align-items-center">
                <div class="col-4 pr-0">
                    <div class="overflow-hidden">
                        <?php
                                                        $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
                                                        if (!empty($lead_image)) { ?>
                        <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>"
                            alt="<?php the_title(); ?>">
                        <?php } ?>
                    </div>
                </div>

                <div class="col-8">
                    <h6 class="mb-0 custom-line-height hover-bba text-dark-bba">
                        <?php echo short_title(10, '...'); ?>
                    </h6>
                    <small class="text-muted"> <?php the_time('l, d F Y'); ?> </small>
                </div>
            </a>
        </div>
    </div>
<?php endwhile; wp_reset_postdata(); ?>