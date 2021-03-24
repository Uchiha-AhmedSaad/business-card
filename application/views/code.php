    <!-- Start EnterCode -->
  <div class="login enter_code" style="margin-top: 20px;">
    <div class="container">
      <h5 class="login_head">نسيت كلمة المرور</h5>
      <div class="login-form col-sm-12">
        <form action="">
          <div class="row">
            <div class="col-sm-12">
                <p class="code_text" class="text-center">قم بإدخال الكود المرسل وكلمة السر الجديد</p>
                <div class="code_container">
                    <div class="row">
                        <div class="code"><input type="text" maxlength="1" class="form-control" /></div>
                        <div class="code"><input type="text" maxlength="1" class="form-control" /></div>
                        <div class="code"><input type="text" maxlength="1" class="form-control" /></div>
                        <div class="code"><input type="text" maxlength="1" class="form-control" /></div>
                    </div>
                    
                </div>
              <div class="form-group code_label">
                <div class="passinp">
                    <label for="newPassword">كلمة المرور الجديدة</label>
                    <input type="password" class="form-control pass_input" id="PassInput" aria-describedby="emailHelp"
                    placeholder="*************">
                    <span><i class="far fa-eye-slash show_pass"></i> </span>
                </div>

                <div class="passinp">
                    <label for="newPassword">تأكيد المرور الجديدة</label>
                    <input type="password" class="form-control pass_input" id="PassInput" aria-describedby="emailHelp"
                    placeholder="*************">
                    <span><i class="far fa-eye-slash show_pass"></i> </span>
                </div>
                
               
              </div>

            </div>

            <div class="sendCode_btn col-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info text-center" data-toggle="modal" data-target="#exampleModal">
                    تم
                </button>
                
                <!-- Modal -->
                <div class="modal fade text-center" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <i class="fa fa-check" aria-hidden="true"></i>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <h5 class="modal-title" id="exampleModalLabel">تم تغيير كلمة المرور بنجاح</h5>
                            </div>
                            <div class="modal-footer">
                            <a href="index.html" class="btn btn-info">الرئيسية</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- popup button-->
                
              </div> <!--send code btn-->

          </div> <!-- row -->
        </form>
      </div> <!-- login form-->
    </div> <!-- container -->
  </div>
  <!-- End EnterCode -->