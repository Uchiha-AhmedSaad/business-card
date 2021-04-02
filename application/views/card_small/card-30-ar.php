                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="card_30">
                            <img src="<?php echo base_url('uploads/cards/imgs/card 30/c-30-ar.png'); ?>" />
                            <div class="grid">
                                <div class="g_inputs">
                                    <ul class="list-unstyled">
                                        <?php include __DIR__.'/card_details_ar.php'; ?>
                                    </ul>
                                </div>

                                <div class="logo">
                                    <div class="slogan btn-group">
                                        <?php include __DIR__.'/card_work_ar.php'; ?>
                                    </div>
                                    <img src="<?php echo base_url('uploads/cards/imgs/card 30/logo.png'); ?>" class="btn-group" />
                                </div>
                            </div>

                            <div class="list_grid">
                                <div class="left_list">
                                    <ul class="list-unstyled icon_list1">
                                        <li>
                                            <i class="fas fa-phone-alt"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-at"></i>
                                        </li>
                                    </ul>
                                    <ul class="data_list1 list-unstyled">
                                        <li>
                                            <a href="tel:"> <?php echo $cards->b_cards_phone ?> </a>
                                        </li>
                                        <li>
                                            <a href="mailto:"><?php echo $cards->email ?></a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="right_list">
                                    <ul class="list-unstyled icon_list2">
                                        <li>
                                            <i class="fas fa-map-marker-alt"></i>
                                        </li>
                                        <li>
                                            <i class="fas fa-globe"></i>
                                        </li>
                                    </ul>

                                    <ul class="list-unstyled data_list2">
                                        <li>
                                            <a href="#"> <?php echo $cards->b_cards_address ?></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $cards->website ?>"><?php echo $cards->website ?></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="bt_grid">
                                <div class="social_icons">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="<?php echo $cards->facebook; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $cards->twitter; ?>" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo $cards->linkedin ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>