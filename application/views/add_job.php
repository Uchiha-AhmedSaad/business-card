    <!-- add job -->
    <div class="add_job">
        <div class="container-fluid">
            <form action="">
                <div class="job_details_container row">

                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                          <label for="name-add" class="add_job_label"><?php echo e_lang('adsense details'); ?></label>
                          <textarea class="form-control ad_details_area"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12">
                        <div class="form-group">
                          <label for="name-add"><?php echo e_lang('Name'); ?></label>
                          <input class="form-control" type="text" name="" id="name-add" placeholder="إسم">
                        </div>
                    </div>

                    <div class="col-sm-12 col-lg-12 ad_type">
                        <div class="form-group jon_type">
                          <input type="radio" name="job_type" id="job" placeholder="إسم">
                          <label for="job"><?php echo e_lang('Job'); ?></label>
                          <input type="radio" name="job_type" id="work" placeholder="إسم">
                          <label for="work"><?php echo e_lang('workers'); ?></label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <div>
                                <label><?php echo e_lang('Category'); ?></label>
                            </div>
                            <div class="dropdown btn-group cate_list">
                                <a class="btn btn-outline-secondary dropdown-toggle cate_drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">job</a>
                                    <a class="dropdown-item" href="#">card</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <div>
                                <label><?php echo e_lang('Country'); ?></label>
                            </div>
                            <div class="dropdown btn-group cate_list">
                                <a class="btn btn-outline-secondary dropdown-toggle country_drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">مصر</a>
                                    <a class="dropdown-item" href="#">الاردن</a>
                                    <a class="dropdown-item" href="#">عمان</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                            <div>
                                <label><?php echo e_lang('City'); ?></label>
                            </div>
                            <div class="dropdown btn-group cate_list">
                                <a class="btn btn-outline-secondary dropdown-toggle city_drop" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">القاهرة</a>
                                    <a class="dropdown-item" href="#">الاسكندرية</a>
                                    <a class="dropdown-item" href="#">المنصورة</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                          <label for="name-add"><?php echo e_lang('Email'); ?></label>
                          <input class="form-control" type="email" name="" id="name-add" placeholder="Email@example.com">
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-group">
                          <label for="name-add"><?php echo e_lang('Phone'); ?></label>
                          <input class="form-control" type="number" name="" id="name-add" placeholder="0123456789">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                          <label for="name-add" class="add_job_label"><?php echo e_lang('information about you'); ?></label>
                          <textarea class="form-control ad_details_area"></textarea>
                        </div>
                    </div>

                    <div class="col-md-7 col-sm-12">
                        <label><?php echo e_lang('Add Picture'); ?></label><br />
                        <div class="up_btn">
                            <input type="file" name="files[]" id="file" onchange="showImage(this)" data-multiple-caption="{count} files selected" multiple/>
                            <div class="upload text-center"><?php echo e_lang('Add picture'); ?></div>
                        </div> 
                        <div class="up_img row">
                            <div class="up_img_cont col-sm-3">
                                <img src="<?php echo base_url('public/assets/images/car-4.png'); ?>" class="img-thumbnail" />
                                <i class="rem_icon"> <img src="<?php echo base_url('public/assets/images/remove.svg'); ?>" /></i>
                            </div>
                            <div class="up_img_cont col-sm-3">
                                <img src="<?php echo base_url('public/assets/images/car-3.png'); ?>" class="img-thumbnail" />
                                <i class="rem_icon"> <img src="<?php echo base_url('public/assets/images/remove.svg'); ?>" /></i>
                            </div>
                        </div>    
                    </div>

                    <div class="col-12 add_job_btn">
                        <div class="btn-group">
                            <a href="account.html" class="btn btn-info add_job_button"><?php echo e_lang('Add Job') ?></a>
                            <div class="dropdown btn-group">
                                <a class="btn btn-outline-info dropdown-toggle choose_bouquet_btn" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    أختر الباقة
                                </a>
                                
                                <div class="dropdown-menu choose_bouq" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="bouquet.html"><input type="radio" /> شهر واحد &nbsp;&nbsp;<i class="f-1 fas fa-angle-double-left"></i></a>
                                    <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 3 شهور &nbsp;&nbsp;<i class="f-2 fas fa-angle-double-left"></i></a>
                                    <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 6 شهور &nbsp;&nbsp;<i class="f-3 fas fa-angle-double-left"></i></a>
                                    <a class="dropdown-item" href="bouquet.html"><input type="radio" /> 12 شهور &nbsp;&nbsp;<i class="f-4 fas fa-angle-double-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- row -->
            </form>
        </div> <!-- container -->
    </div>
    <!-- end add job -->