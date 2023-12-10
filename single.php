<?php get_header(); ?>

<!--start wrap-->
<div class="container bg-white p-3">

    <!--start category_and_other-->
    <div class="row mb-2">

        <!--start per_templat_matter-->
        <div class="col-md-8">

            <?php get_template_part('include/breadcrumb'); ?>

            <?php while (have_posts()) :
                the_post(); ?>

                <!--start per_category_image_title_body-->
                <div class="w-100">
                    <?php
                    $subheading = get_field('subheading');
                    if (!empty($subheading)) { ?>
                        <div class="shoulder pb-2">
                            <h5 class="font-weight-bold"> <?php echo $subheading; ?> </h5>
                        </div>
                    <?php } ?>
                    <h2 class="hfPring">
                        <?php the_title(); ?>
                    </h2>
                    <?php setPostViews(get_the_ID()); ?>

                    <p class="bg-b10 py-1 px-2 printMb20">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php
                        $defaultSource = get_field('default_source');
                        $reporter_name = get_field('reporter_name');
                        if (!empty($reporter_name)) {
                            echo $reporter_name;
                        } else {
                            echo $defaultSource;
                        }
                        ?>
                        &nbsp; | &nbsp;
                        <?php the_time('l, d F Y'); ?> &nbsp; | &nbsp;

                        <span class="cursorPointer" onclick="window.print()"> প্রিন্ট <i class="fa fa-print" aria-hidden="true"></i> </span>
                        &nbsp; | &nbsp;
                        <?php echo getPostViews(get_the_ID()); ?>

                        <!-- <?php
                                //$no_option = ot_get_option('yes');

                                //if( $no_option === 'yes' ){ 
                                ?>
                                    &nbsp; | &nbsp; <?php //echo getPostViews(get_the_ID()); 
                                                    ?>
                                <?php //} else {
                                //echo 'no';
                                //}
                                ?> -->

                    </p>
                    <!--start per_category_image_body-->
                    <div class="per_category_image_body">

                        <!--start per_category_image-->
                        <div class="single_category_image wow fadeIn overflow-hidden">
                            <?php
                            $videolink = get_field('embed_code');
                            $fbVideo = get_field('fbVideo');
                            if (!empty($videolink)) { ?>
                                <!--start per_category_image-->
                                <div class="singlePage videoWrapper">
                                    <iframe class="w-100" src="<?php echo $videolink ?>?rel=0&autoplay=1&autohide=1&showinfo=0" frameborder="0"></iframe>
                                </div>
                                <!--//end per_category_image-->
                            <?php } elseif (!empty($fbVideo)) { ?>

                                <div class="fb-video" data-href="<?php echo $fbVideo; ?>" data-show-text="true" data-width="">
                                    <blockquote cite="https://developers.facebook.com/farida.jessi/videos/10222357510547468/" class="fb-xfbml-parse-ignore">
                                        <a href="https://developers.facebook.com/farida.jessi/videos/10222357510547468/"></a>
                                    </blockquote>
                                </div>

                            <?php
                            } elseif ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) {
                                $singleimage =
                                    wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                            ?>

                                <img src="<?php echo $singleimage[0] ?>" alt="<?php the_title(); ?>">
                            <?php } else { ?>

                                <img src="<?php echo get_template_directory_uri() . '/images/730x450px.jpg' ?>">

                            <?php } ?>

                            <?php
                            $caption = get_field('caption');
                            if (!empty($caption)) { ?>
                                <div class="single_caption p-2">
                                    <p class="text-left d-inline">
                                        <?php the_field('caption'); ?>
                                    </p>
                                    <p class="text-right d-inline">
                                        <?php
                                        $defaultSource = get_field('defaultCaption');
                                        if ($defaultSource == '<--ছবির সোর্স সিলেক্ট করুন-->') {
                                            echo '';
                                        } else {
                                            echo $defaultSource;
                                        }
                                        ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                        <!--//end per_category_image-->
                        <!--start per_category_body-->
                        <div class="text-justify wow fadeIn" id="myText">
                            <div class="mb-md-4 mb-2">
                                <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php rawurlencode(the_permalink()); ?>&amp;src=sdkpreparse">Share</a>
                                </div>
                            </div>

                            <div class="overflow-hidden">
                                <?php the_content(); ?>
                            </div>

                            <div class="mb-md-4 mb-2">
                                <div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                                    <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php rawurlencode(the_permalink()); ?>&amp;src=sdkpreparse">Share</a>
                                </div>
                            </div>
                        </div>
                        <!--.end per_category_body-->

                        <div class="row fPOff">
                            <div class="col-12">
                                <?php get_template_part('advertisement/single_page_content_below_1'); ?>
                            </div>
                        </div>


                        <div class="user_initial">
                            <p> Posted
                                <?php the_time(); ?> |
                                <?php the_time('l, d F Y'); ?>
                            </p>
                            <p>
                                <?php bloginfo('name'); ?> |
                                <?php the_author_posts_link(); ?>
                            </p>
                        </div>

                        <?php get_template_part('get/more_read_part');
                        ?>

                    </div>
                    <!--.end per_category_image_body-->
                </div>
                <!--.end per_category_image_title_body-->
            <?php endwhile; ?>

            <?php //echo do_shortcode('[abm_bangladesh_map]'); 
            ?>

            <?php get_template_part('advertisement/single_page_content_below_2_3'); ?>

        </div>
        <!--.end per_templat_matter-->

        <!--start namaz_writer_other-->
        <div class="col-md-4 fPOff">
            <?php get_template_part('advertisement/single_page_right_top_1'); ?>
            <div class="mb-md-4 mb-3">
                <?php get_template_part('get/topMostLatest'); ?>
            </div>
            <?php get_template_part('advertisement/single_page_right_top_2'); ?>
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
                    <div class="row border-bottom mb-2 d-flex justify-content-center align-items-center">
                        <div class="col-4 pr-0 wow slideInLeft">
                            <figure class="figure mb-2 overflow-hidden">
                                <a class="d-block" href="<?php the_permalink(); ?>">

                                    <?php
                                    $videolink = get_field('embed_code');
                                    $fbVideo = get_field('fbVideo');
                                    if (!empty($videolink) or !empty($fbVideo)) {
                                        get_template_part('include/for_400x250px');
                                    } else { ?>
                                        <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px'); ?>
                                        <?php if (!empty($lead_image)) { ?>
                                            <img class="img-fluid" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                        <?php } else { ?>
                                            <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>" alt="<?php the_title(); ?>">
                                        <?php } ?>

                                    <?php } ?>

                                </a>
                            </figure>
                        </div>
                        <div class="col-8 wow slideInRight">
                            <a href="<?php the_permalink(); ?> ">
                                <h2 class="h6"> <a class="text-dark" href="<?php the_permalink(); ?>"> <?php the_title(); ?>
                                    </a> </h2>
                            </a>
                        </div>
                    </div>
                <?php }
                wp_reset_postdata(); ?>
                <!--.end writeup_image_body-->
            </div>
            <?php get_template_part('advertisement/single_page_right_top_3'); ?>
            <div class="mb-md-4 mb-2">
                <?php get_template_part('get/facebookSingle'); ?>
            </div>
            <?php get_template_part('advertisement/single_page_right_top_4'); ?>
            <div class="mb-md-4 mb-2">
                <?php dynamic_sidebar('calender'); ?>
            </div>
            <?php get_template_part('advertisement/single_page_right_top_5'); ?>
            <?php get_template_part('advertisement/single_page_right_top_6'); ?>

        </div>
        <!--.end namaz_writer_other-->
    </div>
    <!--.endcategory_and_other-->
</div>
<!--.end wrap-->
<?php get_footer(); ?>