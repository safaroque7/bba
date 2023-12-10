<?php get_header(); ?>
<!--start wrap-->
<div class="container">
    <div class="row mb-3">
        <div class="col-md-8">
            <!--start per_templat_matter-->
            <h5 class="d-block py-md-2 py-1 px-md-2 px-1 header_bg_1 text-white mb-md-4 mb-2">
                <?php if (have_posts()) : ?>
                    <?php
                    if (is_category()) {
                        single_cat_title();
                    } elseif (is_tag()) {
                        single_tag_title();
                    } elseif (is_author()) {
                        the_post();
                        echo '' . get_the_author();
                        rewind_posts();
                    } elseif (is_day()) {
                        echo '' . get_the_time('d M Y');
                    } elseif (is_month()) {
                        echo '' . get_the_date('F Y');
                    } elseif (is_year()) {
                        echo '' . get_the_date('Y');
                    }
                    ?> -এর পোস্ট করা সব খবর
            </h5>
                <?php
                    while (have_posts()) : the_post(); 
                    get_template_part( 'query/archieve_author_search_design' );
                ?>
        <?php endwhile; endif; ?>

        <div class="my-md-4 my-2">
            <?php get_template_part('include/pagination'); ?>
        </div>
        </div>
        <!--.endcategory_and_other-->
        <div class="col-md-4">
            <?php get_template_part('advertisement/single_page_right_top_1'); ?>
            <div class="mb-md-4 mb-3">
                <?php dynamic_sidebar('calender'); ?>
            </div>
            <?php get_template_part('advertisement/single_page_right_top_2'); ?>
            <?php get_template_part('advertisement/facebook'); ?>
            <?php get_template_part('advertisement/single_page_right_top_3'); ?>
            <?php get_template_part('advertisement/single_page_right_top_4'); ?>
        </div>
    </div>
    <!--start category_and_other-->
</div>
<!--.end wrap-->
<?php get_footer(); ?>