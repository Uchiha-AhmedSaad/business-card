                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card_17">
                            <img src="<?php echo base_url('uploads/cards/imgs/card 17/c-17-en.png'); ?>"/>
                            <div class="grid">
                                <div class="left_column">
                                        
                                    <div class="logo">
                                        <img src="<?php echo base_url('uploads/cards/imgs/card 17/logo.png'); ?>" />
                                    </div>

                                    <div class="g_inputs">
                                        <span class="uName"><?php echo $cards->b_cards_name_en; ?></span>
                                    </div>

                                    <div class="slogan">
                                        <ul class="list-unstyled">
                                            <li><span><?php echo $cards->job_en;  ?></span></li>
                                            <li><span><?php echo $cards->b_cards_work;  ?></span></li>
                                        </ul>
                                    </div>

                                    <div class="social_icons">
                                        <ul class="list-unstyled">
                                            <?php include __DIR__.'/card_social_en.php'; ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="right_column">
                                    <div class="client_data">
                                        <div class="client_list">
                                            <ul class="list-unstyled icon_list">
                                                <li>
                                                    <a href="tel:"><i class="fas fa-phone"></i></a>
                                                </li>
        
                                                <li>
                                                    <a href="mailto:"><i class="fas fa-at"></i></a>
                                                </li>
        
                                                <li>
                                                    <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                                </li>
                                            </ul>
        
                                            <ul class="list-unstyled data_list">
                                                <?php include __DIR__.'/contact_en.php'; ?>
                                            </ul>
            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>