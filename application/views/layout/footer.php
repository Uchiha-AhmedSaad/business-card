
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
                     <a href="#">
                        <li>الرئيسية</li>
                     </a>
                     <a href="#">
                        <li>حسابى</li>
                     </a>
                     <a href="#">
                        <li>تواصل معنا</li>
                     </a>
                     <a href="#">
                        <li>نبذة عنا</li>
                     </a>
                     <a href="#">
                        <li>الشروط والاحكام</li>
                     </a>
                  </ul>
               </div>
               <div class="col-md-4 col-6">
                  <ul>
                     <a href="#">
                        <li>اضف إعلانك</li>
                     </a>
                     <a href="#">
                        <li>الكروت</li>
                     </a>
                     <a href="#">
                        <li>بحث عن عمالة</li>
                     </a>
                     <a href="#">
                        <li>بحث عن وظائف</li>
                     </a>
                     <a href="#">
                        <li>أضف وظيفة</li>
                     </a>
                  </ul>
               </div>
            </div>
            <!-- row -->
            <hr class="footer_hr">
            <div class="footer_links row">
               <div class="col-md-6 col-12 copy_order ">
                  <div class="copy">
                     <p>جميع الحقوق محفوظة - Online-Business Card 2021</p>
                  </div>
               </div>
               <div class="footer_social col-md-6 col-12">
                  <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                  <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                  <span><a href="#"><i class="fab fa-instagram"></i></a></span>
                  <span><a href="#"><i class="fab fa-snapchat"></i></a></span>
                  <span><a href="#"><i class="fab fa-twitter"></i></a></span>
                  <span><a href="#"><i class="fab fa-facebook"></i></a></span>
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

      </script>
   </body>
</html>