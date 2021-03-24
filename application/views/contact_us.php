    <!-- contact us-->
    <div class="contact_us" style=" margin-top: 20px; ">
        <div class="container">
            <form method="POST" action="<?php echo base_url('site/contact_us'); ?>">
              <div class="row contact_us_row">
                      
                      <div class="col-12">
                          <div class="form-group">
                            <label for="msg_name"><?php echo e_lang('Name') ?></label>
                            <input class="form-control" type="text" value="<?php echo set_value('msg_name');  ?>"  name="msg_name" id="msg_name">
                            <span class="req_nm">*</span>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                            <label for="msg_email"><?php echo e_lang('Email'); ?></label>
                            <input class="form-control" value="<?php echo set_value('msg_email');  ?>"  type="email" name="msg_email" id="msg_email">
                            <span class="req_em">*</span>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                            <label for="msg_phone"><?php echo e_lang('Phone') ?></label>
                            <input class="form-control" type="text" value="<?php echo set_value('msg_phone');  ?>" name="msg_phone" id="msg_phone" placeholder="الهاتف مصحوب بكود الدولة">
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                            <label for="msg_title"><?php echo e_lang('Subject') ?></label>
                            <input class="form-control" value="<?php echo set_value('msg_title');  ?>"  type="text" name="msg_title" id="msg_title">
                            <span class="req_subj">*</span>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                            <label for="msg_details" class="add_job_label"><?php echo e_lang('Details'); ?></label>
                            <textarea class="form-control" value="<?php echo set_value('msg_details');  ?>"  name="msg_details" style="height: 230px; resize: none;"></textarea>
                          </div>
                      </div>
                      <div class="col-12 text-center">
                          <!-- Button trigger modal -->
                          <button type="submit"  class="btn btn-info text-center send" >
                            <?php echo e_lang('Send'); ?>
                          </button>
                      </div>
              </div> <!-- row -->
            </form>
        </div> <!-- container -->
    </div>
    <!-- end contact us-->