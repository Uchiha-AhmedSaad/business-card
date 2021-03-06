    <!--Bouquet Container Page-->
    <div class="bouquet">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bouquet_details text-center">
                        <p class="lead"><?php echo e_lang("We have changed how our subscriptions are structured from having many specialized packages to simple all-in-one plans. In this article, you can find answers to all your questions regarding the new website plans. Can't find what you are looking for? Don't hesitate to"); ?></p>

                    </div><!-- bouquet details-->
                </div> <!--col-12-->
            </div> <!-- row-->
        </div> <!-- container-->
        <hr>
        <?php 
            foreach ($countries as $key => $value) {
                ?> 
                    <div class="container-fluid">
                        <div class="card_holder">

                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h1 class="bouquet_title">باقات <?php echo $value; ?></h1>
                                </div> 
                                <?php 
                                foreach ($packages as $package) {
                                    if ($key == $package->country_id) {
                                        ?> 
                                        <div class="col-6 col-md-3 img_package"  data-val="<?php echo $package->package_id; ?>">
                                        <div class="cardi selected text-center" >
                                            <i><img   style="height: 100; width: 100px; "  src="<?php echo base_url('uploads/'.$package->picture); ?>" /></i>
                                            <div class="card-body">
                                                <?php 
                                                    if ($this->session->userdata('language') == 'en') {
                                                       ?> <p class="card-text"><?php echo $package->package_name_en; ?></p> <?php
                                                    }
                                                    else{
                                                        ?> <p class="card-text"><?php echo $package->package_name; ?></p> <?php
                                                    }



                                                 ?>
                                                
                                                <p class="card-text"><?php echo $package->package_price; ?></p>
                                            </div>
                                            </div> <!-- card -->
                                        </div> <!-- card col -->
                                        <?php
                                    }
                                }
                                ?>

                            </div> <!-- row-->

                        </div><!-- card holder -->
                    </div> <!-- container-->
                    <hr>
                <?php
            }




         ?>




                                <form method="GET" action="<?php echo base_url('site/payment'); ?>">
                                    <input type="hidden" name="package_id" id="package_get" value="">
                                <div class="col-sm-12 text-center">
                                    <div class="sub_btn">
                                        <button type="submit" class="btn btn-info" ><?php echo e_lang('Join'); ?></button>
                                    </div>
                                </div>
                                </form>
         

    </div> 
    <!--End Bouquet Container page -->