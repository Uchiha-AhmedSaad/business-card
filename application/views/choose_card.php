    <div class="add_card">
        <div class="container-fluid">
            <div class="card_cont">

                <div class="card_title">
                    <span><?php echo e_lang('Choose Card');  ?></span>
                </div>
                <form method="GET" action="<?php echo base_url('site/addCard') ?>">
                    <input type="hidden" id="card_number" name="card_number" value="">
                    <div class="row slick-carousel type-columns-carousel type-one-carousel cards">
                        <?php 

                            $dir = __DIR__.'/../../uploads/cards/imgs';
                            for ($i=1; $i <= 45; $i++) 
                            { 
                                $file_headers = @get_headers(base_url('uploads/cards/imgs/card%20'.$i.'/c-'.$i.'-'.getCurrentLanguages().'.png'));
                         
                                if (strpos($file_headers[0], '200')) {
                                ?> 
                                    <div class="card_img_container" style="height: 264px; width: 462px; margin: 20px;">
                                        <div class="card_img_container">
                                            <img data-number="<?php echo $i; ?>" class="cardClick" style="height: 264px; width: 462px;" src="<?php echo base_url('uploads/cards/imgs/card%20'.$i.'/c-'.$i.'-'.getCurrentLanguages().'.png'); ?>" />
                                        </div>
                                    </div>
                                <?php
                                }
                            }
                         ?>
                    </div> <!-- row -->
                    <div class="more_card_btn">
                        <button type="submit" class="btn btn-info"><?php echo e_lang('Continue'); ?><i class="fas fa-angle-double-left"></i></button>
                    </div>
                </form>
            </div> <!-- card cont -->
        </div> <!-- container -->
    </div> <!-- add card-->
    <!-- end add card -->