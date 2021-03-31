<div class="cards_bg">  
    <div class="container">
        <div class="cards_container">
            <div class="row"> 
                <!-- col-6 card-1-en --> 
                <div class="col-12">
                    <div class="card_1">
                        <div class="c-1-en">
                            <img src="<?php echo base_url('uploads/cards/imgs/card 1/c-1-ar.png'); ?>">

                            <div class="grid">
                                <div class="left_part">
                                    <div class="g_logo">
                                        <img src="<?php echo base_url('uploads/cards/imgs/card 1/Subtraction 1.svg'); ?>" />
                                    </div>

                                    <div class="g_inputs">
                                        <ul class="list-unstyled">
                                            <?php  include __DIR__.'/details_ar.php'; ?>
                                        </ul>
                                    </div>
                                    <div class="slogan">
                                        <span><?php echo $details->b_cards_work; ?></span>
                                    </div>
                                </div> <!-- left part -->

                                <!-- right part-->
                             <div class="right_part">

                                <div class="client_data">
                                    <div class="client_list">
                                        <ul class="list-unstyled icon_list">
                                            <li>
                                                <a href="tel:<?php echo $details->b_cards_phone; ?>"><i class="fas fa-phone-alt"></i></a>
                                            </li>

                                            <li>
                                                <a href="mailto:<?php echo $details->email; ?>"><i class="fas fa-at"></i></a>
                                            </li>

                                            <li>
                                                <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                            </li>
                                        </ul>

                                        <ul class="list-unstyled data_list">
                                            <li>
                                                <a href="tel:"><?php echo $details->b_cards_phone; ?></a>
                                            </li>
        
                                            <li>
                                                <a href="mailto:<?php echo $details->email; ?>"><?php echo $details->email; ?></a>
                                            </li>
        
                                            <li>
                                                <a href="#"><?php echo $details->b_cards_address; ?></a>
                                            </li>
                                        </ul>
        
                                    </div>
                                </div>

                                <div class="social_icons">
                                    <ul class="list-unstyled">
                                        <?php  include __DIR__.'/social.php'; ?>
                                    </ul>
                                </div>

                             </div>
                            <!-- end right part-->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-6 card-1-en -->
            </div>
        </div>
    </div>
</div>


