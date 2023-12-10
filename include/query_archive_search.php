<div class="row">
    <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-4 col-6 wow zoomIn mb-2">
            
                <figure class="figure mb-1">
                    <a class="d-block" href="<?php the_permalink(); ?>">
                    <div class="overflow-hidden">
                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px'); ?>
                        <?php if (!empty($lead_image)) { ?>
                            <img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                        <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                        <?php } ?>
                    </div>
                    </a>
                </figure>
            
            <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
        </div>

    <?php endwhile; ?>
</div>