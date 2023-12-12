<?php 
/**
 * Template Name: লিংক
 */
get_header(); ?>

<!--start wrap-->
<div class="container bg-white p-3">

    <!--start category_and_other-->
    <div class="row mb-2">

        <!--start per_templat_matter-->
        <div class="col-md-8">
            <?php get_template_part('include/breadcrumb'); ?>


            <?php 
            /**
             * 
             
            <!--start per_templat_matter-->
            <div class="per_templat_matter">
				<?php get_template_part('all_link/bank');?>
				<?php get_template_part('all_link/bima');?>
				<?php get_template_part('all_link/listed_company');?>
            </div>
            <!--.end per_templat_matter-->
*/
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
            <div class="mb-md-3 mb-2">
                
            <?php get_template_part('get/last-news');?>
                
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