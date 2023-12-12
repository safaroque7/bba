<?php 
    /*
        Template Name: স্মরণিকা
    */
get_header();?>

<!--start epaper_small_part-->
<div class="epaper_small_part">
    <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(
            'post_type'         => 'e_paper', 
            'posts_per_page'    =>  12,        
            'order'             => 'DESC',
            'paged'             => $paged
        );

        query_posts($args); 
    ?>
    <section class="more_e_paper">
        <div class="container bg-white p-md-3 p-2">
            <div class="row">
                <?php while(have_posts()):the_post();?>
                <!--start epaper_single-->
                <div class="col-md-3 col-xs-6 col-sm-6 mb-3 col-6">
                    <a href="<?php the_permalink();?>">

                        <div class="overflow-hidden mb-md-3 mb-2">
                            <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large');?>
                            <?php if(!empty($lead_image)){ ?>
                            <img class="img-fluid border border-dark mb-2" src="<?php echo $lead_image[0]?>"
                                alt="<?php the_title();?>">
                            <?php } else { ?>
                            <img src="<?php echo get_template_directory_uri().'/images/255x355px-epaper.jpg'?>"
                                alt="<?php the_title();?>">
                            <?php } ?>
                        </div>
                        <h2 class="h5 text-center">
                            <a class="text-dark-bba hover-bba" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
                        </h2>
                    </a>
                </div>
                <!--//end epaper_single-->
                <?php endwhile;?>
            </div>
        </div>
    </section>

    <!--//end minus_epaper_small_part-->
    <?php get_template_part('include/pagination');?>
</div>
<!--//end epaper_small_part-->

<?php get_footer();?>