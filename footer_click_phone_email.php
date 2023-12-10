<div class="col-md-5 fotter_text_color_id">

        <!-- অফিস ঠিকানা  -->
        <?php
        $address = ot_get_option('address');
        if (!empty($address)) { ?>
          <h5 class="border-bottom border-secondary d-inline-block"> যোগাযোগ </h5>
          <p class="mb-0">
            <?php echo $address; ?>
          </p>
        <?php } ?>

        <style>
          #click_to_em,
          #click_to_know {
            cursor: pointer;
          }
        </style>

        <!-- হেল্প লাইন -->
        <?php
        $phoneNumber = ot_get_option('phoneNumber');
        if (!empty($phoneNumber)) { ?>
          <div class="mb-0"> ফোন : <span class="font-weight-bold" id="click_to_know"> ক্লিক করুন </span>
          <div id="ph" class="d-none">
            <?php echo $phoneNumber; ?>
          </div>
          <script>
            let ph = document.getElementById("ph");
            let click_to_know = document.getElementById("click_to_know");

            click_to_know.addEventListener("click", function () {
              ph.classList.toggle("d-none");

            });
          </script>
          </div>
        <?php } ?>

        <!-- E-mail -->
        <?php
        $eMailId = ot_get_option('eMailId');
        if (!empty($eMailId)) { ?>
          <div class="mb-0"> ই-মেইল : <span class="font-weight-bold" id="click_to_em"> ক্লিক করুন </span>
            <a href="mailto: <?php echo $eMailId; ?>" class="fotter_text_color_id">
              <div id="em" class="d-none"> 
                <?php echo $eMailId;?>
              </div>
            </a>
          </div>
        <?php } ?>
        <script>
          let em = document.getElementById("em");
          let click_to_em = document.getElementById("click_to_em");
            click_to_em.addEventListener("click", function () {
            em.classList.toggle("d-none");
          });
        </script>
      </div>