<div class="container">
    <?php
        $categoryNumber = 1;
        $catId = get_theme_mod('rjs_category_dropdown_photoGallery'); // unique id of the framework
            if (empty($catId)) {
                $catId = 1; //changeable
            }

            query_posts(array(
                'cat' => $catId, //changeable
                'posts_per_page' => 5,
                'order' => 'DESC',
            ));
    ?>

    <div class="row">
        <div class="col-12">

        <!-- for showing category name -->
        <div class="row">
            <div class="col-12">
                <p class="bg-catphotoGallery py-1 px-2 mb-2">
                    <a href="<?php echo get_category_link($catId); ?>">
                        <?php echo get_cat_name($catId); ?>
                        <!-- category no on off start -->
                        <?php if (is_user_logged_in()) {
                                                $categoryOnOff = get_theme_mod('npa_category_switcher_id');
                                                if ('0' != $categoryOnOff) { ?>
                        <span class="mb-0 py-1 px-2"> ফটোগ্যালারি </span>
                        <?php }
                                            } ?>
                        <!-- category no on off end -->
                    </a>
                </p>
            </div>
        </div>
        <!-- /for showing category name -->

            <div id="carouselPhotoGalleryControl" class="carousel zoomIn mb-3 photo" data-ride="carousel" data-interval="5000">

                <?php 
                    $active = 0;
                        while(have_posts()):the_post(); $active++ ?>

                            <?php if ($active == 1) : ?>
                                <div class="carousel-item active">
                                    <?php  else : ?>
                                    <div class="carousel-item">
                                        <?php endif; ?>

                                        <div class="carousel-inner wow zoomIn">
                                            <figure class="figure mb-2 overflow-hidden">

                                                <?php $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'795x410');?>
                                                <?php if(!empty($lead_image)){ ?>


                                                    <a href="<?php echo $lead_image[0]?>" data-lightbox="roadtrip" 
                                                            data-title="<?php the_title();?> ">
                                                            <img class="img-fluid" src="<?php echo $lead_image[0]?>" alt="<?php the_title();?>">
                                                    </a>                                                            


                                                




                                                <?php } else { ?>
                                                <img src="<?php echo get_template_directory_uri().'/images/795x410.jpg'?>"
                                                    alt="<?php the_title();?>">
                                                <?php } ?>

                                            </figure>
                                            <h6 class="text-dark-bba hover-bba"> <?php echo the_title();?> </h6>

                                            <a class="carousel-control-prev" href="#carouselPhotoGalleryControl" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselPhotoGalleryControl" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </div>