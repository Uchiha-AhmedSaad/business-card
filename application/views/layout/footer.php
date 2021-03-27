
      <!-- home content -->
      <!-- End Home Content -->
      <!-- start footer -->
      <footer>
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 col-12">
                  <div class="footer_logo">
                     <img src="<?php echo base_url('public/assets/images/logo.png'); ?>" />
                  </div>
               </div>
               <div class="col-md-4 col-6">
                  <ul>
                     <a href="<?php echo base_url('site'); ?>">
                        <li><?php echo e_lang('Main'); ?></li>
                     </a>
                     <a href="<?php echo base_url('site/account'); ?>">
                        <li><?php echo e_lang('My account'); ?></li>
                     </a>
                     <a href="<?php echo base_url('site/contact_us'); ?>">
                        <li><?php echo e_lang('Contact us') ?></li>
                     </a>
                     <a href="<?php echo base_url('about_us'); ?>">
                        <li><?php echo e_lang('About us'); ?></li>
                     </a>
                     <a href="#">
                        <li><?php echo e_lang('Terms'); ?></li>
                     </a>
                  </ul>
               </div>
               <div class="col-md-4 col-6">
                  <ul>
                     <a href="#">
                        <li><?php echo e_lang('Add job'); ?></li>
                     </a>
                     <a href="#">
                        <li><?php echo e_lang('Add card'); ?></li>
                     </a>
                     <a href="#">
                        <li><?php echo e_lang('Search about workers'); ?></li>
                     </a>
                     <a href="#">
                        <li><?php echo e_lang('search about job'); ?></li>
                     </a>
                  </ul>
               </div>
            </div>
            <!-- row -->
            <hr class="footer_hr">
            <div class="footer_links row">
               <div class="col-md-6 col-12 copy_order ">
                  <div class="copy">
                     <p><?php echo e_lang('Copyright'); ?> - Online-Business Card 2021</p>
                  </div>
               </div>
               <div class="footer_social col-md-6 col-12">
                  <span><a href="<?php echo !empty(settings()->setting_you)?settings()->setting_you:''; ?>"><i class="fab fa-youtube"></i></a></span>
                  <span><a href="<?php echo !empty(settings()->linkedin)?settings()->linkedin:''; ?>"><i class="fab fa-linkedin"></i></a></span>
                  <span><a href="<?php echo !empty(settings()->instgram)?settings()->instgram:''; ?>"><i class="fab fa-instagram"></i></a></span>
                  <span><a href="<?php echo !empty(settings()->snap)?settings()->snap :''; ?>"><i class="fab fa-snapchat"></i></a></span>
                  <span><a href="<?php echo !empty(settings()->setting_twitt)?settings()->setting_twitt:''; ?>"><i class="fab fa-twitter"></i></a></span>
                  <span><a href="<?php echo !empty(settings()->setting_face)?settings()->setting_face:''; ?>"><i class="fab fa-facebook"></i></a></span>
               </div>
            </div>
         </div>
         <!-- container -->
      </footer>
      <!-- end footer -->
      <script src="<?php echo base_url('public/assets/js/jquery-3.3.1.min.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/popper.min.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/bootstrap.min.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/slick.min.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/fgEmojiPicker.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/tail.select-full.min.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/lightbox.js') ?>"></script>
      <script src="<?php echo base_url('public/assets/js/main.js') ?>"></script>
      <script src="<?php echo base_url('public/sweetalert/dist/sweetalert.js') ?>"></script>
      <script type="text/javascript">
         $('#b_cards_country_id').on('change',function(){
            $('.como').remove();
               var url = "<?php echo base_url('site/getCities'); ?>";
               var country = $('#b_cards_country_id :selected').val();
               $.ajax({
                  cache: false,
                  type: "POST",
                  url: url,
                  dataType:'json',
                  data: {country:country},
                  success: function(data){
                     for (var i = 0; i < data.length; i++) {
                        $('#city').append("<option class='como' value='"+data[i].city_id+"'>"+data[i].city_name+"</option>");
                     }
                     
                  }
               });
         });
         $('#job_country_id').on('change',function(){
            $('.momo').remove();
               var url = "<?php echo base_url('site/getPackages'); ?>";
               var country = $('#job_country_id :selected').val();
               $.ajax({
                  cache: false,
                  type: "POST",
                  url: url,
                  dataType:'json',
                  data: {country:country},
                  success: function(data){
                     for (var i = 0; i < data.length; i++) {
                        $('#package_id').append("<option class='momo' value='"+data[i].package_id+"'>"+data[i].package_name+"</option>");
                     }
                     
                  }
               });
         });
         $('#job_country_id').on('change',function(){
            $('.como').remove();
               var url        = "<?php echo base_url('site/getCities'); ?>";
               var country    = $('#job_country_id :selected').val();
               $.ajax({
                  cache: false,
                  type: "POST",
                  url: url,
                  dataType:'json',
                  data: {country:country},
                  success: function(data){
                     for (var i = 0; i < data.length; i++) {
                        $('#city').append("<option class='como' value='"+data[i].city_id+"'>"+data[i].city_name+"</option>");
                     }
                     
                  }
               });
         });
            <?php 
               if (!empty($this->session->userdata('Flash_message'))) 
               {
                  ?>
                       swal({
                        icon: "<?php echo $this->session->userdata('Flash_message'); ?>",
                           title: "<?php echo $this->session->userdata('title') ?>",
                           timer:"<?php echo $this->session->userdata('timer') ?>",
                           text: "<?php echo $this->session->userdata('text') ?>",
                           buttons: true,
                           buttons: "<?php echo e_lang('Ok') ?>",
                       });
                  <?php
               }
             ?>
    
          <?php echo Sweet_Session_fired(); ?>

          $('#comar').on('click',function(){

            $('#logo_qqq').trigger("click");

          });
          $('.cardClick').on('click',function(){
            var card_number = $(this).attr('data-number');
            $('#card_number').val(card_number);
          });
      </script>
   </body>
</html>