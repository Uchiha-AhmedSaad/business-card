    <div class="card_12_cont">
        <div class="container">
            <div class="cards_container">
                <div class="row">
                    <div class="col-12">
                        <div class="card_12">
                            <img src="<?php echo base_url('uploads/cards/imgs/card 12/c-12-en.png'); ?>" />
              
                            <div class="logo">
                                <img src="<?php echo base_url('uploads/cards/imgs/card 12/Subtraction 1.svg'); ?>" />
                            </div>

                            <div class="slogan">
                               <span><?php echo $details->b_cards_work; ?></span>
                            </div>

                            <div class="social_icons">
                                <ul class="list-unstyled">
                                    <?php  include __DIR__.'/social.php'; ?>
                                </ul>
                            </div>
                            <div class="g_inputs">
                                <ul class="list-unstyled">
                                    <?php  include __DIR__.'/details_en.php'; ?>
                                </ul>
                            </div>

                            <div class="client_data">
                                <div class="client_list">
                                    <ul class="list-unstyled icon_list">
                                        <li>
                                            <a href="#"><img src="<?php echo base_url('uploads/cards/imgs/card 12/phone.svg'); ?>" /></a>
                                        </li>

                                        <li>
                                            <a href="#"><img src="<?php echo base_url('uploads/cards/imgs/card 12/mail.svg'); ?>" /></a>
                                        </li>

                                        <li>
                                            <a href="#"><img src="<?php echo base_url('uploads/cards/imgs/card 12/city.svg'); ?>" /></a>
                                        </li>
                                    </ul>

                                    <ul class="list-unstyled data_list">
                                        <li>
                                            <a href="tel:"><?php echo $details->b_cards_phone; ?></a>
                                        </li>
                                        <li>
                                            <a href="mailto:"><?php echo $details->email; ?></a>
                                        </li>
                                        <li>
                                            <a href="#"><?php echo $details->b_cards_address_en; ?></a>
                                        </li>
    
                                      
                                    </ul>
    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>