
<?php
    get_header();
    get_template_part('get/tv');
    get_template_part('get/section2'); 
?>

<div class="d-md-none d-block">
    <?php //get_template_part('get/section1'); 
    ?>
</div>

<?php
get_template_part('get/section3');
get_template_part('advertisement/ad-5-7');
get_template_part('get/section-4');

// get_template_part('advertisement/ad_7_9');
// get_template_part('get/section5');
// get_template_part('get/section6');
// get_template_part('get/section7');
// //get_template_part('get/section8');
// //get_template_part('advertisement/ad_10_12');
// //get_template_part('get/section9');
// get_template_part('get/section10');
get_footer();