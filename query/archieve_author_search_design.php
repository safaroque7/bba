<div class="row">
    <div class="col-12">
        <div class="border-bottom border-dashed">
            <div class="row py-md-3 py-2 justify-content-center align-items-center">
                <!--start archive_search_image_box-->
                <div class="col-4">
                    <a href="<?php the_permalink(); ?>">
                        <div class="overflow-hidden">
                            <?php
                            $videolink = get_field('embed_code');
                            $fbVideo = get_field('fbVideo');
                            if (!empty($videolink) or !empty($fbVideo)) {
                                get_template_part('include/for_400x250px_2');
                            } else { ?>
                            <span class="mb-2 overflow-hidden">
                                <?php
                                $lead_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '400x250px');
                                if (!empty($lead_image)) { ?>
                                <img class="fluid-img" src="<?php echo $lead_image[0] ?>" alt="<?php the_title(); ?>">
                                <?php } else { ?>
                                <img src="<?php echo get_template_directory_uri() . '/images/400x250px.jpg' ?>"
                                    alt="<?php the_title(); ?>">
                                <?php } ?>
                            </span>
                            <?php } ?>
                        </div>
                    </a>
                </div>
                <div class="col-8 pl-0">
                    <h5 class="for_mobile_version_title">
                        <a class="text-dark" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>
                    <div class="source_date">
                        <h6>
                            <span class="d-none d-md-inline-block">
                                <?php $defaultSource = get_field('default_source');
                                    $reporter_name = get_field('reporter_name');
                                if (!empty($reporter_name)) {
                                echo $reporter_name . " |";
                                } else {
                                echo $defaultSource . " |";
                                }
                                ?>
                            </span>
                            <?php the_time('l, d F Y'); ?> <span class="d-none d-md-inline-block"> |
                            <?php echo getPostViews(get_the_ID()); ?> </span>
                        </h6>
                    </div>
                </div>
                <!--.end archive_search_image_box-->
            </div>
        </div>
    </div>
</div>