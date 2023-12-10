<?php get_header();?>

<div class="container">
    <div class="row">
        <div class="col-12">
            
            <?php get_template_part('include/breadcrumb');?>
                
                <?php while(have_posts()):the_post();?>

                <!--start per_category_image_title_body-->
                <div class="per_category_image_title_body">

                    <h2 class="text-center text-dark"> <?php the_title(); ?> </h2>
                    <?php the_content(); ?>

                    <div class="a2a_kit a2a_default_style">
                        <a class="a2a_button_facebook">
                            <img src="https://static.addtoany.com/buttons/custom/facebook-icon-long-shadow.png" border="0" alt="Facebook" width="27" height="27">
                        </a>
                        <a class="a2a_button_twitter">
                            <img src="https://static.addtoany.com/buttons/custom/twitter-icon-long-shadow.png" border="0" alt="Twitter" width="27" height="27">
                        </a>
                        <a class="a2a_dd" href="https://www.addtoany.com/share">
                            <img src="https://static.addtoany.com/buttons/custom/addtoany-icon-long-shadow.png" border="0" alt="Share" width="27" height="27">
                        </a>
                    </div>

                    <script async src="https://static.addtoany.com/menu/page.js"></script>

                </div>
                <!--.end per_category_image_title_body-->
			
        			
	            <?php endwhile; ?>
        </div>

        <div class="d-flex d-flex-row">
            <?php previous_post_link(); ?>
            <?php next_post_link(); ?>
        </div>
    </div>
</div>

<?php get_footer();?>