    <div class="cards"> 
        <div class="container">
            <div class="cards_container">
                <div class="row"> 
                    <!-- col-6 card-1-en -->
                    <div class="col-12">
                        <div class="card_1">
                            <div class="c-1-en">
                                <img src="<?php echo base_url('uploads/cards/imgs/card 1/c-1-en.png'); ?>">
    
                                <div class="grid">
                                    <div class="left_part">
                                        <div class="g_logo">
                                            <img src="<?php echo base_url('uploads/cards/imgs/card 1/Subtraction 1.svg'); ?>" />
                                        </div>
        
                                        <div class="g_inputs">
                                            <ul class="list-unstyled">
                                                <li><span><?php echo $details->b_cards_name_en; ?></span></li>
                                                <li><span><?php echo $details->job_en ; ?></span></li>
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
                                                    <a href="mailto:<?php echo $details->email; ?>">
                                                        <?php echo $details->email; ?></a>
                                                </li>
            
                                                <li>
                                                    <a href="#"><?php echo $details->b_cards_address_en; ?></a>
                                                </li>
                                            </ul>
            
                                        </div>
                                    </div>

                                    <div class="social_icons">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a href="<?php echo $details->facebook; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $details->twitter; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $details->linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="<?php echo $details->website; ?>" target="_blank"><i class="fas fa-globe"></i></a>
                                            </li>
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