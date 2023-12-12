<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js mt-0">

<head>

    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="refresh" content="10800">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords"
        content="bankbimaarthonity.com, bankbimaarthonity, bank bima arthonity, sheikh hasina, beguam khaleda zia, hossain mohammad ershad, shakib al hasan, cricket, bangla online news portal, ব্যাংকবীমাঅর্থনীতি.কম, ব্যাংক, ব্যাংক বীমা, অর্থনীতি, লোন, ব্যাংক হিসাব, ব্যাংক একাউন্ট, শেয়ারবাজার, বাংলাদেশ, শেখ হাসিনা, বেগম খালেদা জিয়া, হুসেইন মুহাম্মদ এরশাদ, সাকিব আল হাসান, ক্রিকেট, মুস্তাফিজ, অনলাইন নিউজ পোর্টাল, মুস্তাফিজ, কাটার মাস্টার">

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" type="image/x-icon">
    <?php wp_head();?>

    <style>
        /*theme color*/
        .top_search.mobileVersion,
        .main_menu.MobileMenu,
        .tagClass ul li a:hover,
        .page_number_menu h5::before,
        .page_number_menu h5::after,
        .epaper_single>p,
        .e_paper_caption>h2,
        .category_alter_image,
        .more_read_section,
        .photo_gellary .bx-wrapper .bx-pager.bx-default-pager a,
        .wpcf7-form input[type="reset"],
        .wpcf7-form-control.wpcf7-submit,
        .footer_part h2,
        .video_slider h2,
        .category_menu,
        .main_menu_box,
        .for_search,
        .per_category_image,
        .archive_heading,
        .archiveBox h2,
        .photo_gellary,
        .q_icon a,
        .qaomisongbad,
        .writeup>h2,
        .writeup>h2>a,
        .namaz_title>h2,
        .category_inner_right_image,
        .category_image,
        .main_slider .bx-wrapper .bx-viewport,
        .category>h2>a,
        .q_slider,
        .last_part>h2,
        #today {
            background: <?php //echo ot_get_option('npa_category_bg_id_22');
                ?> none repeat scroll 0 0;
        }

        .design_by h2 a,
        .design_by {
            color: <?php //echo ot_get_option('footer2_text_color'); ?>
        }

        .footter_social_bar {
            background: <?php ////echo ot_get_option('footer2_bg_color') ?>
        }

        /*menu active color*/
        /* .page-numbers:hover,
        .next.page-numbers:hover,
        .page-numbers.current,
        .current-menu-parent>a,
        .bx-wrapper .bx-pager.bx-default-pager a:hover,
        .bx-wrapper .bx-pager.bx-default-pager a.active {
            background: <?php ////echo ot_get_option('menu_active_color_id');
?> none repeat scroll 0 0 !important;
        }
 */
        .for_mobile_version_title a:hover,
        .title_for_hover a:hover,
        h6>a.text-dark:hover,
        .mitulTitle>h6>a:hover,
        a h6:hover,
        a>h5:hover,
        h6>a:hover,
        .h6>a:hover {
            color: <?php //echo ot_get_option('menu_active_color_id'); ?> !important;
        }

        .tagTopics a.text-dark:hover {
            background: <?php //echo ot_get_option('header_bg_1'); ?>;
                color: white !important;
        }

        /*menu ul li border right*/
        .main_menu ul li {
            border-right: 1px solid <?php //echo ot_get_option('menu_ul_li_right_border_id'); ?>;
                border-left: 1px solid <?php //echo ot_get_option('menu_ul_li_left_border_id');
                ?>
        }

        .main_menu ul li ul li,
        .menu-top-menu>.menu>li {
            border-bottom: 1px solid <?php //echo ot_get_option('menu_ul_li_right_border_id');
                ?>;
            border-top: 1px solid <?php //echo ot_get_option('menu_ul_li_left_border_id');
                ?>;
        }

        .main_menu_box,
        .main_menu_box {
            border-bottom: 5px solid <?php //echo ot_get_option('menu_active_color_id');
                ?>;
        }

        .eNewsSticker {
            border-bottom: 1px solid <?php //echo ot_get_option('theme_color_id');
                ?>;
        }

        .eNewsSticker>h2 {
            border-right: 1px solid <?php //echo ot_get_option('theme_color_id'); ?>
        }


        .position_name h1 {
            border-bottom: 1px solid <?php //echo ot_get_option('theme_color_id'); ?>
        }

        .single_category_body p a,
        .per_category_list_title ul li span,
        .per_category_list_title ul li a:hover,
        .per_category_image_title h2 a:hover,
        .usa_category_title>p>a:hover,
        .usa_category_title h2 a:hover,
        .has-post,
        .q_icon a,
        .media_list ul li a:hover,
        .media_list ul li:before,
        .qaomisongbad_news_list ul li,
        .archive_category_title h2 a:hover,
        .per_category_body>p>a:hover,
        .writeup_title>p>a:hover,
        .caption a:hover,
        .caption>h2>a:hover,
        .per_category_image_title_body h2 a:hover,
        .qaomisongbad_news_list ul li a:hover,
        .writeup_title>h2>a:hover,
        .down_arrow:hover,
        .namaz_title>h2:hover,
        .category_title h2 a:hover,
        .category_inner_right_title>h2>a:hover,
        .main_slider .bx-wrapper .bx-viewport .bxslider li .caption h2 a:hover,
        .last_part ul li a:hover,
        .latest_news ul li a:hover {
            color: <?php //echo ot_get_option('theme_color_id');
                ?>
        }

        .epaper_single {
            border: 1px solid <?php //echo ot_get_option('theme_color_id'); ?>;
        }

        #epaper_slides,
        .archiveBox {
            border: 2px solid <?php //echo ot_get_option('theme_color_id'); ?>;
        }

        #my-calendar thead tr th,
        .notday,
        #my_year,
        #my_month,
        .page-numbers,
        .page-numbers.current {
            border: 1px solid <?php //echo ot_get_option('theme_color_id'); ?>
        }

        .header_bg_1 {
            background: <?php //echo ot_get_option('header_bg_1'); ?> none repeat scroll 0 0 !important;
        }


        /* ul.dropdown-menu.show,
        .header_bg_3 {
            background: <?php ////echo ot_get_option('header_bg_3');
?> none repeat scroll 0 0 !important;
        } */

        .breaking {
            display: <?php //echo ot_get_option('breaking_on_of_id'); ?>;
        }

        /* npa_theme_bg_cl */
        .header_bg_3,
        .npa_theme_bg_cl {
            background:
                <?php $date_and_search_bar_background_setting=get_theme_mod('date_and_search_bar_background_setting');
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($date_and_search_bar_background_setting)) {
                echo $date_and_search_bar_background_setting;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        /* npa-bg-ticker */
        .npa-bg-ticker {
            background:
                <?php $npa_scroll_bg=get_theme_mod('npa_scroll_bg');
            echo $npa_scroll_bg;
            ?>;
        }

        /* npa-ticker-text-color */
        .tickerH.text-color-ticker,
        #webticker .text-color-ticker a {
            color: white;
            <?php $npa_scroll_text_color=get_theme_mod('npa_scroll_text_color');
            echo $npa_scroll_text_color;
            ?>;
        }

        /* menu text color */
        ul#faroqueId li a,
        .header-bangla-date p,
        .medialink a {
            color: <?php $npa_theme_text_color=get_theme_mod('npa_theme_text_color');
            $date_and_search_bar_color_setting=get_theme_mod('date_and_search_bar_color_setting');

            if ( !empty($date_and_search_bar_color_setting)) {
                echo $date_and_search_bar_color_setting;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>;
        }

        .medialink {
            border: 1px solid <?php $textColorCat=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo '#ffffff';
            }

            ?>;
        }

        .medialink {
            border: 1px solid <?php $npa_theme_text_color=get_theme_mod('npa_theme_text_color');
            $date_and_search_bar_color_setting=get_theme_mod('date_and_search_bar_color_setting');

            if ( !empty($date_and_search_bar_color_setting)) {
                echo $date_and_search_bar_color_setting;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>;
        }

        .serchButtonHeader {
            background: <?php $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');
            $date_and_search_bar_background_setting=get_theme_mod('date_and_search_bar_background_setting');

            if ( !empty($date_and_search_bar_background_setting)) {
                echo $date_and_search_bar_background_setting;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
            border: 1px solid <?php $npa_theme_text_color=get_theme_mod('npa_theme_text_color');
            $date_and_search_bar_color_setting=get_theme_mod('date_and_search_bar_color_setting');

            if ( !empty($date_and_search_bar_color_setting)) {
                echo $date_and_search_bar_color_setting;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>;

        }

        .serchButtonHeader i {

            color: <?php $npa_theme_text_color=get_theme_mod('npa_theme_text_color');
            $date_and_search_bar_color_setting=get_theme_mod('date_and_search_bar_color_setting');

            if ( !empty($date_and_search_bar_color_setting)) {
                echo $date_and_search_bar_color_setting;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>;
        }

        .form-control {
            border: 1px solid <?php $npa_theme_text_color=get_theme_mod('npa_theme_text_color');
            $date_and_search_bar_color_setting=get_theme_mod('date_and_search_bar_color_setting');

            if ( !empty($date_and_search_bar_color_setting)) {
                echo $date_and_search_bar_color_setting;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>;
        }


        .header_bg_2 {
            background: <?php $npa_main_logo_bg_color=get_theme_mod('npa_main_logo_bg_color');

            if ( !empty($npa_main_logo_bg_color)) {
                echo $npa_main_logo_bg_color;
            }

            ?>;
        }



        ul.dropdown-menu.show,
        .npa_theme_bg_c2 {
            background: <?php $npa_menubar_bg_text_color_setting=get_theme_mod('npa_menubar_bg_text_color_setting');
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($npa_menubar_bg_text_color_setting)) {
                echo $npa_menubar_bg_text_color_setting;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        .current-menu-item>a {
            background:
                <?php $npa_active_menu=get_theme_mod('npa_active_menu_bg');

            if ( !empty($npa_active_menu)) {
                echo $npa_active_menu;
            }

            ?>;
            color: <?php $npa_menubar_active_text_setting=get_theme_mod('npa_menubar_active_text_setting');

            if ( !empty($npa_menubar_active_text_setting)) {
                echo $npa_menubar_active_text_setting;
            }

            ?> !important;
        }

        ul#faroqueId li a:hover {
            background: <?php $npa_active_menu=get_theme_mod('npa_active_menu_bg');

            if ( !empty($npa_active_menu)) {
                echo $npa_active_menu;
            }

            ?>;
            transition: all 0.5s;
        }


        ul#faroqueId li {
            <?php $npa_menu_left_border=get_theme_mod('npa_menu_left_border');

            if ( !empty($npa_menu_left_border)) {
                echo 'border-left: 1px solid '. $npa_menu_left_border;
            }

            ?>;
            <?php $npa_menu_right_border=get_theme_mod('npa_menu_right_border');

            if ( !empty($npa_menu_right_border)) {
                echo 'border-right: 1px solid'. $npa_menu_right_border;
            }

            ?>;
        }

        .footer1_color_id {
            background:
                <?php $npa_footer_background_setting=get_theme_mod('npa_footer_background_setting');

            if ( !empty($npa_footer_background_setting)) {
                echo $npa_footer_background_setting;
            }

            ?>;
        }

        .fotter_text_color_id {
            color: <?php $npa_footer_text_color_setting=get_theme_mod('npa_footer_text_color_setting');

            if ( !empty($npa_footer_text_color_setting)) {
                echo $npa_footer_text_color_setting;
            }

            ?>;
            ;
        }

        .footer2_color_id {
            background:
                <?php $npa_footer_dd_background_setting=get_theme_mod('npa_footer_dd_background_setting');
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($npa_footer_dd_background_setting)) {
                echo $npa_footer_dd_background_setting;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;

            color: <?php $npa_footer_dd_text_setting=get_theme_mod('npa_footer_dd_text_setting');
            $textColorCat=get_theme_mod('npa_theme_text_color');

            if ( !empty($npa_footer_dd_text_setting)) {
                echo $npa_footer_dd_text_setting;
            }

            else {
                echo $textColorCat;
            }

            ?>;
        }

        .footer2_text_color {
            color: <?php $npa_footer_dd_text_setting=get_theme_mod('npa_footer_dd_text_setting');
            $textColorCat=get_theme_mod('npa_theme_text_color');

            if ( !empty($npa_footer_dd_text_setting)) {
                echo $npa_footer_dd_text_setting;
            }

            else {
                echo $textColorCat;
            }

            ?>;
        }

        /* cateogyr No 3 */
        <?php $catIdEx=3;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' li a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 4 */
        <?php $catIdEx=4;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }


        /* cateogyr No 5 */
        <?php $catIdEx=5;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        .editorAdvisorEditor {
            border-bottom: 5px solid <?php $bgCat=get_theme_mod('npa_category_bg_id_5');
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
            ;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 6 */
        <?php $catIdEx=6;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }


        /* cateogyr No 7 */
        <?php $catIdEx=7;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 8 */
        <?php $catIdEx=8;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 9 */
        <?php $catIdEx=9;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 10 */
        <?php $catIdEx=10;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 11 */
        <?php $catIdEx=11;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 12 */
        <?php $catIdEx=12;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 13 */
        <?php $catIdEx=13;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 14 */
        <?php $catIdEx=14;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 15 */
        <?php $catIdEx=15;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }


        /* For Photo Gallery */
        <?php $catIdEx='photoGallery';
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }


       /* cateogyr No 16 */
        <?php $catIdEx=16;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 17 */
        <?php $catIdEx=17;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 18 */
        <?php $catIdEx=18;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 19 */
        <?php $catIdEx=19;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 20 */
        <?php $catIdEx=20;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 21 */
        <?php $catIdEx=21;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 22 */
        <?php $catIdEx=22;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 23 */
        <?php $catIdEx=23;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 24 */
        <?php $catIdEx=24;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 25 */
        <?php $catIdEx=25;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        /* cateogyr No 26 */
        <?php $catIdEx=26;
        echo '.'. 'bg-cat'. $catIdEx;

        ?> {
            background:
                <?php $bgCat=get_theme_mod('npa_category_bg_id_'. $catIdEx);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($bgCat)) {
                echo $bgCat;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>;
        }

        <?php echo '.'. 'bg-cat'. $catIdEx . ' a';

        ?> {
            color:
                <?php $textColorCat=get_theme_mod('npa_category_text_id_'. $catIdEx);
            $npa_theme_text_color=get_theme_mod('npa_theme_text_color');

            if ( !empty($textColorCat)) {
                echo $textColorCat;
            }

            else {
                echo $npa_theme_text_color;
            }

            ?>
        }

        .bg-soronika {
            background:
                <?php $catId='bg-cat'. '6';
            $catId=get_theme_mod($catId);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($catId)) {
                echo $catId;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>
        }


        .bg-calender {
            background:
                <?php $catId='bg-calender';
            $catId=get_theme_mod($catId);
            $npa_theme_bg_color=get_theme_mod('npa_theme_bg_color');

            if ( !empty($catId)) {
                echo $catId;
            }

            else {
                echo $npa_theme_bg_color;
            }

            ?>
        }



        /* category background color end */

        /* Mobile Layout: 320px.*/
        <blade media|%20only%20screen%20and%20(max-width%3A%20767px)%20%7B>.main_menu ul li {
            border-bottom: 1px solid <?php //echo ot_get_option('menu_ul_li_right_border_id');
                ?>;
            border-top: 1px solid <?php //echo ot_get_option('menu_ul_li_left_border_id');
                ?>;
        }

        #fixedheadertop {
            display: none !important;
        }
        }

        nav.navbar {
            padding: 0;
        }

        ul#faroqueId li {
            margin-bottom: 0;
        }
    </style>

</head>



<body <?php body_class();?>>

    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v16.0" nonce="bQRD7N6q"></script> -->


    <!--start faceboo head code-->
    <section class="headerearnnlive mb-md-4 mb-2 d-none d-md-block bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php get_template_part('get/special_ad');?>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-el wow slideInDown npa_theme_bg_cl">
            <!--start for_search-->
            <div class="container">
                <div class="row py-1">
                    <!--.end main_logo_add-->

                    <div class="col-md-5 header-bangla-date h6 mb-0 py-1 footerPrintCenter">
                        <p class="mb-0 pt-2">
                            <?php echo do_shortcode('[bangla_day]');
?>
                            <?php echo do_shortcode('[english_date]');
?> | <?php echo do_shortcode('[bangla_date]'); ?>
                        </p>
                    </div>
                    <!--.end date_and_time-->

                    <span class="col-4 py-1 ">
                        <?php echo get_template_part('get/aboutusMedialinkContact');
?>
                    </span>

                    <!--start top_search-->
                    <div class="col-md-3">
                        <?php get_search_form();?>
                    </div>
                    <!--.end top_search-->
                </div>
            </div>
        </div>
        <!--.end for_search-->

        <!--start main_logo_add-->
        <div class="container-fluid header_bg_2 py-3 py-md-4 pb-md-4 pb-3">
            <div class="container">
                <div
                    class="row d-flex justify-content-between wow slideInDown <?php echo get_theme_mod('npa_main_logo_position'); ?>">
                    <div class="col-md-3 ">
                        <?php get_template_part('get/main_logo');?>
                    </div>
                    <div class="col-md-9 d-flex">

                        <div class="col-4 overflow-hidden">
                            <div class="overflow-hidden">
                                <?php get_template_part('advertisement/ad-1');?>
                            </div>
                        </div>
                        <div class="col-4 overflow-hidden">
                            <?php get_template_part('advertisement/ad-2')?>
                        </div>
                        <div class="col-4 overflow-hidden">
                            <?php get_template_part('advertisement/ad-3')?>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--start main_menu_box-->
        <div class="container-fluid bg-el mb-md-4 mb-3 npa_theme_bg_c2 fPOff" id="mainMenuW">
            <!--start main_menu-->
            <div class="container mainMenuF wow flipInX">
                <nav class="navbar navbar-expand-lg d-flex">
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbarNav">
                        <?php
wp_nav_menu(
    array(
        'theme_location' => __('topMenu'),
        'menu_class' => 'nav navbar-nav',
        'menu_id' => 'faroqueId',
        'container' => '',
        'add_li_class' => 'nav-item mb-0 text-white mb-0',
        'walker' => new wp_bootstrap_navwalker(),
    )
);
?>
                    </div>
                </nav>
            </div>
            <!--.end main_menu-->
        </div>
        <!--.end main_menu_box-->
        <?php// get_template_part('get/ticker');?>
    </section>

    <?php
/**


<section>
<div class="container mb-3 d-md-block d-none">
<div class="row">
<div class="col-6">
<div class="overflow-hidden">
<?php get_template_part('advertisement/ad_1');?>
    </div>
    </div>
    <div class="col-6">
        <div class="overflow-hidden">
            <?php get_template_part('advertisement/ad_2');?>
        </div>
    </div>
    <!-- <div class="col-4">
<div class="overflow-hidden">
<?php //get_template_part('advertisement/ad_3'); ?>
</div>
</div> -->
    </div>
    </div>
    </section>

    *

    */
    ?>


    <!-- sticky part start  -->
    <section class="fixedHeader sticky-top position-fixed w-100 fPOff" id="fixedheadertop">
        <!--start main_menu_box-->
        <div class="container-fluid mb-md-4 mb-2 npa_theme_bg_cl">

            <!--start main_menu-->
            <div class="container mainMenuF wow flipInX">
                <nav class="navbar navbar-expand-lg d-flex">
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" id="navbarNav">
                        <?php
wp_nav_menu(
    array(
        'theme_location' => __('topMenu'),
        'menu_class' => 'nav navbar-nav',
        'menu_id' => 'faroqueId',
        'container' => '',
        'add_li_class' => 'nav-item mb-0 text-white mb-0',
        'walker' => new wp_bootstrap_navwalker(),
    )
);
?>
                    </div>
                </nav>
            </div>
            <!--.end main_menu-->
        </div>
        <!--.end main_menu_box-->
    </section>
    <!-- sticky part end -->

    <!-- mobile version start -->
    <section class="mobileVersion d-block d-md-none fPOff">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center npa_theme_bg_cl py-1 mb-3">
                <?php echo get_template_part('get/aboutusMedialinkContact');
?>
            </div>

            <div class="row d-flex align-items-center justify-content-center mb-3">
                <div class="col-2 text-center" data-target="#searchBoxM" data-toggle="collapse" aria-expanded="true">
                    <i class="fa fa-search border border-dark rounded p-2" aria-hidden="true"></i>
                </div>
                <div class="col-8">
                    <?php echo get_template_part('get/main_logo'); ?>
                </div>
                <div id="mobile_version_menu_bar" class="col-2 text-center" data-target="#mainMenuResponsive"
                    data-toggle="collapse" aria-expanded="true">
                    <i class="fa fa-bars border border-dark rounded p-2" aria-hidden="true"></i>
                </div>
            </div>

            <div class="mb-3">
                <?php get_template_part('get/ticker2');?>
            </div>

            <div class="row m-auto header_bg_1 mb-3 collapse" id="searchBoxM">
                <?php get_search_form();?>
            </div>

            <div class="row mx-auto mb-3 collapse" id="mainMenuResponsive">
                <div class="for_cross_sign position-relative">
                    <!--start main_menu-->

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => __('topMenu'),
                            'menu_class' => 'nav navbar-nav',
                            'menu_id' => 'faroqueId',
                            'container' => '',
                            'add_li_class' => 'nav-item mb-0 text-white mb-0',
                            'walker' => new wp_bootstrap_navwalker(),
                        )
                    );
?>

                    <!--.end main_menu-->
                    <div class="btn position-absolute cancel_button"> <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- mobile version end -->

    <div class="container bg-white mb-md-3 mb-1 overflow-hidden">
        <div class="row">
            <div class="col-12 p-3">
                <?php get_template_part('advertisement/ad-4');?>
            </div>
        </div>
    </div>