<?php
$tvOff = 'off';
if ($tvOff == 'on') { ?>
    <div class="container mb-md-4 md-2">
        <div class="row">
            <div class="col-12">
                <?php
                $special = new WP_Query(array(
                    'post_type'         =>  'tv',
                    'posts_per_page'    =>  1,
                ));
                ?>
                <?php if ($special->have_posts()) :
                    while ($special->have_posts()) : $special->the_post();
                        $expirationtime = get_post_custom_values('expiration');
                        if (is_array($expirationtime)) {
                            $expirestring = implode($expirationtime);
                        }
                        $secondsbetween = strtotime($expirestring) + 75599 - time();
                        if ($secondsbetween > 0) {
                            $videolink = get_field('youtube_video_link');
                            $facebook_video_link = get_field('facebook_video_link');
                            if (!empty($videolink)) { ?>
                                <!--fix tv-->
                                <h2 class="text-center"> <?php the_title(); ?> </h2>
                                <div class="fix videoWrapper">
                                    <iframe src="<?php echo $videolink ?>?autoplay=1&rel=0&autohide=1&showinfo=0&loop=1&controls=0&playlist=<?php the_field('tv_id_loop'); ?>" frameborder="0"></iframe>
                                </div>
                                <!--//end fix tv-->
                            <?php } else if (!empty($facebook_video_link)) { ?>
                                <!-- Your embedded video player code -->
                                <h2 class="text-center">
                                    <a href="<?php echo $facebook_video_link; ?>" target="_blank"> <?php the_title(); ?> </a>
                                </h2>
                                <div class="fb-video" data-href="<?php echo $facebook_video_link; ?>" data-show-text="false">
                                    <div class="fb-xfbml-parse-ignore">
                                        <blockquote cite="<?php echo $facebook_video_link; ?>">
                                        </blockquote>
                                    </div>
                                </div>
                            <?php } ?>
                <?php }
                    endwhile;
                endif;
                wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php } ?>