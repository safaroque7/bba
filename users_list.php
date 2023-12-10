<?php

/**
 *  Template Name: Users List
 */
get_header(); ?>


<div class="container">
    <div class="row">

        <?php
        $blogusers = get_users(array('role__in' => array('subscriber')));
        ?>
        
        <?php

        // Array of WP_User objects.
        foreach ($blogusers as $user) { ?>
            <div class="col-md-4">
                
                <div class="border border-2 border-black p-2">

                <img src = "<?php echo esc_html($user->upload_photo); ?>">
                    <a href="<?php echo get_author_posts_url($user->id);
                                the_author_meta('user_url', $user->id); ?>">
                        <?php



                        echo '<span>' . esc_html($user->display_name) . '</span> <br>';
                        echo '<span>' . esc_html($user->user_login) . '</span> <br>';
                        echo '<span>' . esc_html($user->user_email) . '</span> <br>';
                        echo '<span>' . esc_html($user->user_registered) . '</span> <br>';
                        ?>
                    </a>
                </div>
            </div>
        <?php } ?>

    </div>
</div>



<?php get_footer(); ?>