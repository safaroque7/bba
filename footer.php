<section class="container-fluid footer1_color_id py-4 wow slideInUp bg-white mt-md-4 mt-3">
  <div class="container footerPrintCenter">
    <div class="row d-flex">
      <div class="col-md-3 col-12 mb-3 mb-md-0">
        <div class="mb-3">
          <?php echo get_template_part('get/main_logo'); ?>
        </div>
        <h5 class="text-md-left text-center"> <?php
          $position_name = get_theme_mod('npa_position_1'); //just change last number

          if (!empty($position_name)) { echo $position_name; } else { ?> সম্পাদক <?php } 
          // position_holder_name_1
          $position_holder_name = get_theme_mod('npa_position_1_name'); //just change last number
          if (!empty($position_holder_name)) { echo $position_holder_name; } else { ?> মোহাম্মাদ মুনীরুজ্জামান <?php } ?> 
        </h5>
      </div>

      <div class="col-md-5 col-12 fotter_text_color_id text-md-left text-center">

            <!-- অফিস ঠিকানা  -->
            <?php
            $npa_ct = get_theme_mod('npa_contact_title');
            if (!empty($npa_ct)) { ?>
            <h5 class="border-bottom border-secondary d-inline-block text-md-left text-center"> <?php echo $npa_ct; ?> </h5>
            <?php } ?>

            <!-- npa_phone_number -->
            <?php
            $npa_phone_number = get_theme_mod('npa_phone_number');
            if (!empty($npa_phone_number)) { ?>
            <p class="mb-0">
            <?php echo $npa_phone_number; ?>
            </p>
            <?php } ?>

            <!-- npa_email_address -->
            <?php
            $npa_email_address = get_theme_mod('npa_email_address');
            if (!empty($npa_email_address)) { ?>
            <p class="mb-0">
            <?php echo $npa_email_address; ?>
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

    <div class="row text-center border-top border-bottom p-md-2 p-1 mt-md-0 mt-3">
      <div class="col-12">
        <?php $npa_address = get_theme_mod('npa_address'); echo $npa_address; ?> 
      </div>
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
        <p class="footer2_text_color mb-0 text-center printTextColor"> design and development by : <a
            class="footer2_text_color" href="http://webnewsdesign.com" target="_blank"> webnewsdesign.com</a> </p>
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