<?php get_header();?>

    <!--start wrap-->
    <div class="container">

        <!--start category_and_other-->
        <div class="row">
            <!--start per_templat_matter-->
            <div class="col-md-8 mb-md-5 mb-3">
                <div class="text-uppercase bg-b10 text-el py-1 px-2 mb-3"> আপনি "<?php echo get_search_query();?>" কী ওয়ার্ড দিয়ে সার্চ করেছেন। ফলাফল পাওয়া গেছে       
                    <?php $all_search_result = new WP_Query("s=$s&showposts=-1");?>
                    <?php $count = $all_search_result->post_count;?>
                    <?php echo $count . ''; wp_reset_query();?>টি                            
                </div>
                <?php if(have_posts()):?>
                    <?php
                    while (have_posts()) : the_post(); 
                    get_template_part( 'query/archieve_author_search_design' );
                ?>
        <?php endwhile; endif;?>
                <?php get_template_part('include/pagination');?>
            </div>
            <!--.end per_templat_matter-->
            <!--start namaz_writer_other-->
            <div class="col-md-4">
               <?php get_template_part('advertisement/single_page_right_top_1');?>
                <!--start writeup-->
                <?php dynamic_sidebar('calender');?>
                    <!--.end writeup-->

                    <!--start facebook-->
                    <?php get_template_part('part/facebook');?>
                        <!--.end facebook-->
                    <?php get_template_part('advertisement/single_page_right_top_2');?>    
                    <?php get_template_part('advertisement/single_page_right_top_3');?>    
                    <?php get_template_part('advertisement/single_page_right_top_4');?>    

            </div>
            <!--.end namaz_writer_other-->
        </div>
        <!--.endcategory_and_other-->
    </div>
    <!--.end wrap-->
    <?php get_footer();?>