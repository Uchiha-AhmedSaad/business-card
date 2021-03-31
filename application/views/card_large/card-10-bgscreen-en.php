    <div class="card_10_cont">
        <div class="container">
            <div class="cards_container">
                <div class="row">

                    <div class="col-12">
                        <div class="card_10">
                             <img src="<?php echo base_url('uploads/cards/imgs/card 10/c-10-en.png'); ?>" />
                        
                            <div class="logo">
                                <img src="<?php echo base_url('uploads/cards/imgs/card 10/logo.png'); ?>" />
                            </div>

                            <div class="grid_1">
                                <div class="g_inputs">
                                    <ul class="list-unstyled">
                                        <?php  include __DIR__.'/details_en.php'; ?>
                                    </ul>
                                    <div class="slogan">
                                        <span><?php echo $details->b_cards_work; ?></span>
                                    </div>
                                </div>

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
                                                <a href="mailto:<?php echo $details->email; ?>">
                                                        <?php echo $details->email; ?></a>
                                            </li>
                                            <li>
                                                <a href="#"><?php echo $details->b_cards_address_en; ?></a>
                                            </li>
                                        </ul>
        
                                    </div>
                                </div>
                            </div>

                            <div class="social_icons">
                                <ul class="list-unstyled">
                                    <?php  include __DIR__.'/social.php'; ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    