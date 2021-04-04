    <!-- about us-->
    <div class="about_us">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>

                        <?php 
                            if (getCurrentLanguages() == 'en') {
                               ?> <p class="card-text"><?php echo $settings->setting_rules_en; ?></p> <?php
                            }
                            else{
                                ?> <p class="card-text"><?php echo $settings->setting_rules; ?></p> <?php
                            }

                         ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end about us-->    