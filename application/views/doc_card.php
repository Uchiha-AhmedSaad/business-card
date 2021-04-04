<!-- Home Content -->
<div class="home_content">
   <div class="container-fluid">
      <div class="row card_container">
         <div class="doc_card_title col-6">
            <h3><?php echo e_lang('Cards'); ?></h3>
         </div>
         <div class="more_cards col-6">
            <a href="#"><?php e_lang(''); ?></a>
         </div>
         <!-- End doctors cards-->
      </div>
      <!-- row -->
        <?php 
            $count = count($b_cards) / 3;
            $count = ceil($count);
            for ($i=0; $i < $count; $i++) { 
               $offset = $i*3;
               $slice = array_splice($b_cards, 0,3);


                    ?> 
                            <div class="slick-carousel type-one-carousel row">
                              <?php 

                                foreach ($slice as $cards) {
                                  include __DIR__.'/card_small/'.'card-'.$cards->b_cards_card_id.'-'.getCurrentLanguages().'.php';
                                }
                               ?>
                            </div>

                    <?php
            }


         ?>

   </div>
   <!-- container fluid -->
</div>
<!-- home content -->
