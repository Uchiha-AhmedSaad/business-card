    <!-- add card -->
    <div class="add_card">
        <div class="container-fluid">
            <div class="card_cont">

                <div class="card_title">
                    <span>أختر تصميم الكارت</span>
                </div>

                <div class="row slick-carousel type-one-carousel cards">
                    <?php 
                        $dir = __DIR__.'/../../uploads/cards/imgs';

                        for ($i=1; $i <= count(glob($dir.'/*', GLOB_ONLYDIR)); $i++) { 
                            $file_headers = @get_headers(base_url('uploads/cards/imgs/'.$i.'/'.$i.'-ar.png'));

                            if (strpos($file_headers[0], '200')) {
                            ?> 
                                <div class="">
                                    <div class="card_img_container">
                                        <img src="<?php echo base_url('uploads/cards/imgs/'.$i.'/'.$i.'-ar.png'); ?>" />
                                    </div>
                                </div>
                            <?php
                            }



                          
                        }




                     ?>



                </div> <!-- row -->


                <div class="more_card_btn">
                    <a href="add_card.html" class="btn btn-info">أستمرار <i class="fas fa-angle-double-left"></i></a>
                </div>
            </div> <!-- card cont -->
        </div> <!-- container -->
    </div> <!-- add card-->
    <!-- end add card -->