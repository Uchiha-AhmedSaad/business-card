<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * THis controller to create classes of models To all my site
 */
class Login extends CI_Controller {
public function __construct(){
parent::__construct();
}
// ------------------- login page ------------------ //
public function index(){
            $data['message']= '';
            
            if($this->input->post('submit')){
            
              $this->form_validation->set_rules('admin_name','اسم المدير','required|xss_clean|min_length[3]|trim|callback_validation'); 
              $this->form_validation->set_rules('admin_pass','كلمة المرور','required|xss_clean|min_length[3]|trim');
            
              if ($this -> form_validation -> run()){
               redirect('admin');
            }
            
          }
    
    
    $this->load->view('admin/login',$data);
}
	public function validation() {
		$this -> load -> model('admin_m');
		if ($this -> admin_m -> check_data()) {
			return TRUE;
		} else {
			$this -> form_validation -> set_message('validation', 'البيانات غير صحيحة');
			return FALSE;
		}
	} 
}