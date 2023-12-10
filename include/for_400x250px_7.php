<div class="col-12">

        <div class="mb-2 position-relative">
            <?php
            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
            if (!empty($lead_image)) { ?>
                <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
            <?php } else { ?>
                <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
            <?php } ?>
            <div class="youtube_icon position-absolute w-100 h-100">
                <div class="icon_matter d-flex justify-content-center align-items-center h-100">
                    <h1 class="h2 text-white mb-0"> <i class="fa fa-play-circle-o" aria-hidden="true"></i> </h1>
                </div>
            </div>
            <h6 class="position-absolute bottom-0 bg-tf text-white text-center p-2 w-100 mb-0"> <?php the_title(); ?> </h6>

        </div>
</div>