<?php
    $ePaper = new WP_Query(array(
        'post_type'         =>  'e_paper', //changeable
        'posts_per_page'    =>  1,
        'order'             =>  'DESC'
    ));
?>

<div class="row">
    <div class="col-12">
        <p class="bg-cat9 py-1 px-2 mb-2">
            <a href="<?php echo get_category_link($catId); ?>"> ই-পেপার </a>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-12 border-dark mb-3">
        <?php 
            if($ePaper->have_posts()) :
                while ($ePaper->have_posts()) : $ePaper->the_post(); ?>

                <a href="<?php the_permalink(); ?>">
                    <div class="overflow-hidden mb-md-2 mb-1">
                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); 
                                            if (!empty($lead_image)) { ?>
                        <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                        <?php } ?>

                    </div>
                    <h6 class="text-dark-bba mb-0 text-center hover-bba border-bottom pb-md-2 pb-1"> <?php the_title(); ?> </h6>
                </a>

            <?php endwhile; else : ?>
                <div class="overflow-hidden">
                    <img src="<?php echo get_template_directory_uri() . '/images/255x355px-epaper.jpg' ?>" alt="<?php the_title(); ?>">
                </div>
            <?php endif; ?>
    </div>
</div>