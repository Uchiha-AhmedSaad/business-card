                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card_32">
                            <img src="<?php echo base_url('uploads/cards/imgs/card 32/c-32-en.png'); ?>" />
                            <div class="grid">
                                <div class="left_grid">
                                    <div class="job_data">
                                        <ul class="list-unstyled">
                                            <li><?php echo $cards->job;  ?></li>
                                            <li><a href="tel:"><?php echo $cards->b_cards_phone;  ?></a></li>
                                            <li><a href="mailto:"><?php echo $cards->email;  ?></a></li>
                                            <li><a href="#"><?php echo $cards->website;  ?></a></li>
                                            <li><a href="#"><?php echo $cards->b_cards_address ;  ?></a></li>
                                        </ul>
                                    </div>

                                    <div class="social_icons">
                                        <ul class="list-unstyled">
                                            <?php include __DIR__.'/card_social_en.php'; ?>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mid_grid">
                                    <div class="icon_list">
                                        <ul class="list-unstyled">
                                            <li>
                                                <img src="<?php echo base_url('uploads/cards/imgs/card 32/Icon material-work.svg'); ?>" />
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url('uploads/cards/imgs/card 32/Icon material-phone-android.svg'); ?>" />
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url('uploads/cards/imgs/card 32/Icon simple-minutemailer.svg'); ?>" />
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url('uploads/cards/imgs/card 32/Icon material-web.svg'); ?>" />
                                            </li>
                                            <li>
                                                <img src="<?php echo base_url('uploads/cards/imgs/card 32/Icon metro-location-city.svg'); ?>" />
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="right_grid">
                                    <div class="logo">
                                        <img src="<?php echo base_url('uploads/cards/imgs/card 32/logo.png'); ?>" />
                                    </div>

                                    <div class="client_name">
                                        <span><?php echo $cards->b_cards_name; ?></span>
                                    </div>
                                    <div class="slogan">
                                        <?php include __DIR__.'/card_work_en.php'; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>