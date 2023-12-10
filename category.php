<?php get_header(); ?>
<!--start wrap-->
<div class="container">
    <!--start category_and_other-->
    <div class="row mb-4">
        <!--start per_templat_matter-->
        <div class="col-md-8">
            <?php get_template_part('include/breadcrumb'); ?>
            <div class="row">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-md-4 col-6 wow zoomIn mb-3">
                            <figure class="figure mb-2 overflow-hidden">
                                <a class="d-block" href="<?php the_permalink(); ?>">
                                    <?php
                                    $videolink = get_field('embed_code');
                                    $fbVideo = get_field('fbVideo');
                                    if (!empty($videolink) or !empty($fbVideo)) {
                                        get_template_part('include/for_category_page');
                                    } else { ?>

                                        <span class="overflow-hidden">
                                            <?php
                                            $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
                                            if (!empty($lead_image)) { ?>
                                                <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                            <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                                            <?php } ?>
                                        </span>

                                    <?php } ?>
                                </a>
                            </figure>
                            <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
                        </div>
                    <?php endwhile;
                else : ?>
                    <div class="col-12">
                        <p> sorry, there are no post yet, thanks... </p>
                    </div>
                <?php endif; ?>
            </div>
            <?php get_template_part('include/pagination'); ?>
            <div class="row mt-3">
                <div class="col-12">
                    <?php get_template_part('advertisement/single_page_content_below_1'); ?>
                </div>
            </div>
        </div>
        <!--.end per_templat_matter-->

        <!--start namaz_writer_other-->
        <div class="col-md-4">
            <?php get_template_part('advertisement/single_page_right_top_1'); ?>
            <!--start writeup-->
            <div class="w-100">
                <p class="color-el py-1 px-2 header_bg_3 text-white"> এ বিভাগের আরও খবর </p>


                <?php
                $category = get_the_category(); //get first current category ID
                $this_post = $post->ID; // get ID of current post
                $posts = get_posts('numberposts=10&order=DESC&category=' .
                    $category[0]->cat_ID . '&exclude=' .
                    $this_post);
                foreach ($posts as $post) { ?>

                    <div class="row border-bottom mb-2">
                        <a href=" <?php the_permalink(); ?> ">
                            <div class="col-md-3 pr-0 wow slideInLeft">
                                <figure class="figure mb-2 overflow-hidden">
                                    <a class="d-block" href="<?php the_permalink(); ?>">
                                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '515x250'); ?>
                                        <?php if (!empty($lead_image)) { ?>
                                            <img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/images/515x250.jpg' ?>" alt="<?php the_title(); ?>">
                                        <?php } ?>
                                    </a>
                                </figure>

                            </div>

                            <div class="col-md-9 wow slideInRight">
                                <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
                            </div>
                        </a>
                    </div>

                <?php }
                wp_reset_postdata(); ?>
                <!--.end writeup_image_body-->
            </div>
            <!--.end writeup-->

            <?php dynamic_sidebar('calender'); ?>
            <?php get_template_part('advertisement/single_page_right_top_2'); ?>
            <?php get_template_part('advertisement/single_page_right_top_3'); ?>
            <?php get_template_part('advertisement/single_page_right_top_4'); ?>
            <?php get_template_part('advertisement/single_page_right_top_5'); ?>

            <?php get_template_part('advertisement/single_page_right_top_6'); ?>

            <?php get_template_part('part/facebookSingle'); ?>
        </div>
        <!--.end namaz_writer_other-->
    </div>
    <!--.endcategory_and_other-->
</div>
<!--.end wrap-->
<?php get_footer(); ?>