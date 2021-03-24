    <!-- payment-->
    <div class="payment" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block payment_collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-check-square"> </i></span><span> الحساب البنكى</span> 
                                    </button>
                                </h2>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="bank-account">
                                        <div class="card row bank_details">
                                          <div class="card-img col-3">
                                            <img src="./assets/images/earth.png" alt="">
                                          </div>
                                          <div class="card-body">
                                            <p class="card-text col-8">
                                              <span class="name">اسم البنك: </span><span>اسم البنك</span>
                                            </p>
                                            <p class="card-text col-8">
                                              <span class="name">إسم صاحب الحساب: </span><span>user name</span>
                                            </p>
                                            <p class="card-text col-8">
                                              <span class="name">رقم الحساب: </span><span>5687555</span>
                                            </p>
                                          </div>
                                        </div>

                                        <div class="client_data">
                                            <span class="client_data_title">
                                                المبلغ: <span>150$</span>
                                            </span>
                                        </div>
                                        <div class="row client_data_inputs">

                                            <div class="col-12">
                                                <div class="form-group">
                                                  <label for="name-add">اسم المحول</label>
                                                  <input class="form-control" type="text" name="" id="name-add" placeholder="إسم">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                  <label for="name-add">البنك المحول منه</label>
                                                  <input class="form-control" type="text" name="" id="name-add" placeholder="أسم البنك">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                  <label for="name-add">رقم الحساب</label>
                                                  <input class="form-control" type="number" name="" id="name-add" placeholder="458685462">
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="up_btn">
                          
                                                    <input type="file" name="files[]" id="file" onchange="showImage(this)" data-multiple-caption="{count} files selected" multiple/>
                                                    <div class="upload text-center">اختر صورة</div>
                                                </div> 
                                                <div class="up_text">تم تحميل ملفين</div>
                                                <div class="up_img row">
                                                    <div class="up_img_cont col-md-2 col-4">
                                                        <img src="assets/images/car-4.png" id="up" class="img-thumbnail" />
                                                        <i class="rem_icon"> <img src="assets/images/remove.svg" /></i>
                                                    </div>
                                                    <div class="up_img_cont col-md-2 col-4">
                                                        <img src="assets/images/car-3.png" class="img-thumbnail" />
                                                        <i class="rem_icon"> <img src="assets/images/remove.svg" /></i>
                                                    </div>
                                                </div>    
                                            </div>

                                            <div class="col-12">
                                                <div class="form-group">
                                                  <label for="name-add">ملاحظات</label>
                                                  <textarea class="form-control ad_details_area"></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-info subm">إرسال</button>
                                            </div>

                                        </div>
                                    </div> <!-- bank account -->
                                </div> <!-- card body -->
                            </div> <!-- collapseOne -->
                        </div> <!-- card -->
                    </div> <!-- accourding -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div>
    <!-- end payment-->