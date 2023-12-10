<?php 

    /*

        Template Name: মিডিয়া লিংক

    */

get_header();?>

    <!--start wrap-->

    <div class="container">

        <!--start category_and_other-->

        <div class="row mb-2">

            <!--start per_templat_matter-->

            <div class="col-md-8">



                <!-- no 1 media link -->

                <section class="medialink_section mb-4">

                    <?php

                        $args = array(

                        'post_type'         => 'media_link', // if you want to further filter by post_type

                        'order'             => 'ASC',

                        'posts_per_page'    =>  -1,

                        'tax_query' => array(

                            array(

                            'taxonomy' => 'media',

                            'field' => 'term_id',

                            'terms' => 79 // you need to know the term_id of your term "example 1"

                             )

                          )

                        );

                        $query = new WP_Query( $args ); 

                    ?>



                    <div class="row">

                        <div class="col-12">

                            <p class="text-uppercase bg-b10 py-1 px-2 mb-2"> 

                                 <?php 

                                    $term = get_term( 79, 'media' );

                                    echo $term->name; // Name

                                ?>

                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <?php while($query->have_posts()):$query->the_post(); ?>

                            <?php get_template_part('query/media_icon_link'); ?>

                         <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </section>





                <!-- no 2 media link -->

                <section class="medialink_section mb-4">

                    <?php

                        $args = array(

                        'post_type'         => 'media_link', // if you want to further filter by post_type

                        'order'             => 'ASC',

                        'posts_per_page'    =>  -1,

                        'tax_query' => array(

                            array(

                            'taxonomy' => 'media',

                            'field' => 'term_id',

                            'terms' => 80 // you need to know the term_id of your term "example 1"

                             )

                          )

                        );

                        $query = new WP_Query( $args ); 

                    ?>



                    <div class="row">

                        <div class="col-12">

                            <p class="text-uppercase bg-b10 py-1 px-2 mb-2"> 

                                 <?php 

                                    $term = get_term( 80, 'media' );

                                    echo $term->name; // Name

                                ?>

                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <?php while($query->have_posts()):$query->the_post(); ?>

                            <?php get_template_part('query/media_icon_link'); ?>

                         <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </section>





                <!-- no 3 media link -->

                <section class="medialink_section mb-4">

                    <?php

                        $args = array(

                        'post_type'         => 'media_link', // if you want to further filter by post_type

                        'order'             => 'ASC',

                        'posts_per_page'    =>  -1,

                        'tax_query' => array(

                            array(

                            'taxonomy' => 'media',

                            'field' => 'term_id',

                            'terms' => 81 // you need to know the term_id of your term "example 1"

                             )

                          )

                        );

                        $query = new WP_Query( $args ); 

                    ?>



                    <div class="row">

                        <div class="col-12">

                            <p class="text-uppercase bg-b10 py-1 px-2 mb-2"> 

                                 <?php 

                                    $term = get_term( 81, 'media' );

                                    echo $term->name; // Name

                                ?>

                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <?php while($query->have_posts()):$query->the_post(); ?>

                            <?php get_template_part('query/media_icon_link'); ?>

                         <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </section>



                <!-- no 5 media link -->

                <section class="medialink_section mb-4">

                    <?php

                        $args = array(

                        'post_type'         => 'media_link', // if you want to further filter by post_type

                        'order'             => 'ASC',

                        'posts_per_page'    =>  -1,

                        'tax_query' => array(

                            array(

                            'taxonomy' => 'media',

                            'field' => 'term_id',

                            'terms' => 83 // you need to know the term_id of your term "example 1"

                             )

                          )

                        );

                        $query = new WP_Query( $args ); 

                    ?>



                    <div class="row">

                        <div class="col-12">

                            <p class="text-uppercase bg-b10 py-1 px-2 mb-2"> 

                                 <?php 

                                    $term = get_term( 83, 'media' );

                                    echo $term->name; // Name

                                ?>

                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <?php while($query->have_posts()):$query->the_post(); ?>

                            <?php get_template_part('query/media_icon_link'); ?>

                         <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </section>





                <!-- no 6 media link -->

                <section class="medialink_section mb-4">

                    <?php

                        $args = array(

                        'post_type'         => 'media_link', // if you want to further filter by post_type

                        'order'             => 'ASC',

                        'posts_per_page'    =>  -1,

                        'tax_query' => array(

                            array(

                            'taxonomy' => 'media',

                            'field' => 'term_id',

                            'terms' => 84 // you need to know the term_id of your term "example 1"

                             )

                          )

                        );

                        $query = new WP_Query( $args ); 

                    ?>



                    <div class="row">

                        <div class="col-12">

                            <p class="text-uppercase bg-b10 py-1 px-2 mb-2"> 

                                 <?php 

                                    $term = get_term( 84, 'media' );

                                    echo $term->name; // Name

                                ?>

                            </p>

                        </div>

                    </div>

                    <div class="row">

                        <?php while($query->have_posts()):$query->the_post(); ?>

                            <?php get_template_part('query/media_icon_link'); ?>

                         <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </section>



            </div>

            



            <div class="col-md-4">

	            <?php get_template_part('advertisement/single_page_right_top_1');?>    

	            <div class="mb-4">

	            	<?php get_template_part('get/topMostLatest');?>

	            </div>



	            <div class="mb-4">

	              <?php get_template_part('part/facebookSingle');?>

	            </div>

	            <?php dynamic_sidebar('calender');?>

            </div>

            <!--.end namaz_writer_other-->

        </div>

        <!--.endcategory_and_other-->

    </div>

    <!--.end wrap-->

    <?php get_footer();?>