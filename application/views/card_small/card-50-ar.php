<div class="col-lg-4 col-md-6 col-12">
    <div class="card_50">
        <img src="<?php echo base_url('uploads/cards/imgs/card 50/c-50-ar.png'); ?>" />

        <div class="grid">
            <div class="left_grid">
                <div class="g_inputs">
                    <div class="g_inputs">
                        <ul class="list-unstyled">
                            <li> <span class="uName"><?php echo $cards->b_cards_name; ?></span></li>
                        </ul>
                    </div>
                </div>

                <div class="logo">
                    <img src="<?php echo base_url('uploads/cards/imgs/card 50/logo.svg'); ?>" />
                </div>

                <div class="social_icons">
                    <ul class="list-unstyled">
                        <?php include __DIR__.'/card_social_ar.php'; ?>
                    </ul>
                </div>

            </div>

            <div class="right_grid">
                <div class="slogan">
                    <?php include __DIR__.'/card_work_ar.php'; ?>
                </div>

                <div class="client_data">
                    <div class="client_list">
                        <ul class="list-unstyled icon_list">
                            <li>
                                <a href="#"><img src="<?php echo base_url('uploads/cards/imgs/card 50/case.svg'); ?>" /></a>
                            </li>
                            <li>
                                <a href="tel:"><img src="<?php echo base_url('uploads/cards/imgs/card 50/phone.svg'); ?>" /></a>
                            </li>

                            <li>
                                <a href="mailto:"><img src="<?php echo base_url('uploads/cards/imgs/card 50/mail.svg') ?>" /></a>
                            </li>

                            <li>
                                <a href="#"><img src="<?php echo base_url('uploads/cards/imgs/card 50/location.svg'); ?>" /></a>
                            </li>
                        </ul>

                        <ul class="list-unstyled data_list">
                            <?php include __DIR__.'/contact_ar.php'; ?>
                        </ul>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>