<section class="container-fluid footer1_color_id py-4 wow slideInUp bg-white mt-md-4 mt-3">
  <div class="container footerPrintCenter">
    <div class="row d-flex">
      <div class="col-md-3 mb-3 mb-md-0">
        <?php echo get_template_part('get/main_logo'); ?>
      </div>

      <!-- position_name_1 -->
      <div class="col-md-4 fotter_text_color_id">
        <!-- **************************** 1 start **************************** -->
        <?php
        $position_name = get_theme_mod('npa_position_1'); //just change last number

        if (!empty($position_name)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block">
            <?php echo $position_name; ?>
          </h5>
        <?php } else { ?>
          <h5 class="border-bottom border-secondary d-inline-block"> সম্পাদক (ডেমো) </h5>
        <?php } ?>

        <?php
        //position_holder_name_1
        $position_holder_name = get_theme_mod('npa_position_1_name'); //just change last number
        if (!empty($position_holder_name)) { ?>
          <div class="h5 font-weight-bold mb-md-4 mb-3">
            <?php echo $position_holder_name ?>
          </div>
        <?php } else { ?>
          <div class="h5 font-weight-bold mb-md-4 mb-3"> এস এ ফারুক (ডেমো) </div>
        <?php } ?>

        <!-- **************************** 1 end **************************** -->


        <!-- **************************** 2 start **************************** -->
        <?php
        $position_name = get_theme_mod('npa_position_2'); //just change last number
        if (!empty($position_name)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block">
            <?php echo $position_name; ?>
          </h5>
        <?php } ?>
        <?php
        //position_holder_name_2
        $position_holder_name = get_theme_mod('npa_position_2_name'); //just change last number
        if (!empty($position_holder_name)) { ?>
          <div class="h5 font-weight-bold mb-md-4 mb-3">
            <?php echo $position_holder_name ?>
          </div>
        <?php } ?>

        <!-- **************************** 2 end **************************** -->

        <!-- **************************** 3 start **************************** -->
        <?php
        $position_name = get_theme_mod('npa_position_3'); //just change last number
        if (!empty($position_name)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block">
            <?php echo $position_name; ?>
          </h5>
        <?php } ?>

        <?php
        //position_holder_name_3
        $position_holder_name = get_theme_mod('npa_position_3_name'); //just change last number
        if (!empty($position_holder_name)) { ?>
          <div class="h5 font-weight-bold mb-md-4 mb-3">
            <?php echo $position_holder_name ?>
          </div>
        <?php } ?>
        <!-- **************************** 3 end **************************** -->

        <!-- **************************** 4 start **************************** -->
        <?php
        $position_name = get_theme_mod('npa_position_4'); //just change last number
        if (!empty($position_name)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block">
            <?php echo $position_name; ?>
          </h5>
        <?php } ?>

        <?php
        //position_holder_name_3
        $position_holder_name = get_theme_mod('npa_position_4_name'); //just change last number
        if (!empty($position_holder_name)) { ?>
          <div class="h5 font-weight-bold mb-md-4 mb-3">
            <?php echo $position_holder_name ?>
          </div>
        <?php } ?>
        <!-- **************************** 4 end **************************** -->


        <!-- **************************** 5 start **************************** -->
        <?php
        $position_name = get_theme_mod('npa_position_5'); //just change last number
        if (!empty($position_name)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block">
            <?php echo $position_name; ?>
          </h5>
        <?php } ?>

        <?php
        //position_holder_name_3
        $position_holder_name = get_theme_mod('npa_position_5_name'); //just change last number
        if (!empty($position_holder_name)) { ?>
          <div class="h5 font-weight-bold">
            <?php echo $position_holder_name ?>
          </div>
        <?php } ?>
        <!-- **************************** 5 end **************************** -->

      </div>

      <div class="col-md-5 fotter_text_color_id">

        <!-- অফিস ঠিকানা  -->
        <?php
        $npa_ct = get_theme_mod('npa_contact_title');
        if (!empty($npa_ct)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block"> <?php echo $npa_ct; ?> </h5>
        <?php } ?>

        <!-- npa_address -->
        <?php
        $npa_address = get_theme_mod('npa_address');
        if (!empty($npa_address)) { ?>
          <p class="mb-0">
            <?php echo $npa_address; ?>
          </p>
        <?php } ?>

        <!-- npa_phone_number -->
        <?php
        $npa_phone_number = get_theme_mod('npa_phone_number');
        if (!empty($npa_phone_number)) { ?>
          <p class="mb-0">
            <?php echo '<i class="fa fa-phone" aria-hidden="true"></i> ' . '0' . $npa_phone_number; ?>
          </p>
        <?php } ?>

        <!-- npa_email_address -->
        <?php
        $npa_email_address = get_theme_mod('npa_email_address');
        if (!empty($npa_email_address)) { ?>
          <p class="mb-0">
            <?php echo '<i class="fa fa-envelope-o" aria-hidden="true"></i> ' . $npa_email_address; ?>
          </p>
        <?php } ?>

        <style>
          #click_to_em,
          #click_to_know {
            cursor: pointer;
          }
        </style>

      </div>


    </div>
  </div>
</section>


<div class="container">
  <div class="row">
    <div class="col-12">
      <p class="py-2 px-3 text-center mb-0">
        <?php
        $npa_footer_extra_setting = get_theme_mod('npa_footer_extra_setting');
        if (!empty($npa_footer_extra_setting)) {
          echo $npa_footer_extra_setting;
        }
        ?>
      </p>
    </div>
  </div>
</div>


<section class="container-fluid bg-footer footer2_color_id">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="footer2_text_color mb-0 text-center printTextColor"> design and development by : <a class="footer2_text_color" href="http://webnewsdesign.com" target="_blank"> webnewsdesign.com</a> </p>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-12">
      <ul class="terms_conditions_f">
        <li> <a href="<?php echo esc_url(get_page_link('')) ?>"> Terms and Conditions </a> </li>
      </ul>
    </div>
  </div>
</div>
<?php wp_footer(); ?>


<script>
  new WOW().init();
</script>
</body>

</html>