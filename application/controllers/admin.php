<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * THis controller to create classes of models To all my site
 */
class Admin extends CI_Controller {
public function __construct(){
parent::__construct();
		if (!$this -> General_Model -> is_login_in_admin()) {
			redirect('login');
		}
}
// ------------------- home page ------------------ //
public function index(){
 $data['message']= '';
    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/home',$data);
    $this->load->view('admin/footer');
}

	// ____________________ All Sliders _______________________ //
	//                                                          //
	public function slider() {
		$this -> load -> model('slider_m');
		$data['message'] = '';
        $this -> load -> library('pagination');
		$data['row'] = $this -> slider_m -> find_all();
		$this -> load -> view('admin/header', $data);
		$this -> load -> view('admin/sidebar');
		$this -> load -> view('admin/slider' , $data);
		$this -> load -> view('admin/footer');
	}
	// ____________________ Add / Edit Slider _______________________ //
	//                                                                //
	public function add_slider($id = 0) {
		$data['message'] = '';
		if ($this -> input -> post('submit') && !$this -> input -> post('id')) {
			$this -> form_validation -> set_rules('title', 'العنوان', 'required');
			if ($this -> form_validation -> run()) {
				$row = array('title' => $this -> input -> post('title'),'title1' => $this -> input -> post('title1'));
				$this -> load -> model('slider_m');
				$cre = $this -> slider_m -> create($row);
				if ($cre != 0) {
					$data['message'] = "تم انشاء الاسلايدر بنجاح";
				} else {
					$data['message'] = "حدث خطأ اثناء انشاء الاسلايدر";
				}
				if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> slider_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('photo' => $photo['file_name']);
						$this -> slider_m -> update('id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
			}
		}
		$data['id'] = $id;
		$this -> load -> view('admin/header', $data);
		$this -> load -> view('admin/sidebar');
		$this -> load -> view('admin/add_slider', $data);
		$this -> load -> view('admin/footer');
	}
 	public function do_edit_slider() {
		$data['message'] = '';
	$gid= $this->uri->segment(3);
		if ($this -> input -> post('submit') && !$this -> input -> post('id')) {
			$this -> form_validation -> set_rules('title', 'العنوان', 'required');
            $this -> form_validation -> set_rules('title1', 'العنوان الثانى', 'required');
			if ($this -> form_validation -> run()) {
				$row = array('title' => $this -> input -> post('title'),'title1' => $this -> input -> post('title1'));
				$this -> load -> model('slider_m');
				$cre = $this -> slider_m -> update('slider_id',$gid,$row);
				if ($cre != 0) {
					$data['message'] = "تم التعديل بنجاح";
				} else {
					$data['message'] = "حدث خطأ اثناء انشاء الاسلايدر";
				}
				if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> slider_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('photo' => $photo['file_name']);
						$this -> slider_m -> update('id',$gid, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
			}
		}
		$data['id'] = $id;
		$this -> load -> view('admin/header', $data);
		$this -> load -> view('admin/sidebar');
		$this -> load -> view('admin/do_edit_slider', $data);
		$this -> load -> view('admin/footer');
	}
    // ------------------- do_delete slider ----------------------------------
public function do_delete_slider(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('slider_m');
    $query= $this->slider_m->delete('id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/slider');
    }else{
        $this->session->set_userdata('message','لم يتم الحذف');
    }
}
    // ------------------- do_delete_report1 ----------------------------------
public function do_delete_report1(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('report1_m');
    $query= $this->report1_m->delete('report1_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/report1');
    }else{
        $this->session->set_userdata('message','لم يتم الحذف');
    }
}
// ------------------- msg page ------------------ //
public function msg(){
    $data['message']= '';
    if($this->input->post('send')){
    $this->form_validation->set_rules('msg_email','البريد الالكترونى','required|trim|valid_email');
    $this->form_validation->set_rules('msg_content','محتوى الرسالة','required|trim');
    	if ($this -> form_validation -> run()) {
            $this -> load -> library('email', array('mailtype' => 'html'));
			$config['charset'] = 'utf-8';
			$this -> email -> from('admin@haraje3lan.com', 'حراج إعلان');
			$this -> email -> to($this->input->post('msg_email'));
			$this -> email -> subject('New message from mehtris');
			$message = '<p style="direction: ltr">'.$this->input->post('msg_content').'</p>';
            $this -> email -> message($message);
			$this -> email -> send();
              $this->session->set_userdata('message','تم ارسال الرسالة بنجاح');
              redirect('admin/msg');
			}
    }
		$this->load->library('pagination');
		$this->load->model('msg_m');
		$config['base_url'] = base_url()."news/index";
		$config['total_rows'] = $this->msg_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->msg_m->pagination('9',$page,'desc','msg_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/msg');
    $this->load->view('admin/footer');
}
// ------------------- msg1 page ------------------ //
public function msg1(){
    $data['message']= '';
    if($this->input->post('send')){
    $this->form_validation->set_rules('msg_email','البريد الالكترونى','required|trim|valid_email');
    $this->form_validation->set_rules('msg_content','محتوى الرسالة','required|trim');
    	if ($this -> form_validation -> run()) {
            $this -> load -> library('email', array('mailtype' => 'html'));
			$config['charset'] = 'utf-8';
			$this -> email -> from('admin@haraje3lan.com', 'حراج إعلان');
			$this -> email -> to($this->input->post('msg_email'));
			$this -> email -> subject('New message from mehtris');
			$message = '<p style="direction: ltr">'.$this->input->post('msg_content').'</p>';
            $this -> email -> message($message);
			$this -> email -> send();
              $this->session->set_userdata('message','تم ارسال الرسالة بنجاح');
              redirect('admin/msg1');
			}
    }
		$this->load->library('pagination');
		$this->load->model('msg1_m');
		$config['base_url'] = base_url()."news/index";
		$config['total_rows'] = $this->msg1_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->msg1_m->pagination('9',$page,'desc','msg_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/msg');
    $this->load->view('admin/footer');
}
// ------------------- commition page ------------------ //
public function commition(){
    $data['message']= '';
    if($this->input->post('send')){
    $this->form_validation->set_rules('msg_email','البريد الالكترونى','required|trim|valid_email');
    $this->form_validation->set_rules('msg_content','محتوى الرسالة','required|trim');
    	if ($this -> form_validation -> run()) {
            $this -> load -> library('email', array('mailtype' => 'html'));
			$config['charset'] = 'utf-8';
			$this -> email -> from('admin@haraje3lan.com', 'حراج إعلان');
			$this -> email -> to($this->input->post('msg_email'));
			$this -> email -> subject('New message from mehtris');
			$message = '<p style="direction: ltr">'.$this->input->post('msg_content').'</p>';
            $this -> email -> message($message);
			$this -> email -> send();
              $this->session->set_userdata('message','تم ارسال الرسالة بنجاح');
              redirect('admin/commition');
			}
    }
		$this->load->library('pagination');
		$this->load->model('commition_m');
		$config['base_url'] = base_url()."news/commition";
		$config['total_rows'] = $this->commition_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->commition_m->pagination('9',$page,'desc','commition_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/commition');
    $this->load->view('admin/footer');
}
// ------------------- message page ------------------ //
public function message(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('message_m');
		$config['base_url'] = base_url()."news/index";
		$config['total_rows'] = $this->message_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->message_m->pagination('9',$page,'desc','message_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/message');
    $this->load->view('admin/footer');
}
// ------------------- do delete message ----------------------------------
public function do_delete_message(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('message_m');
    $query= $this->message_m->delete('message_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/message');
    }else{
        $this->session->set_userdata('message','لم يتم الحذف');
    }
}
// ------------------- do_delete_commition ----------------------------------
public function do_delete_commition(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('commition_m');
    $query= $this->commition_m->delete('commition_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/commition');
    }else{
        $this->session->set_userdata('message','لم يتم الحذف');
    }
}
// ------------------- add_qara page ------------------ //
public function add_qara(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('qara_name','اسم القارة عربى','required|xss_clean|min_length[3]|trim');
      $this->form_validation->set_rules('qara_name_en','اسم القارة انجلش','required|xss_clean|min_length[3]|trim');
      $this->form_validation->set_rules('qara_order','الترتيب','required|xss_clean|integer|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'qara_name' => $this->input->post('qara_name'),
           'qara_name_en' => $this->input->post('qara_name_en'),
           'qara_order' => $this->input->post('qara_order')
         );
         $this->load->model('qara_m');
         $cre= $this->qara_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة القارة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القارة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_qara');
    $this->load->view('admin/footer');
}





// ------------------- edit_qara page ------------------ //
public function edit_qara(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('qara_m');
		$config['base_url'] = base_url()."admin/edit_qara";
		$config['total_rows'] = $this->qara_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->qara_m->pagination('9',$page,'desc','qara_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_qara',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_qara ------------------ //
public function do_edit_qara(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('qara_name','اسم القارة عربى','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('qara_name_en','اسم القارة انجلش','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('qara_order','الترتيب','required|xss_clean|integer|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'qara_name' => $this->input->post('qara_name'),
           'qara_name_en' => $this->input->post('qara_name_en'),
           'qara_order' => $this->input->post('qara_order')
         );
         $this->load->model('qara_m');
         $up= $this->qara_m->update('qara_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('qara_m');
    $query = $this->qara_m->find_all_where_desc('qara_id',$segment,'qara_id');
    $con = $query->row();
    $data['qara_name']= $con->qara_name;
    $data['qara_name_en']= $con->qara_name_en;
    $data['qara_order']= $con->qara_order;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_qara');
    $this->load->view('admin/footer');
}
// ------------------- do do_delete_qara ----------------------------------
public function do_delete_qara(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('qara_m');
    $query= $this->qara_m->delete('qara_id',$segment);
        $this->load->model('country_m');
    $query1= $this->country_m->delete('country_qara',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_qara');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_country page ------------------ //
public function add_country(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('country_name','اسم الدولة ','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('country_order','الترتيب','required|xss_clean|integer|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'country_name' => $this->input->post('country_name'),
           'country_name_en' => $this->input->post('country_name_en'),
           'country_order' => $this->input->post('country_order')
         );
         $this->load->model('country_m');
         $cre= $this->country_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الدولة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة الدولة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_country',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_country page ------------------ //
public function edit_country(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('country_m');
		$config['base_url'] = base_url()."admin/edit_country";
		$config['total_rows'] = $this->country_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->country_m->pagination('9',$page,'desc','country_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_country',$data);
    $this->load->view('admin/footer');
}
public function do_reject_ads_package($segment){
		$this->load->model('ads_package_m');
		$data["ads_package_status"] = "rejected";
		$up= $this->ads_package_m->update('ads_package_id',$segment,$data);
		if(!empty($up)){
				$data['message']= 'تم التعديل بنجاح';
		}else{
				$data['message']= 'لم يتم التعديل';
		}
		redirect('admin/edit_ads_package');
	}
public function do_accept_ads_package($segment){
		$this->load->model('ads_package_m');
		$data["ads_package_status"] = "accepted";
		$up= $this->ads_package_m->update('ads_package_id',$segment,$data);
		$this->load->model('ads_package_m');
		$query = $this->ads_package_m->find_all_where('ads_package_id',$segment);
		$con = $query->row();
		$this->load->model('package_m');
		$query = $this->package_m->find_all_where('package_id',$con->ads_package_package_id);
		$cons = $query->row();
		$this->load->model('ads_m');
		$days = $cons->package_number;
		// var_dump($con);die();
		$datas["ads_star_expire"] = date("Y-m-d",strtotime(' + '.$days.' days '));
		$this->ads_m->update('ads_id',$con->ads_package_ads_id,$datas);
		if(!empty($up)){
				$data['message']= 'تم التعديل بنجاح';
		}else{
				$data['message']= 'لم يتم التعديل';
		}
		redirect('admin/edit_ads_package');
	}
public function edit_ads_package(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_package_m');
// $this->db->query("ALTER TABLE ads_packages ADD ads_package_package_id VARCHAR ( 255) NULL");
		$config['base_url'] = base_url()."admin/edit_ads_package";
		$config['total_rows'] = $this->ads_package_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->ads_package_m->pagination('9',$page,'desc','ads_package_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_ads_package',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_country ------------------ //
public function do_edit_country(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('country_name','اسم الدولة عربى','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('country_order','الترتيب','required|xss_clean|integer|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'country_name' => $this->input->post('country_name'),
           'country_name_en' => $this->input->post('country_name_en'),
           'country_order' => $this->input->post('country_order')
         );
         $this->load->model('country_m');
         $up= $this->country_m->update('country_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('country_m');
    $query = $this->country_m->find_all_where_desc('country_id',$segment,'country_id');
    $con = $query->row();
    $data['country_name']= $con->country_name;
    $data['country_name_en']= $con->country_name_en;
    $data['country_order']= $con->country_order;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_country');
    $this->load->view('admin/footer');
}
// ------------------- do delete country ----------------------------------
public function do_delete_country(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('country_m');
    $query= $this->country_m->delete('country_id',$segment);
    $this->load->model('city_m');
    $query1= $this->city_m->delete('city_country',$segment);
    if($query and $query1){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_country');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_kam page ------------------ //
public function add_kam(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('kam_name','الاسم ','required|xss_clean|min_length[2]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'kam_name' => $this->input->post('kam_name')
         );
         $this->load->model('kam_m');
         $cre= $this->kam_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تمت الاضافة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة الدولة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_kam',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_kam page ------------------ //
public function edit_kam(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('kam_m');
		$config['base_url'] = base_url()."admin/edit_kam";
		$config['total_rows'] = $this->kam_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->kam_m->pagination('9',$page,'desc','kam_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_kam',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_kam ------------------ //
public function do_edit_kam(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('kam_name','الاسم ','required|xss_clean|min_length[2]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'kam_name' => $this->input->post('kam_name')
         );
         $this->load->model('kam_m');
         $up= $this->kam_m->update('kam_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('kam_m');
    $query = $this->kam_m->find_all_where_desc('kam_id',$segment,'kam_id');
    $con = $query->row();
    $data['kam_name']= $con->kam_name;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_kam');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_kam ----------------------------------
public function do_delete_kam(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('kam_m');
    $query= $this->kam_m->delete('kam_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_kam');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_city page ------------------ //
public function add_city(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('city_name','اسم المدينة عربى','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('city_order','الترتيب','required|xss_clean|integer|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'city_name'      => $this->input->post('city_name'),
           'city_name_en'   => $this->input->post('city_name_en'),
           'city_country'   => $this->input->post('city_country'),
            'city_adress'   => $this->input->post('city_adress'),
           'city_order'     => $this->input->post('city_order')
         );
         $this->load->model('city_m');
         $cre= $this->city_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة المدينة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة المدينة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_city',$data);
    $this->load->view('admin/footer');
}
public function add_faq(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('faq_title','عنوان السؤال','required|xss_clean|trim');
      $this->form_validation->set_rules('faq_body','اجابة السؤال','required|xss_clean|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'faq_title' => $this->input->post('faq_title'),
           'faq_body' => $this->input->post('faq_body'),
           'faq_title_en' => $this->input->post('faq_title_en'),
           'faq_body_en' => $this->input->post('faq_body_en'),
         );
         $this->load->model('faq_m');
         $cre= $this->faq_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة السؤال بنجاح';
         }else{
					 $data['message']= 'لم يتم اضافة السؤال';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_faq',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_city page ------------------ //
public function edit_city(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('city_m');
		$config['base_url'] = base_url()."admin/edit_city";
		$config['total_rows'] = $this->city_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->city_m->pagination('9',$page,'desc','city_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_city',$data);
    $this->load->view('admin/footer');
}
public function edit_faq(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('faq_m');
		$config['base_url'] = base_url()."admin/edit_faq";
		$config['total_rows'] = $this->faq_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->faq_m->pagination('9',$page,'desc','faq_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_faq',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_city ------------------ //
public function do_edit_city(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('city_name','اسم المدينة عربى','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('city_order','الترتيب','required|xss_clean|integer|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'city_name' => $this->input->post('city_name'),
           'city_name_en'   => $this->input->post('city_name_en'),
           'city_country' => $this->input->post('city_country'),
             'city_adress' => $this->input->post('city_adress'),
           'city_order' => $this->input->post('city_order')
         );
         $this->load->model('city_m');
         $up= $this->city_m->update('city_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('city_m');
    $query = $this->city_m->find_all_where_desc('city_id',$segment,'city_id');
    $con = $query->row();
    $data['city_name']= $con->city_name;
    $data['city_name_en']= $con->city_name_en;
    $data['city_country']= $con->city_country;
    $data['city_adress']= $con->city_adress;
    $data['city_order']= $con->city_order;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_city');
    $this->load->view('admin/footer');
}
public function do_edit_faq(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
			$this->form_validation->set_rules('faq_title','عنوان السؤال','required|xss_clean|trim');
      $this->form_validation->set_rules('faq_body','اجابة السؤال','required|xss_clean|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'faq_title' => $this->input->post('faq_title'),
           'faq_body' => $this->input->post('faq_body'),
           'faq_title_en' => $this->input->post('faq_title_en'),
           'faq_body_en' => $this->input->post('faq_body_en'),
         );
         $this->load->model('faq_m');
         $up= $this->faq_m->update('faq_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('faq_m');
    $query = $this->faq_m->find_all_where_desc('faq_id',$segment,'faq_id');
    $con = $query->row();
    $data['faq_title']= $con->faq_title;
    $data['faq_title_en']= $con->faq_title_en;
    $data['faq_body']= $con->faq_body;
    $data['faq_body_en']= $con->faq_body_en;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_faq');
    $this->load->view('admin/footer');
}
// ------------------- do delete city ----------------------------------
public function do_delete_city(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('city_m');
    $this->load->model('ads_m');
    $query= $this->city_m->delete('city_id',$segment);
    $query1= $this->ads_m->delete('ads_city',$segment);
    if($query and $query1){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_city');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
public function do_delete_faq(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('faq_m');
    $query= $this->faq_m->delete('faq_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_faq');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_adress page ------------------ //
public function add_adress(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('adress_name','اسم المنطقة','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('adress_country','الدولة','required');
      if ($this -> form_validation -> run()){
         $data= array(
           'adress_name' => $this->input->post('adress_name'),
           'adress_country' => $this->input->post('adress_country')
         );
         $this->load->model('adress_m');
         $cre= $this->adress_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة المنطقة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة المدينة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_adress',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_adress page ------------------ //
public function edit_adress(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('adress_m');
		$config['base_url'] = base_url()."admin/edit_adress";
		$config['total_rows'] = $this->adress_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->adress_m->pagination('9',$page,'desc','adress_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_adress',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_adress ------------------ //
public function do_edit_adress(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('adress_name','اسم الحى','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('adress_country','الدولة','required');
         if ($this -> form_validation -> run()){
         $data= array(
           'adress_name' => $this->input->post('adress_name'),
           'adress_country' => $this->input->post('adress_country')
         );
         $this->load->model('adress_m');
         $up= $this->adress_m->update('adress_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('adress_m');
    $query = $this->adress_m->find_all_where_desc('adress_id',$segment,'adress_id');
    $con = $query->row();
    $data['adress_name']= $con->adress_name;
    $data['adress_country']= $con->adress_country;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_adress');
    $this->load->view('admin/footer');
}
// ------------------- do delete adress ----------------------------------
public function do_delete_adress(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('adress_m');
    $query= $this->adress_m->delete('adress_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_adress');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_url page ------------------ //
public function add_url(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('url_name','الاسم','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('url_url','الرابط','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('url_order','الترتيب','required|xss_clean|integer|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'url_name' => $this->input->post('url_name'),
           'url_url' => $this->input->post('url_url'),
           'url_order' => $this->input->post('url_order')
         );
         $this->load->model('url_m');
         $cre= $this->url_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الرابط بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة المدينة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_url',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_url page ------------------ //
public function edit_url(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('url_m');
		$config['base_url'] = base_url()."admin/edit_url";
		$config['total_rows'] = $this->url_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->url_m->pagination('9',$page,'desc','url_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_url',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_url  ------------------ //
public function do_edit_url(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('url_name','الاسم','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('url_url','الرابط','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('url_order','الترتيب','required|xss_clean|integer|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'url_name' => $this->input->post('url_name'),
           'url_url' => $this->input->post('url_url'),
           'url_order' => $this->input->post('url_order')
         );
         $this->load->model('url_m');
         $up= $this->url_m->update('url_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('url_m');
    $query = $this->url_m->find_all_where_desc('url_id',$segment,'url_id');
    $con = $query->row();
    $data['url_name']= $con->url_name;
    $data['url_url']= $con->url_url;
    $data['url_order']= $con->url_order;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_url');
    $this->load->view('admin/footer');
}
// ------------------- do delete url ----------------------------------
public function do_delete_url(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('url_m');
    $query= $this->url_m->delete('url_id',$segment);
    if($query and $query1){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_url');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_cat page ------------------ //
public function add_cat(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('cat_name','اسم القسم عربى','required|xss_clean|min_length[3]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'cat_name'       => $this->input->post('cat_name'),
           'cat_name_en'    => $this->input->post('cat_name_en'),
           'cat_order'      => $this->input->post('cat_order'),
         );
         $this->load->model('cat_m');
         $cre= $this->cat_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة القسم بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
          	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> cat_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('cat_photo' => $photo['file_name']);
						$this -> cat_m -> update('cat_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
          	if (!empty($_FILES['imgURL2']['tmp_name'])) {
					if ($this -> cat_m -> doupload2()) {
						$photo = $this -> upload -> data();
						$new_photo = array('cat_hover_photo' => $photo['file_name']);
						$this -> cat_m -> update('cat_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
                 	if (!empty($_FILES['imgURLq']['tmp_name'])) {
					if ($this -> cat_m -> doupload1()) {
						$photo = $this -> upload -> data();
						$new_photo = array('cat_banner' => $photo['file_name']);
						$this -> cat_m -> update('cat_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_cat');
    $this->load->view('admin/footer');
}
// ------------------- edit_cat page ------------------ //
public function edit_cat(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('cat_m');
		$config['base_url'] = base_url()."admin/edit_cat";
		$config['total_rows'] = $this->cat_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->cat_m->pagination('9',$page,'asc','cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_cat',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_cat ------------------ //
public function do_edit_cat(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('cat_name','اسم القسم عربى','required|xss_clean|min_length[3]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'cat_name' => $this->input->post('cat_name'),
            'cat_name_en' => $this->input->post('cat_name_en'),
           'cat_order' => $this->input->post('cat_order'),
         );
         $this->load->model('cat_m');
         $up= $this->cat_m->update('cat_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
                 	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> cat_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('cat_photo' => $photo['file_name']);
						$this -> cat_m -> update('cat_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
				if (!empty($_FILES['imgURL2']['tmp_name'])) {
			if ($this -> cat_m -> doupload2()) {
				$photo = $this -> upload -> data();
				$new_photo = array('cat_hover_photo' => $photo['file_name']);
				$this -> cat_m -> update('cat_id',$segment, $new_photo);
			} else {
				$data['message'] = $this -> upload -> display_errors();
			}
			}
                                 	if (!empty($_FILES['imgURL1']['tmp_name'])) {
					if ($this -> cat_m -> doupload1()) {
						$photo = $this -> upload -> data();
						$new_photo = array('cat_banner' => $photo['file_name']);
						$this -> cat_m -> update('cat_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('cat_m');
    $query = $this->cat_m->find_all_where_desc('cat_id',$segment,'cat_id');
    $con = $query->row();
    $data['cat_name']= $con->cat_name;
    $data['cat_name_en']= $con->cat_name_en;
    $data['cat_order']= $con->cat_order;
    $data['cat_photo']= $con->cat_photo;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_cat');
    $this->load->view('admin/footer');
}
// ------------------- do delete cat ----------------------------------
public function do_delete_cat(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('cat_m');
    $query= $this->cat_m->delete('cat_id',$segment);
      $this->load->model('ads_m');
    $query= $this->ads_m->delete('ads_cat',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_cat');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_support page ------------------ //
public function add_support(){
    $data['message']= '';
    if($this->input->post('submit')){
       $this->form_validation->set_rules('support_title','عنوان لسؤال عربى','required|xss_clean|min_length[3]|trim');
       $this->form_validation->set_rules('support_title_en','عنوان لسؤال انجلش','required|xss_clean|min_length[3]|trim');
       $this->form_validation->set_rules('support_content','محتوى السؤال عربى','required|xss_clean|min_length[3]|trim');
       $this->form_validation->set_rules('support_content_en','محتوى السؤال انجلش','required|xss_clean|min_length[3]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'support_title' => $this->input->post('support_title'),
           'support_title_en' => $this->input->post('support_title_en'),
           'support_content' => $this->input->post('support_content'),
           'support_content_en' => $this->input->post('support_content_en')
         );
         $this->load->model('support_m');
         $cre= $this->support_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة السؤال بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_support');
    $this->load->view('admin/footer');
}
// ------------------- edit_support page ------------------ //
public function edit_support(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('support_m');
		$config['base_url'] = base_url()."admin/edit_support";
		$config['total_rows'] = $this->support_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->support_m->pagination('9',$page,'desc','support_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_support',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_support ------------------ //
public function do_edit_support(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
    $this->form_validation->set_rules('support_title','عنوان لسؤال عربى','required|xss_clean|min_length[3]|trim');
     $this->form_validation->set_rules('support_title_en','عنوان لسؤال انجلش','required|xss_clean|min_length[3]|trim');
     $this->form_validation->set_rules('support_content','محتوى السؤال عربى','required|xss_clean|min_length[3]|trim');
     $this->form_validation->set_rules('support_content_en','محتوى السؤال انجلش','required|xss_clean|min_length[3]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'support_title' => $this->input->post('support_title'),
           'support_title_en' => $this->input->post('support_title_en'),
           'support_content' => $this->input->post('support_content'),
           'support_content_en' => $this->input->post('support_content_en')
         );
         $this->load->model('support_m');
         $up= $this->support_m->update('support_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('support_m');
    $query = $this->support_m->find_all_where_desc('support_id',$segment,'support_id');
    $con = $query->row();
    $data['support_title']= $con->support_title;
    $data['support_title_en']= $con->support_title_en;
    $data['support_content']= $con->support_content;
    $data['support_content_en']= $con->support_content_en;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_support');
    $this->load->view('admin/footer');
}
// ------------------- do delete support ----------------------------------
public function do_delete_support(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('support_m');
    $query= $this->support_m->delete('support_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_support');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_sub page ------------------ //
public function add_sub(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('sub_name','اسم القسم الفرعى عربى','required|xss_clean|min_length[2]|trim');
     $this->form_validation->set_rules('sub_name_en','اسم القسم الفرعى انجلش','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('sub_cat','القسم الرئيسى','required');
      $this->form_validation->set_rules('sub_order','الترتيب','required|xss_clean|integer|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'sub_name' => $this->input->post('sub_name'),
           'sub_name_en' => $this->input->post('sub_name_en'),
           'sub_cat' => $this->input->post('sub_cat'),
           'sub_order' => $this->input->post('sub_order')
         );
         $this->load->model('sub_m');
         $cre= $this->sub_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة القسم الفرعى بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة المدينة';
         }
      }
    }
    //select cat list
    $this->load->model('cat_m');
    $data['cat']= $this->cat_m->find_all_desc('cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_sub',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_sub page ------------------ //
public function edit_sub(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('sub_m');
		$config['base_url'] = base_url()."admin/edit_sub";
		$config['total_rows'] = $this->sub_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->sub_m->pagination('9',$page,'desc','sub_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_sub',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_sub ------------------ //
public function do_edit_sub(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('sub_name','القسم الفرعى عربى','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('sub_name_en','القسم الفرعى انجلش','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('sub_cat',' القسم الرئيسيى','required');
        $this->form_validation->set_rules('sub_order','الترتيب','required|xss_clean|integer|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'sub_name' => $this->input->post('sub_name'),
           'sub_name_en' => $this->input->post('sub_name_en'),
           'sub_cat' => $this->input->post('sub_cat'),
           'sub_order' => $this->input->post('sub_order')
         );
         $this->load->model('sub_m');
         $up= $this->sub_m->update('sub_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('sub_m');
    $query = $this->sub_m->find_all_where_desc('sub_id',$segment,'sub_id');
    $con = $query->row();
    $data['sub_name']= $con->sub_name;
    $data['sub_name_en']= $con->sub_name_en;
    $data['sub_cat']= $con->sub_cat;
    $data['sub_order']= $con->sub_order;
    //select cat list
    $this->load->model('cat_m');
    $data['cat']= $this->cat_m->find_all_desc('cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_sub');
    $this->load->view('admin/footer');
}
// ------------------- do delete sub ----------------------------------
public function do_delete_sub(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('sub_m');
     $this->load->model('ads_m');
    $query= $this->sub_m->delete('sub_id',$segment);
    $queryq= $this->ads_m->delete('ads_sub',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_sub');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_admin page ------------------ //
public function add_admin(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('admin_name','اسم المدير','required|xss_clean|min_length[3]|trim|is_unique[admin.admin_name]');
      $this->form_validation->set_rules('admin_pass','كلمة المرور','required|xss_clean|min_length[3]|trim|md5');
      if ($this -> form_validation -> run()){
         $data= array(
           'admin_name' => $this->input->post('admin_name'),
           'admin_pass' => $this->input->post('admin_pass'),
           'admin_c1' => $this->input->post('admin_c1'),
           'admin_c2' => $this->input->post('admin_c2'),
           'admin_c3' => $this->input->post('admin_c3'),
           'admin_c4' => $this->input->post('admin_c4'),
           'admin_c5' => $this->input->post('admin_c5'),
           'admin_c6' => $this->input->post('admin_c6'),
           'admin_c7' => $this->input->post('admin_c7'),
           'admin_c8' => $this->input->post('admin_c8'),
           'admin_c9' => $this->input->post('admin_c9'),
           'admin_c10' => $this->input->post('admin_c10'),
           'admin_c11' => $this->input->post('admin_c11'),
           'admin_c12' => $this->input->post('admin_c12'),
           'admin_c13' => $this->input->post('admin_c13'),
           'admin_c14' => $this->input->post('admin_c14'),
           'admin_c15' => $this->input->post('admin_c15'),
           'admin_c16' => $this->input->post('admin_c16'),
           'admin_c17' => $this->input->post('admin_c17'),
           'admin_c18' => $this->input->post('admin_c18'),
           'admin_c19' => $this->input->post('admin_c19'),
           'admin_c20' => $this->input->post('admin_c20')
         );
         $this->load->model('admin_m');
         $cre= $this->admin_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تمت الاضافة بنجاح';
         }else{
             $data['message']= 'لم يتم الاضفة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_admin');
    $this->load->view('admin/footer');
}
// ------------------- edit_admin page ------------------ //
public function edit_admin(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('admin_m');
		$config['base_url'] = base_url()."admin/edit_admin";
		$config['total_rows'] = $this->admin_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->admin_m->pagination('9',$page,'desc','admin_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_admin',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_editpage ------------------ //
public function do_edit(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('admin_name','اسم المدير','required|xss_clean|min_length[2]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'admin_name' => $this->input->post('admin_name'),
           'admin_c1' => $this->input->post('admin_c1'),
           'admin_c2' => $this->input->post('admin_c2'),
           'admin_c3' => $this->input->post('admin_c3'),
           'admin_c4' => $this->input->post('admin_c4'),
           'admin_c5' => $this->input->post('admin_c5'),
           'admin_c6' => $this->input->post('admin_c6'),
           'admin_c7' => $this->input->post('admin_c7'),
           'admin_c8' => $this->input->post('admin_c8'),
           'admin_c9' => $this->input->post('admin_c9'),
           'admin_c10' => $this->input->post('admin_c10'),
           'admin_c11' => $this->input->post('admin_c11'),
           'admin_c12' => $this->input->post('admin_c12'),
           'admin_c13' => $this->input->post('admin_c13'),
           'admin_c14' => $this->input->post('admin_c14'),
           'admin_c15' => $this->input->post('admin_c15'),
           'admin_c16' => $this->input->post('admin_c16'),
           'admin_c17' => $this->input->post('admin_c17'),
           'admin_c18' => $this->input->post('admin_c18'),
           'admin_c19' => $this->input->post('admin_c19'),
           'admin_c20' => $this->input->post('admin_c20')
         );
         $this->load->model('admin_m');
         $up= $this->admin_m->update('admin_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('admin_m');
    $query = $this->admin_m->find_all_where('admin_id',$segment);
    $con = $query->row();
    $data['admin_name']= $con->admin_name;
    $data['admin_c1']= $con->admin_c1;
    $data['admin_c2']= $con->admin_c2;
    $data['admin_c3']= $con->admin_c3;
    $data['admin_c4']= $con->admin_c4;
    $data['admin_c5']= $con->admin_c5;
    $data['admin_c6']= $con->admin_c6;
    $data['admin_c7']= $con->admin_c7;
    $data['admin_c8']= $con->admin_c8;
    $data['admin_c9']= $con->admin_c9;
    $data['admin_c10']= $con->admin_c10;
    $data['admin_c11']= $con->admin_c11;
    $data['admin_c12']= $con->admin_c12;
    $data['admin_c13']= $con->admin_c13;
    $data['admin_c14']= $con->admin_c14;
    $data['admin_c15']= $con->admin_c15;
    $data['admin_c16']= $con->admin_c16;
    $data['admin_c17']= $con->admin_c17;
    $data['admin_c18']= $con->admin_c18;
    $data['admin_c19']= $con->admin_c19;
    $data['admin_c20']= $con->admin_c20;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit');
    $this->load->view('admin/footer');
}
// ------------------- do_edit1 page ------------------ //
public function do_edit1(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('admin_pass','كلمة المرور','required|xss_clean|min_length[3]|trim|md5');
         if ($this -> form_validation -> run()){
         $data= array(
           'admin_pass' => $this->input->post('admin_pass')
         );
         $this->load->model('admin_m');
         $up= $this->admin_m->update('admin_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('admin_m');
    $query = $this->admin_m->find_all_where('admin_id',$segment);
    $con = $query->row();
    $data['admin_pass']= $con->admin_pass;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit1');
    $this->load->view('admin/footer');
}
// ------------------- do delete ----------------------------------
public function do_delete(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('admin_m');
    $query= $this->admin_m->delete('admin_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/edit_admin');
    }else{
         $data['message']= 'لم يتم التعديل';
    }
}
// ------------------- do delete_comment ----------------------------------
public function do_delete_comment(){
    $data['message']= '';
      $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('comments_m');
    $query= $this->comments_m->delete('comment_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect($this->agent->referrer(), 'refresh');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ----------------------------- setting page ----------------------------------
public function setting(){
    $data['message']= '';
    if($this->input->post('submit')){
         $this->form_validation->set_rules('setting_name','اسم الموقع ','required|xss_clean|min_length[2]|trim');
         $this->form_validation->set_rules('setting_email','البريد الالكترونى','required|xss_clean|min_length[5]|trim');
           $this->form_validation->set_rules('setting_phone','الجوال ','required|xss_clean|min_length[5]|trim');
        if ($this -> form_validation -> run()){
         $data= array(
           'setting_name'           => $this->input->post('setting_name'),
           'setting_email'          => $this->input->post('setting_email'),
           'setting_value'          => $this->input->post('setting_value'),
           'setting_word'           => $this->input->post('setting_word'),
           'setting_adress'         => $this->input->post('setting_adress'),
           'setting_phone'          => $this->input->post('setting_phone'),
           'setting_phone1'         => $this->input->post('setting_phone1'),
           'setting_desc'           => $this->input->post('setting_desc'),
           'setting_kays'           => $this->input->post('setting_kays'),
           'setting_rules'          => $this->input->post('setting_rules'),
           'setting_rules_en'       => $this->input->post('setting_rules_en'),
           'setting_about'          => $this->input->post('setting_about'),
		   'setting_about_en'       => $this->input->post('setting_about_en'),
           'setting_support'        => $this->input->post('setting_support'),
		   'setting_support_en'     => $this->input->post('setting_support_en'),
           'setting_face'           => $this->input->post('setting_face'),
           'setting_twitt'          => $this->input->post('setting_twitt'),
           'setting_you'            => $this->input->post('setting_you'),
           'setting_rss'            => $this->input->post('setting_rss'),
           'setting_plus'           => $this->input->post('setting_plus'),
           'setting_appstore'       => $this->input->post('setting_appstore'),
           'setting_googleplay'     => $this->input->post('setting_googleplay'),
           'setting_windowsstore'   => $this->input->post('setting_windowsstore'),
           'setting_comments'       => $this->input->post('setting_comments'),
           'setting_add'            => $this->input->post('setting_add'),
           'setting_package'        => $this->input->post('setting_package'),
           'setting_commition'      => $this->input->post('setting_commition'),
           'setting_promise'        => $this->input->post('setting_promise'),
           'banner_url'             => $this->input->post('banner_url'),
           'annonce_days'           => $this->input->post('annonce_days'),
           'instgram'               => $this->input->post('instgram'),
           'snap'                   => $this->input->post('snap'),
           'linkedin'               => $this->input->post('linkedin'),
           'bank_name'              => $this->input->post('bank_name'),
           'bank_own_account'       => $this->input->post('bank_own_account'),
           'account_namber'         => $this->input->post('account_namber'),

         );
         $this->load->model('setting');
         $up= $this->setting->update('setting_id','1',$data);
         if(!empty($up)){
             $this->session->set_userdata('message','تم التعديل بنجاح');
         }else{
             $this->session->set_userdata('message','لم يتم التعديل');
         }
                          	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> setting -> doupload('imgURL')) {
						$photo = $this -> upload -> data();
						$new_photo = array('banner_photo' => $photo['file_name']);
						$this -> setting -> update('setting_id',1, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('setting');
    $query = $this->setting->find_all_where('setting_id','1');
    $con = $query->row();
    $data['setting_name']= $con->setting_name;
    $data['annonce_days']= $con->annonce_days;
    $data['setting_email']= $con->setting_email;
    $data['setting_value']= $con->setting_value;
    $data['setting_adress']= $con->setting_adress;
    $data['setting_word']= $con->setting_word;
    $data['setting_phone']= $con->setting_phone;
    $data['setting_phone1']= $con->setting_phone1;
    $data['setting_rules_en']= $con->setting_rules_en;
    $data['setting_desc']= $con->setting_desc;
    $data['setting_kays']= $con->setting_kays;
    $data['setting_rules']= $con->setting_rules;
    $data['setting_about']= $con->setting_about;
	$data['setting_about_en']= $con->setting_about_en;
    $data['setting_support']= $con->setting_support;
	$data['setting_support_en']= $con->setting_support_en;
    $data['setting_face']= $con->setting_face;
    $data['setting_twitt']= $con->setting_twitt;
    $data['setting_you']= $con->setting_you;
    $data['setting_rss']= $con->setting_rss;
    $data['setting_plus']= $con->setting_plus;
    $data['setting_appstore']= $con->setting_appstore;
    $data['setting_googleplay']= $con->setting_googleplay;
    $data['setting_windowsstore']= $con->setting_windowsstore;
    $data['setting_comments']= $con->setting_comments;
    $data['setting_add']= $con->setting_add;
    $data['setting_package']= $con->setting_package;
    $data['setting_commition']= $con->setting_commition;
    $data['setting_promise']= $con->setting_promise;
    $data['banner_url']= $con->banner_url;
    $data['banner_photo']= $con->banner_photo;

    $data['instgram']= $con->instgram;
    $data['snap']= $con->snap;
    $data['linkedin']= $con->linkedin;

    $data['bank_name']= $con->bank_name;
    $data['bank_own_account']= $con->bank_own_account;
    $data['account_namber']= $con->account_namber;

    $this->load->view('admin/header');
    $this->load->view('admin/sidebar');
    $this->load->view('admin/setting',$data);
    $this->load->view('admin/footer');
}
// ------------------- banner ------------------ //
public function banner(){
    $data['message']= '';
    if($this->input->post('submit')){
     $this->form_validation->set_rules('banner1_link','اسم المتجر','required|xss_clean|min_length[2]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'banner1_link'       => $this->input->post('banner1_link'),
           'banner2_link'       => $this->input->post('banner2_link'),
           'banner3_link'       => $this->input->post('banner3_link'),
           'banner4_link'       => $this->input->post('banner4_link'),
           'banner5_link'       => $this->input->post('banner5_link'),
           'banner6_link'       => $this->input->post('banner6_link'),
           'banner7_link'       => $this->input->post('banner7_link'),
           'banner8_link'       => $this->input->post('banner8_link')
         );
         $this->load->model('banner_m');
         $up= $this->banner_m->update('banner_id','1',$data);
         if(!empty($up)){
             $data['message']= 'تم  التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
         	if (!empty($_FILES['imgURL1']['tmp_name'])) {
					if ($this -> banner_m -> doupload1()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner1_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
				if (!empty($_FILES['imgURL2']['tmp_name'])) {
					if ($this -> banner_m -> doupload2()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner2_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
				if (!empty($_FILES['imgURL3']['tmp_name'])) {
					if ($this -> banner_m -> doupload3()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner3_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
				if (!empty($_FILES['imgURL4']['tmp_name'])) {
					if ($this -> banner_m -> doupload4()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner4_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
				if (!empty($_FILES['imgURL5']['tmp_name'])) {
					if ($this -> banner_m -> doupload5()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner5_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
                	if (!empty($_FILES['imgURL6']['tmp_name'])) {
					if ($this -> banner_m -> doupload6()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner6_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
           	if (!empty($_FILES['imgURL7']['tmp_name'])) {
					if ($this -> banner_m -> doupload7()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner7_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
	if (!empty($_FILES['imgURL8']['tmp_name'])) {
					if ($this -> banner_m -> doupload8()) {
						$thisslider = $this -> banner_m -> find_by_id('banner_id','1');
						$photo = $this -> upload -> data();
						$new_photo = array('banner8_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id','1', $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('banner_m');
    $query = $this->banner_m->find_all_where('banner_id','1');
    $con = $query->row();
        $data['banner1_photo']       = $con->banner1_photo;
        $data['banner1_link']        = $con->banner1_link;
        $data['banner2_photo']       = $con->banner2_photo;
        $data['banner2_link']        = $con->banner2_link;
        $data['banner3_photo']       = $con->banner3_photo;
        $data['banner3_link']        = $con->banner3_link;
        $data['banner4_photo']       = $con->banner4_photo;
        $data['banner4_link']        = $con->banner4_link;
        $data['banner5_photo']       = $con->banner5_photo;
        $data['banner5_link']        = $con->banner5_link;
        $data['banner6_photo']       = $con->banner6_photo;
        $data['banner6_link']        = $con->banner6_link;
                $data['banner7_photo']       = $con->banner7_photo;
        $data['banner7_link']        = $con->banner7_link;
                $data['banner8_photo']       = $con->banner8_photo;
        $data['banner8_link']        = $con->banner8_link;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/banner',$data);
    $this->load->view('admin/footer');
}
// ------------------- users page ----------------------------------
public function users(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('users_m');
		$config['base_url'] = base_url()."admin/users";
		$config['total_rows'] = $this->users_m->count_all_where('user_active',0);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
        $data['row']= $this->users_m->pagination_where('9',$page,'desc','user_id',array('user_active'=>0));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/users',$data);
    $this->load->view('admin/footer');
}
// ------------------- users1 page ----------------------------------
public function users1(){
    $data['message']= '';
    if($this->input->post('send')){
    $this->form_validation->set_rules('msg_phone','البريد الالكترونى','required|trim');
    $this->form_validation->set_rules('msg_content','محتوى الرسالة','required|trim');
    	if ($this -> form_validation -> run()) {
                     // ارسل  رسالة اشعار
         $this->load->model('users_m');
         $q9= $this->users_m->find_all_where('user_phone',$this->input->post('msg_phone'));
         $d9= $q9->row();
         $this->load->model('message_m');
         $data2= array(
         'message_sender'=>0,
         'message_recever'=> $d9->user_id,
         'message_title'=> 'رسالة من الادارة',
         'message_content'=> $this->input->post('msg_content'),
         'message_date'=> time()
         );
         $this->message_m->create($data2);
         $this->session->set_userdata('message','تم ارسال الرسالة بنجاح');
              redirect('admin/users1');
			}
    }
		$this->load->library('pagination');
		$this->load->model('users_m');
		$config['base_url'] = base_url()."admin/users1";
		$config['total_rows'] = $this->users_m->count_all_where('user_active',1);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
        $data['row']= $this->users_m->pagination_where('9',$page,'desc','user_id',array('user_active'=>1));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/users1',$data);
    $this->load->view('admin/footer');
}
// ------------------- users2 page ----------------------------------
public function users2(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('users_m');
		$config['base_url'] = base_url()."admin/users1";
		$config['total_rows'] = $this->users_m->count_all_where('user_active',2);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
        $data['row']= $this->users_m->pagination_where('9',$page,'desc','user_id',array('user_active'=>2));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/users2',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_users ------------------ //
public function do_edit_users(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('user_name','الاسم','required|xss_clean|min_length[3]|trim');
      $this->form_validation->set_rules('user_phone','رقم الهاتف','xss_clean|min_length[3]|trim|integer');
         if ($this -> form_validation -> run()){
         $data= array(
           'user_name' => $this->input->post('user_name'),
           'user_type' => $this->input->post('user_type'),
           'user_phone' => $this->input->post('user_phone')
         );
         $this->load->model('users_m');
         $up= $this->users_m->update('user_id',$segment,$data);
                  			if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> users_m -> doupload()) {
						$thisslider = $this -> users_m -> find_by_id('user_id',$this->session->userdata('user_id'));
						$photo = $this -> upload -> data();
						$new_photo = array('user_photo' => $photo['file_name']);
						$this -> users_m -> update('user_id',$this->session->userdata('user_id'), $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
         if(!empty($up)){
             $data['message']= 'تم  التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('users_m');
    $query = $this->users_m->find_all_where('user_id',$segment);
    $con = $query->row();
    $data['user_name']  = $con->user_name;
    $data['user_type'] = $con->user_type;
    $data['user_phone'] = $con->user_phone;
    $data['user_photo'] = $con->user_photo;
        //select country list
    //select city
    $this->load->model('city_m');
    $data['city']= $this->city_m->find_all_desc('city_order');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_users');
    $this->load->view('admin/footer');
}
// ------------------- do_edit_users_pass ------------------ //
public function do_edit_users_pass(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('user_pass','الرقم السرى','required|xss_clean|min_length[1]|trim|md5');
         if ($this -> form_validation -> run()){
         $data= array(
           'user_pass' => $this->input->post('user_pass')
         );
         $this->load->model('users_m');
         $up= $this->users_m->update('user_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم  التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('users_m');
    $query = $this->users_m->find_all_where('user_id',$segment);
    $con = $query->row();
    $data['user_pass']  = $con->user_pass;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_users_pass');
    $this->load->view('admin/footer');
}
// -------------------  do_act_users  ----------------------------------
public function do_act_users(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $query= $this->users_m->update('user_id',$segment,array('user_active'=>1));
    if($query){
         $this->session->set_userdata('message','تم التفعيل بنجاح');
        redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// -------------------  do_dis_users  ----------------------------------
public function do_dis_users(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $query= $this->users_m->update('user_id',$segment,array('user_active'=>0));
    if($query){
         $this->session->set_userdata('message','تم الغاء التفعيل');
        redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// -------------------  do_dis1_users  ----------------------------------
public function do_dis1_users(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $query= $this->users_m->update('user_id',$segment,array('user_active'=>2));
    if($query){
         $this->session->set_userdata('message','تم حظر العضو');
        redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// ------------------- do delete users ----------------------------------
public function do_delete_users(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $this->load->model('ads_m');
    $query= $this->users_m->delete('user_id',$segment);
    $query1= $this->ads_m->delete('ads_by',$segment);
    $this->load->model('comments_m');
    $query= $this->comments_m->delete('comment_by',$segment);
    $this->load->model('mozida_m');
    $query= $this->mozida_m->delete('mozida_user',$segment);
    $this->load->model('report_m');
    $query= $this->report_m->delete('report_user',$segment);
    $this->load->model('report1_m');
    $query= $this->report1_m->delete('report1_user',$segment);
      $this->load->model('save_ads_m');
    $query= $this->save_ads_m->delete('save_ads_user',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
                 redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم الحذف');
    }
}
// ------------------- report page ------------------ //
public function report(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('report_m');
		$config['base_url'] = base_url()."admin/report";
		$config['total_rows'] = $this->report_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->report_m->pagination('9',$page,'desc','report_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/report',$data);
    $this->load->view('admin/footer');
}
// ------------------- report1 page ------------------ //
public function report1(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('report1_m');
		$config['base_url'] = base_url()."admin/report1";
		$config['total_rows'] = $this->report1_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->report1_m->pagination('9',$page,'desc','report1_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/report1',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_ads page ------------------ //


private function pagination($per_page = 10,$url,$count)
{
    $conditions['returnType']   = 'count';
    $config['base_url']         = $url;
    $config['use_page_numbers'] =FALSE;
    $config['uri_segment']      = 3;
    $config['per_page']         = $per_page;
    $config['total_rows']       = $count;
    $config['num_tag_open']     = '<li>';
    $config['num_tag_close']    = '</li>';
    $config['cur_tag_open']     = '<li class="active"><a href="javascript:void(0);">';
    $config['cur_tag_close']    = '</li>';
    $config['next_link']        = 'التالي';
    $config['prev_link']        = 'السابق';
    $config['last_link']        = 'الأخيرة';
    $config['next_tag_open']    = '<li class="pg-next">';
    $config['next_tag_close']   = '</li>';
    $config['prev_tag_open']    = '<li class="pg-prev">';
    $config['prev_tag_close']   = '</li>';
    $config['first_tag_open']   = '<li>';
    $config['first_tag_close']  = '</li>';
    $config['last_tag_open']    = '<li>';
    $config['last_tag_close']   = '</li>';
    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $offset = !$page?0:$page;
    $data['total_rows'] = $config['total_rows'];
    $data['_per_page'] = $per_page;
    $data['_page'] = intval($page/$per_page)+1;
    $conditions['returnType'] = '';
    $conditions['start'] = $offset;
    $conditions['limit'] = $per_page;
    return $limit = array($offset,$per_page);
}
public function edit_card_package_requests()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_card_package_requests");
    $total_rows     = $this->db->where('request_status','pending')->count_all_results('card_package_requests');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['card_package_requests']= $this->db->where('request_status','pending')->get('card_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );


    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_card_package_requests',$data);
    $this->load->view('admin/footer');
}
public function edit_card_package_requests_accept()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_card_package_requests");
    $total_rows     = $this->db->where('request_status','accept')->count_all_results('card_package_requests');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['card_package_requests']= $this->db->where('request_status','accept')->get('card_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );


    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_card_package_requests_accept',$data);
    $this->load->view('admin/footer');
}
public function edit_card_package_requests_refuse()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_card_package_requests");
    $total_rows     = $this->db->where('request_status','refuse')->count_all_results('card_package_requests');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['card_package_requests']= $this->db->where('request_status','refuse')->get('card_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );


    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_card_package_requests_refuse',$data);
    $this->load->view('admin/footer');
}
public function packageRequest()
{
    $id = $this->uri->segment(3);
    $status = $this->uri->segment(4);

    $change_status = $this->db->where('request_id',$id)->update('card_package_requests',[
        'request_status' => $status
    ]);
    if ($status == 'accept') {

        $request = $this->db->where('request_id',$id)->get('card_package_requests')->row();
        $package = $this->db->where('package_id',$request->request_package_id)->get('package')->row();

        $card = $this->db->where('b_cards_id',$request->card_id)->update('b_cards',[
            'expire_date' => date('Y-m-d H-i-s',strtotime('+'.$package->package_number.' days')),'expire_date_unix' => strtotime('+'.$package->package_number.' days')]);
    }

    if($change_status){
         $this->session->set_userdata('message','تم تغير الحالة بنجاح');
               
                return redirect($_SERVER['HTTP_REFERER']);
    }else{
        $this->session->set_userdata('message','لم يتم تغير الحالة');
        return redirect(base_url('admin/edit_card_package_requests'));
    }
}
public function edit_cards_unique()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_ads");
    $total_rows     = $this->db->where('b_cards_id IN (SELECT card_id FROM card_package_requests WHERE request_status ="accept")')->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->count_all_results('b_cards');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['b_cards']= $this->db
                                ->where('b_cards_id IN (SELECT card_id FROM card_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')
                                ->get('b_cards',$paginate[1],$paginate[0])->result();


    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');

    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_b_card',$data);
    $this->load->view('admin/footer');
}
public function edit_cards_normal()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_ads");
    $total_rows     = $this->db->where('b_cards_id IN (SELECT card_id FROM card_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->count_all_results('b_cards');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['b_cards']= $this->db ->where('b_cards_id NOT IN (SELECT card_id FROM card_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')
                                ->get('b_cards',$paginate[1],$paginate[0])->result();
    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');

    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_b_card',$data);
    $this->load->view('admin/footer');
}
public function edit_cards_expire()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_ads");
    $total_rows     = $this->db->where('b_cards_id IN (SELECT card_id FROM card_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->count_all_results('b_cards');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['b_cards']= $this->db
                                ->where('DATE(expire_date) < "'.date('Y-m-d H:i:s').'" ')
                                ->get('b_cards',$paginate[1],$paginate[0])->result();


    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');

    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_b_card',$data);
    $this->load->view('admin/footer');
}



public function edit_jobs_unique()
{ 
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs");
    $total_rows     = $this->db->where('job_id IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->count_all_results('jobs');
    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['jobs']= $this->db->where('job_id IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->get('jobs',$paginate[1],$paginate[0])->result();
    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');
    $data['categories'] = $this->db->get('cat')->result_array();
    $data['categories'] = array_column($data['categories'],'cat_name','cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs',$data);
    $this->load->view('admin/footer');
}
public function edit_jobs_normal()
{ 
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs");
    $total_rows     = $this->db->where('job_id NOT IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->count_all_results('jobs');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['jobs']= $this->db->where('job_id NOT IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) > "'.date('Y-m-d H:i:s').'" ')->get('jobs',$paginate[1],$paginate[0])->result();


    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');
    $data['categories'] = $this->db->get('cat')->result_array();
    $data['categories'] = array_column($data['categories'],'cat_name','cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs_normal',$data);
    $this->load->view('admin/footer');
}
public function edit_jobs_expire()
{ 
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs");
    $total_rows     = $this->db->where('job_id IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) < "'.date('Y-m-d H:i:s').'" ')->count_all_results('jobs');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['jobs']= $this->db->where('job_id IN (SELECT job_id FROM job_package_requests WHERE request_status ="accept")')
                                ->where('DATE(expire_date) < "'.date('Y-m-d H:i:s').'" ')->get('jobs',$paginate[1],$paginate[0])->result();


    $data['cities'] = $this->db->get('city')->result_array();
    $data['cities'] = array_column($data['cities'],'city_name','city_id');
    $data['countries'] = $this->db->get('country')->result_array();
    $data['countries'] = array_column($data['countries'],'country_name','country_id');
    $data['categories'] = $this->db->get('cat')->result_array();
    $data['categories'] = array_column($data['categories'],'cat_name','cat_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs_expire',$data);
    $this->load->view('admin/footer');
}
public function edit_jobs_package_requests()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs_package_requests");
    $total_rows     = $this->db->where('request_status','pending')->count_all_results('job_package_requests');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['job_package_requests']= $this->db->where('request_status','pending')->get('job_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );

 
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs_package_requests',$data);
    $this->load->view('admin/footer');
}
public function edit_jobs_package_requests_accept()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs_package_requests_accept");
    $total_rows     = $this->db->where('request_status','accept')->count_all_results('job_package_requests');
    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['job_package_requests']= $this->db->where('request_status','accept')->get('job_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );


    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs_package_requests_accept',$data);
    $this->load->view('admin/footer');
}
public function edit_jobs_package_requests_refuse()
{
    $data['message']= '';
    $this->load->library('pagination');

    $url            = base_url("admin/edit_jobs_package_requests_refuse");
    $total_rows     = $this->db->where('request_status','refuse')->count_all_results('job_package_requests');


    $paginate       = $this->pagination(10,$url,$total_rows);
    $data['job_package_requests']= $this->db->where('request_status','refuse')->get('job_package_requests',$paginate[1],$paginate[0])->result();
    $users = $this->db->get('users')->result_array();
    $data['users'] = array_column($users, 'user_name','user_id');
    $package = $this->db->get('package')->result_array();

    $data['package'] = array_column($package,'package_name','package_id' );


    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_jobs_package_requests_refuse',$data);
    $this->load->view('admin/footer');
}
public function packageJobsRequest()
{
    $id = $this->uri->segment(3);
    $status = $this->uri->segment(4);

    $change_status = $this->db->where('request_id',$id)->update('job_package_requests',[
        'request_status' => $status
    ]);
    if ($status == 'accept') {

        $request = $this->db->where('request_id',$id)->get('job_package_requests')->row();
        $package = $this->db->where('package_id',$request->request_package_id)->get('package')->row();

        $card = $this->db->where('b_cards_id',$request->card_id)->update('jobs',[
            'expire_date' => date('Y-m-d H-i-s',strtotime('+'.$package->package_number.' days')),'expire_date_unix' => strtotime('+'.$package->package_number.' days')]);
    }

    if($change_status){
         $this->session->set_userdata('message','تم تغير الحالة بنجاح');
               
                return redirect($_SERVER['HTTP_REFERER']);
    }else{
        $this->session->set_userdata('message','لم يتم تغير الحالة');
        return redirect(base_url('admin/edit_jobs_package_requests'));
    }
}
// ------------------- edit_ads1 page ------------------ //
public function edit_ads1(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_m');
		$config['base_url'] = base_url()."admin/edit_ads1";
		$config['total_rows'] = $this->ads_m->count_all_where('ads_active',1);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->ads_m->pagination_where('9',$page,'desc','ads_id',array('ads_active'=>1));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_ads1',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_ads2 page ------------------ //
public function edit_ads2(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_m');
		$config['base_url'] = base_url()."admin/edit_ads2";
		$config['total_rows'] = $this->ads_m->count_all_where('ads_active',2);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->ads_m->pagination_where('9',$page,'desc','ads_id',array('ads_active'=>2));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_ads2',$data);
    $this->load->view('admin/footer');
}
// ------------------- edit_ads3 page ------------------ //
public function edit_ads3(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_m');
		$config['base_url'] = base_url()."admin/edit_ads3";
		$config['total_rows'] = $this->ads_m->count_all_where('ads_active',3);
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->ads_m->pagination_where('9',$page,'desc','ads_id',array('ads_active'=>3));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_ads3',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_ads page ------------------ //
public function do_edit_ads(){
    $this->load->library('user_agent');
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('ads_title','عنوان الإعلان','required|xss_clean');
      $this->form_validation->set_rules('ads_details','الوصف','trim|xss_clean|');
      if ($this -> form_validation -> run()){
         $data= array(
           'ads_title' => $this->input->post('ads_title'),
           'ads_details' => $this->input->post('ads_details'),
           'ads_desc' => $this->input->post('ads_desc'),
           'ads_cat' => $this->input->post('ads_cat'),
           'ads_city' => $this->input->post('ads_city'),
					 'ads_mzad_normal' => $this->input->post('ads_mzad_normal'),
					 'ads_mzad_date' => $this->input->post('ads_mzad_date'),
           'ads_price' => intval($this->input->post('ads_price')),
           'ads_phone' => $this->input->post('ads_phone'),
           'ads_video' => $this->input->post('ads_video')
         );
                $this->load->model('ads_m');
        $up= $this->ads_m->update('ads_id',$segment,$data);
         if(!empty($up)){
            $this->session->set_userdata('message',"تم التعديل بنجاح");
                        $i = 0;
            $row1=array('ads_id' => $segment  );
            $this -> load -> model('ads_photos');
            $files = array();
            $files = $_FILES;
            $cpt = count($_FILES['imgURL']['name']);
            $m=0;
            for($i=0; $i<$cpt; $i++)
            {
            $_FILES['imgURL']['name']= $files['imgURL']['name'][$i];
            $_FILES['imgURL']['type']= $files['imgURL']['type'][$i];
            $_FILES['imgURL']['tmp_name']= $files['imgURL']['tmp_name'][$i];
            $_FILES['imgURL']['error']= $files['imgURL']['error'][$i];
            $_FILES['imgURL']['size']= $files['imgURL']['size'][$i];
            if ($_FILES['imgURL']['name'] != '') {
            if ($this -> ads_photos -> doupload()) {
            $photo = $this -> upload -> data();
            $row1['photo'] =  $photo['file_name'];
            $this -> ads_photos -> create($row1);
              $this->load->library('image_lib');
        $config['image_library'] = 'gd2';
        $config['source_image'] = './uploads/'.$photo['file_name'];
        $config['wm_type'] = 'overlay';
        $config['wm_overlay_path'] = './uploads/watermark.png';
        //the overlay image
        $config['wm_opacity'] = 50;
        $config['wm_vrt_alignment'] = 'bottom';
        $config['wm_hor_alignment'] = 'right';
        $this->image_lib->initialize($config);
        if (!$this->image_lib->watermark()) {
            //echo $this->image_lib->display_errors();
        } else {
           // echo 'Successfully updated image with watermark';
        }
            } else {
            $data['message'] = $this -> upload -> display_errors();
            }
            }
            if($m == 30){
            break;
            }
            $m++;
            }
             $this->load->model('ads_m');
    $query = $this->ads_m->find_all_where_desc('ads_id',$segment,'ads_id');
    $con = $query->row();
               // ارسال رسالة للمتابعين
         $this->load->model('follow_m');
         $q_follow= $this->follow_m->find_all_where('follow_ads',$segment);
         foreach($q_follow->result() as $d_follow){
            $this->load->model('message1_m');
            $data2= array(
            'message_sender'=>0,
            'message_recever'=> $d_follow->follow_user,
            'message_title'=>'تنبيه بتعديل على إعلان تتابعه',
            'message_content'=> 'هناك تعديل على الإعلان الذى تتابعه : '."<a href='http://mehtris.art4muslim.net/site/show/$con->ads_id'>$con->ads_title</a>",
            'message_date'=> time()
            );
            $this->message1_m->create($data2);
         }
            redirect($this->agent->referrer(), 'refresh');
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
        //select
    $this->load->model('ads_m');
    $query = $this->ads_m->find_all_where_desc('ads_id',$segment,'ads_id');
    $con = $query->row();
    $data['ads_title']    = $con->ads_title;
    $data['ads_details']    = $con->ads_details;
    $data['ads_desc']    = $con->ads_desc;
    $data['ads_city']       = $con->ads_city;
    $data['ads_cat']       = $con->ads_cat;
    $data['ads_price']    = $con->ads_price;
    $data['ads_phone']    = $con->ads_phone;
    $data['ads_video']    = $con->ads_video;
    $data['ads_phone']    = $con->ads_phone;
    $data['ads_mzad_normal']    = $con->ads_mzad_normal;
    $data['ads_mzad_date']    = $con->ads_mzad_date;
    // select country
    $this->load->model('country_m');
    $data['country']= $this->country_m->find_all_desc('country_id');
    // select at
    $this->load->model('cat_m');
    $data['cat']= $this->cat_m->find_all_where_asc1(array('cat_sub'=>0),'cat_id');
    $data['sub']= $this->cat_m->queryy("select * from cat where cat_sub>0 order by cat_id desc");
        // select ads photos
    $this->load->model('ads_photos');
    $data['photo']= $this->ads_photos->find_all_where('ads_id',$segment);
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_ads',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_delete_photo page ----------------------------------
public function do_delete_photo(){
    $this->load->library('user_agent');
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('ads_photos');
    $query= $this->ads_photos->delete('id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
        redirect($this->agent->referrer(), 'refresh');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- do_delete_msg page ----------------------------------
public function do_delete_msg(){
    $this->load->library('user_agent');
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('msg_m');
    $query= $this->msg_m->delete('msg_id',$segment);
    if($query){
         $this->session->set_userdata('message','تم الحذف بنجاح');
        redirect($this->agent->referrer(), 'refresh');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_poll page ------------------ //
public function add_poll(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('poll_q','السؤال عربى','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('poll_q_en','السؤال انجلش','required|xss_clean|min_length[2]|trim');
      $this->form_validation->set_rules('poll_r','الاجابات عربى','required|xss_clean|min_length[2]|trim');
       $this->form_validation->set_rules('poll_r_en','الاجابات انجلش','required|xss_clean|min_length[2]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'poll_q' => $this->input->post('poll_q'),
           'poll_q_en' => $this->input->post('poll_q_en')
         );
         $this->load->model('poll_m');
         $cre= $this->poll_m->create($data);
         $this->load->model('reply_m');
         $x= explode(',',$this->input->post('poll_r'));
         $x1= explode(',',$this->input->post('poll_r_en'));
                while
                (
                (list($key, $value) = each($x))
                && (list($key1, $value1) = each($x1))
                )
                {
                        $data1= array(
            'reply_title'=>$value,
            'reply_title_en'=>$value1,
            'reply_poll' => $cre
            );
            $this->reply_m->create($data1);
                }
         if(!empty($cre)){
             $data['message']= 'تم اضافة الاستفتاء بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة الاستفتاء';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_poll');
    $this->load->view('admin/footer');
}
// ------------------- add_reply page ------------------ //
public function add_reply(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('reply_title','الاجابة','required|xss_clean|min_length[2]|trim');
       $this->form_validation->set_rules('reply_poll','السؤال','required');
      if ($this -> form_validation -> run()){
         $data= array(
           'reply_title'  => $this->input->post('reply_title'),
           'reply_poll'   => $this->input->post('reply_poll'),
           'reply_result' => 0
         );
         $this->load->model('reply_m');
         $cre= $this->reply_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الاجابة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة الاجابة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_reply');
    $this->load->view('admin/footer');
}
// ------------------- poll page ------------------ //
public function poll(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('poll_m');
		$config['base_url'] = base_url()."admin/poll";
		$config['total_rows'] = $this->poll_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->poll_m->pagination('9',$page,'desc','poll_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/poll',$data);
    $this->load->view('admin/footer');
}
// ------------------- do do_delete_poll ----------------------------------
public function do_delete_poll(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('poll_m');
    $query= $this->poll_m->delete('poll_id',$segment);
    $this->load->model('reply_m');
    $query1= $this->reply_m->delete('reply_poll',$segment);
    if($query and $query1){
         $this->session->set_userdata('message','تم الحذف بنجاح');
         redirect('admin/edit_poll');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- dis_comments page ------------------ //
public function dis_comments(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('comments_m');
		$config['base_url'] = base_url()."admin/dis_comments";
		$config['total_rows'] = $this->comments_m->count_all_where1(array('comment_active'=>0));
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->comments_m->pagination_where('9',$page,'desc','comment_id',array('comment_active'=>0));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/dis_comments',$data);
    $this->load->view('admin/footer');
}
// ------------------- act_comments page ------------------ //
public function  act_comments(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('comments_m');
		$config['base_url'] = base_url()."admin/act_comments";
		$config['total_rows'] = $this->comments_m->count_all_where1(array('comment_active'=>1));
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->comments_m->pagination_where('9',$page,'desc','comment_id',array('comment_active'=>1));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/act_comments',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_comments ------------------ //
public function do_edit_comments(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('comment_details','التعليق','required|xss_clean|min_length[3]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'comment_details' => $this->input->post('comment_details')
         );
         $this->load->model('comments_m');
         $up= $this->comments_m->update('comment_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('comments_m');
    $query = $this->comments_m->find_all_where_desc('comment_id',$segment,'comment_id');
    $con = $query->row();
    $data['comment_details']= $con->comment_details;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_comments');
    $this->load->view('admin/footer');
}
// -------------------  do_active_comments  ----------------------------------
public function do_active_comments(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('comments_m');
    $query= $this->comments_m->update('comment_id',$segment,array('comment_active'=>1));
    if($query){
         $this->session->set_userdata('message','تم التفعيل بنجاح');
         redirect('admin/dis_comments');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// ------------------- add_money page ------------------ //
public function add_money(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('money_name','اسم العملة','required|trim');
       $this->form_validation->set_rules('money_name_en','اسم العملة انجلش','required|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'money_name' => $this->input->post('money_name'),
            'money_name_en' => $this->input->post('money_name_en')
         );
         $this->load->model('money_m');
         $cre= $this->money_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة العملة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة لعملة';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_money');
    $this->load->view('admin/footer');
}
// ------------------- edit_money page ------------------ //
public function edit_money(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('money_m');
		$config['base_url'] = base_url()."admin/edit_money";
		$config['total_rows'] = $this->money_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->money_m->pagination('9',$page,'desc','money_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_money',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_money ------------------ //
public function do_edit_money(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('money_name','اسم العملة عربى','required|trim');
        $this->form_validation->set_rules('money_name_en','اسم العملة انجلش','required|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'money_name' => $this->input->post('money_name'),
           'money_name_en' => $this->input->post('money_name_en')
         );
         $this->load->model('money_m');
         $up= $this->money_m->update('money_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('money_m');
    $query = $this->money_m->find_all_where_desc('money_id',$segment,'money_id');
    $con = $query->row();
    $data['money_name']= $con->money_name;
     $data['money_name_en']= $con->money_name_en;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_money');
    $this->load->view('admin/footer');
}
// ------------------- do do_delete_money ----------------------------------
public function do_delete_money(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('money_m');
    $query= $this->money_m->delete('money_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_money');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
    // ------------------ add_user page  --------------------------
public function add_user(){
    //select page meta
    $data['page_title']= 'register';
      if($this->input->post('submit')){
      $this->form_validation->set_rules('user_name','الاسم','required|xss_clean|min_length[3]|trim');
      $this->form_validation->set_rules('user_pass','كلمة المرور','required|xss_clean|min_length[3]|trim|md5');
      $this->form_validation->set_rules('user_phone','رقم الهاتف','required|xss_clean|min_length[3]|trim|integer|is_unique[users.user_phone]');
      $this->form_validation->set_rules('user_email','البريد الالكترونى','required|xss_clean|min_length[3]|trim|valid_email|is_unique[users.user_email]');
       $this->form_validation->set_rules('user_country','الدولة','required');
      if ($this -> form_validation -> run()){
         $data= array(
           'user_name' => $this->input->post('user_name'),
           'user_email' => $this->input->post('user_email'),
           'user_pass' => $this->input->post('user_pass'),
           'user_phone' => $this->input->post('user_phone'),
           'user_country' => $this->input->post('user_country'),
           'user_type' => $this->input->post('user_type'),
           'user_active' => 1,
           'user_date' => time(),
           'user_photo' => 'default_user.png'
         );
       $this->load->model('users_m');
       $cre= $this->users_m->create($data);
       if(!empty($cre)){
        $this->session->set_userdata('message','تم اضافة عضو بنجاح');
        redirect('admin/add_user');
       }
      }
    }
   $data['user_name']= $this->input->post('user_name');
   $data['user_email']= $this->input->post('user_email');
   $data['user_city']= $this->input->post('user_city');
   $data['user_phone']= $this->input->post('user_phone');
    //select country list
    $this->load->model('country_m');
    $data['country']= $this->country_m->find_all_asc('country_order');
    //select cat list
    $this->load->model('cat_m');
    $data['cat']= $this->cat_m->find_all_asc('cat_order');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_user');
    $this->load->view('admin/footer');
}
            // ------------------ add_bank page  --------------------------
public function add_bank(){
  $data['message']= '';
   if($this->input->post('submit')){
      $this->form_validation->set_rules('bank_title','اسم البنك','required|xss_clean|trim');
      $this->form_validation->set_rules('bank_acount','رقم الحساب','required|xss_clean|trim');
      $this->form_validation->set_rules('bank_name','اسم صاحب الحساب','required|xss_clean|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'bank_title' => $this->input->post('bank_title'),
           'bank_acount' => $this->input->post('bank_acount'),
           'bank_name' => $this->input->post('bank_name')
         );
         $this->load->model('bank_m');
         $cre= $this->bank_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم أضافة البنك بنجاح';
         }else{
             $data['message']= 'لم يتم الاضافة';
         }
         	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> bank_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('bank_photo' => $photo['file_name']);
						$this -> bank_m -> update('bank_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_bank');
    $this->load->view('admin/footer');
    }
    // ------------------- edit_bank page ------------------ //
public function edit_bank(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('bank_m');
		$config['base_url'] = base_url()."admin/edit_bank";
		$config['total_rows'] = $this->bank_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->bank_m->pagination('9',$page,'desc','bank_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_bank',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_bank ------------------ //
public function do_edit_bank(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('bank_title','اسم البنك','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('bank_acount','رقم الحساب','required|xss_clean|min_length[3]|trim');
          $this->form_validation->set_rules('bank_name','اسم صاحب الحساب','required|xss_clean|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'bank_title' => $this->input->post('bank_title'),
           'bank_acount' => $this->input->post('bank_acount'),
           'bank_name' => $this->input->post('bank_name')
         );
         $this->load->model('bank_m');
         $up= $this->bank_m->update('bank_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التحديث بنجاح';
         }else{
             $data['message']= 'Ù„Ù… ÙŠØªÙ… Ø§Ù„ØªØ¹Ø¯ÙŠÙ„';
         }
                 	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> bank_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('bank_photo' => $photo['file_name']);
						$this -> bank_m -> update('bank_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('bank_m');
    $query = $this->bank_m->find_all_where('bank_id',$segment);
    $con = $query->row();
    $data['bank_title']= $con->bank_title;
    $data['bank_acount']= $con->bank_acount;
    $data['bank_name']= $con->bank_name;
    $data['bank_photo']= $con->bank_photo;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_bank');
    $this->load->view('admin/footer');
}
// ------------------- do do_delete_bank ----------------------------------
public function do_delete_bank(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('bank_m');
    $query= $this->bank_m->delete('bank_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_bank');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
            // ------------------ add_charge page  --------------------------
public function add_charge(){
  $data['message']= '';
   if($this->input->post('submit')){
      $this->form_validation->set_rules('charge_title','اسم الطريقة','required|xss_clean|trim');
      $this->form_validation->set_rules('charge_content','تفايل الطريقة','required|xss_clean|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'charge_title' => $this->input->post('charge_title'),
           'charge_content' => $this->input->post('charge_content')
         );
         $this->load->model('charge_m');
         $cre= $this->charge_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم أضافة الطريقة بنجاح';
         }else{
             $data['message']= 'لم يتم الاضافة';
         }
         	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> charge_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('charge_photo' => $photo['file_name']);
						$this -> charge_m -> update('charge_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_charge');
    $this->load->view('admin/footer');
    }
    // ------------------- edit_charge page ------------------ //
public function edit_charge(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('charge_m');
		$config['base_url'] = base_url()."admin/edit_charge";
		$config['total_rows'] = $this->charge_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->charge_m->pagination('9',$page,'desc','charge_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_charge',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_charge ------------------ //
public function do_edit_charge(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
        $this->form_validation->set_rules('charge_title','اسم الطريقة','required|xss_clean|min_length[3]|trim');
        $this->form_validation->set_rules('charge_content','تفاصيل الطريقة','required|xss_clean|min_length[3]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'charge_title' => $this->input->post('charge_title'),
           'charge_content' => $this->input->post('charge_content')
         );
         $this->load->model('charge_m');
         $up= $this->charge_m->update('charge_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التحديث بنجاح';
         }else{
             $data['message']= 'Ù„Ù… ÙŠØªÙ… Ø§Ù„ØªØ¹Ø¯ÙŠÙ„';
         }
                 	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> charge_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('charge_photo' => $photo['file_name']);
						$this -> charge_m -> update('charge_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('charge_m');
    $query = $this->charge_m->find_all_where('charge_id',$segment);
    $con = $query->row();
    $data['charge_title']= $con->charge_title;
    $data['charge_content']= $con->charge_content;
    $data['charge_photo']= $con->charge_photo;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_charge');
    $this->load->view('admin/footer');
}
// ------------------- do do_delete_chare----------------------------------
public function do_delete_charge(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('charge_m');
    $query= $this->charge_m->delete('charge_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_charge');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// -------------------  do_act_ads  ----------------------------------
public function do_act_ads(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_active'=>1));
    if($query){
         $this->session->set_userdata('message','تم التفعيل بنجاح');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
  // -------------------  do_dis_ads  ----------------------------------
public function do_dis_ads(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_active'=>0));
    if($query){
         $this->session->set_userdata('message','تم الغاء التفعيل');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
  // -------------------  do_dis1_ads  ----------------------------------
public function do_dis1_ads(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_active'=>3));
    if($query){
         $this->session->set_userdata('message','تم حظر الإعلان');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
  // -------------------  do_delete_ads  ----------------------------------
public function do_delete_ads(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_active'=>2));
    $this->load->model('comments_m');
    $query= $this->comments_m->delete('comment_gid',$segment);
    $this->load->model('mozida_m');
    $query= $this->mozida_m->delete('mozida_ads',$segment);
    $this->load->model('report_m');
    $query= $this->report_m->delete('report_gid',$segment);
      $this->load->model('save_ads_m');
    $query= $this->save_ads_m->delete('save_ads_adsid',$segment);
    if($query){
    $this->session->set_userdata('message','تم حذف الإعلان');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
 // -------------------  do_end_mzad  ----------------------------------
public function do_end_mzad(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_mzad_end'=>1));
    if($query){
         $this->session->set_userdata('message','تم انهاء المزاد');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// -------------------  do_star_ads  ----------------------------------
public function do_star_ads(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_star'=>1));
    if($query){
         $this->session->set_userdata('message','تم التمييز بنجاح');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// -------------------  do_star_ads1  ----------------------------------
public function do_star_ads1(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('ads_m');
    $query= $this->ads_m->update('ads_id',$segment,array('ads_star'=>0));
    if($query){
         $this->session->set_userdata('message','تم الغاء التمييز');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// ------------------ add_package page  --------------------------
public function add_package(){
  $data['message']= '';
   if($this->input->post('submit')){
      $this->form_validation->set_rules('package_number','المدة','required|xss_clean|trim');
      $this->form_validation->set_rules('package_price','السعر','required|xss_clean|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'package_name' => $this->input->post('package_name'),
           'package_name_en' => $this->input->post('package_name_en'),
           'package_number' => $this->input->post('package_number'),
           'package_price' => $this->input->post('package_price'),
           'country_id' => $this->input->post('country_id')
         );
         $this->load->model('package_m');
         $cre= $this->package_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم أضافة الباقة بنجاح';
         }else{
             $data['message']= 'لم يتم الاضافة';
         }
      }
    }

    $data['countries'] = $this->db->get('country')->result();

    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_package');
    $this->load->view('admin/footer');
    }
    // ------------------- edit_package ------------------ //
public function edit_package(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('package_m');
		$config['base_url'] = base_url()."admin/edit_package";
		$config['total_rows'] = $this->package_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
$data['row']= $this->package_m->pagination('9',$page,'desc','package_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_package',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_package ------------------ //
public function do_edit_package(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('package_number','المدة','required|xss_clean|trim');
      $this->form_validation->set_rules('package_price','السعر','required|xss_clean|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'package_name' => $this->input->post('package_name'),
           'package_name_en' => $this->input->post('package_name_en'),
           'package_number' => $this->input->post('package_number'),
           'package_price' => $this->input->post('package_price'),
           'country_id'   => $this->input->post('country_id'),
         );
         $this->load->model('package_m');
         $up= $this->package_m->update('package_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التحديث بنجاح';
         }else{
             $data['message']= 'Ù„Ù… ÙŠØªÙ… Ø§Ù„ØªØ¹Ø¯ÙŠÙ„';
         }
      }
    }
    //select
    $data['countries'] = $this->db->get('country')->result();
    $this->load->model('package_m');

    $query = $this->package_m->find_all_where('package_id',$segment);
    $con = $query->row();
    $data['package_number']= $con->package_number;
    $data['country_id']= $con->country_id;
    
    $data['package_name']= $con->package_name;
    $data['package_name_en']= $con->package_name_en;
    $data['package_price']= $con->package_price;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_package');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_package ----------------------------------
public function do_delete_package(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('package_m');
    $query= $this->package_m->delete('package_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_package');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- mzadat page ------------------ //
public function mzadat(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_m');
		$config['base_url'] = base_url()."admin/mzadat";
		$config['total_rows'] = $this->ads_m->count_all_where1(array('ads_price_type'=>2,'ads_mzad_end'=>0,'ads_active'=>1));
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->ads_m->pagination_where('9',$page,'desc','ads_id',array('ads_price_type'=>2,'ads_mzad_end'=>0,'ads_active'=>1));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/mzadat',$data);
    $this->load->view('admin/footer');
}
// ------------------- mzadat1 page ------------------ //
public function mzadat1(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('ads_m');
		$config['base_url'] = base_url()."admin/mzadat1";
		$config['total_rows'] = $this->ads_m->count_all_where1(array('ads_price_type'=>2,'ads_mzad_end'=>1,'ads_active'=>1));
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->ads_m->pagination_where('9',$page,'desc','ads_id',array('ads_price_type'=>2,'ads_mzad_end'=>1,'ads_active'=>1));
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/mzadat1',$data);
    $this->load->view('admin/footer');
}
// -------------------  do_trust_user  ----------------------------------
public function do_trust_user(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $query= $this->users_m->update('user_id',$segment,array('user_trust'=>1));
    if($query){
         $this->session->set_userdata('message','تم التوثيق بنجاح');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// -------------------  do_trust1_user  ----------------------------------
public function do_trust1_user(){
    $data['message']= '';
       $this->load->library('user_agent');
    $segment= $this->uri->segment(3);
    $this->load->model('users_m');
    $query= $this->users_m->update('user_id',$segment,array('user_trust'=>0));
    if($query){
         $this->session->set_userdata('message','تم الغاء التوثيق');
    redirect($this->agent->referrer(), 'refresh');
    }else{
        $this->session->set_userdata('message','لم يتم التفعيل');
    }
}
// ------------------- follow page ----------------------------------
public function follow(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('follow_m');
		$config['base_url'] = base_url()."admin/follow";
		$config['total_rows'] = $this->follow_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
        $data['row']= $this->follow_m->pagination('9',$page,'desc','follow_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/follow',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_delete_follow ----------------------------------
public function do_delete_follow(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('follow_m');
    $query= $this->follow_m->delete('follow_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/follow');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- save_ads page ----------------------------------
public function save_ads(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('save_ads_m');
		$config['base_url'] = base_url()."admin/save_ads_m";
		$config['total_rows'] = $this->save_ads_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
        $data['row']= $this->save_ads_m->pagination('9',$page,'desc','save_ads_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/save_ads',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_delete_save_ads ----------------------------------
public function do_delete_save_ads(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('save_ads_m');
    $query= $this->save_ads_m->delete('save_ads_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/save_ads');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_marka page ------------------ //
public function add_marka(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('marka_name','اسم الماركة','required|xss_clean|min_length[3]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'marka_name' => $this->input->post('marka_name')
         );
         $this->load->model('marka_m');
         $cre= $this->marka_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الماركة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
          	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> marka_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('marka_photo' => $photo['file_name']);
						$this -> marka_m -> update('marka_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_marka');
    $this->load->view('admin/footer');
}
// ------------------- edit_marka page ------------------ //
public function edit_marka(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('marka_m');
		$config['base_url'] = base_url()."admin/edit_marka";
		$config['total_rows'] = $this->marka_m->count_all();
		$config['per_page'] = 100;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 100 -100;
       $data['row']= $this->marka_m->pagination('100',$page,'asc','marka_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_marka',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_marka------------------ //
public function do_edit_marka(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('marka_name','اسم الماركة','required|xss_clean|min_length[3]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'marka_name' => $this->input->post('marka_name')
         );
         $this->load->model('marka_m');
         $up= $this->marka_m->update('marka_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
                 	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> marka_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('marka_photo' => $photo['file_name']);
						$this -> marka_m -> update('marka_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('marka_m');
    $query = $this->marka_m->find_all_where_desc('marka_id',$segment,'marka_id');
    $con = $query->row();
    $data['marka_name']= $con->marka_name;
    $data['marka_photo']= $con->marka_photo;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_marka');
    $this->load->view('admin/footer');
}
// ------------------- do delete marka ----------------------------------
public function do_delete_marka(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('marka_m');
    $query= $this->marka_m->delete('marka_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_marka');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_type page ------------------ //
public function add_type(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type_name','اسم القسم عربى','required|xss_clean|min_length[1]|trim');
      $this->form_validation->set_rules('type_marka','الماركة','required|xss_clean');
      if ($this -> form_validation -> run()){
         $data= array(
           'type_name' => $this->input->post('type_name'),
           'type_marka'  => $this->input->post('type_marka')
         );
         $this->load->model('type_m');
         $cre= $this->type_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الماركة بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_type');
    $this->load->view('admin/footer');
}
// ------------------- edit_type page ------------------ //
public function edit_type(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('type_m');
		$config['base_url'] = base_url()."admin/edit_type";
		$config['total_rows'] = $this->type_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->type_m->pagination('9',$page,'desc','type_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_type',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_type ------------------ //
public function do_edit_type(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type_name','اسم القسم عربى','required|xss_clean|min_length[1]|trim');
      $this->form_validation->set_rules('type_marka','الماركة','required|xss_clean');
         if ($this -> form_validation -> run()){
         $data= array(
           'type_name' => $this->input->post('type_name'),
           'type_marka'  => $this->input->post('type_marka')
         );
         $this->load->model('type_m');
         $up= $this->type_m->update('type_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('type_m');
    $query = $this->type_m->find_all_where_desc('type_id',$segment,'type_id');
    $con = $query->row();
    $data['type_name']= $con->type_name;
    $data['type_marka']= $con->type_marka;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_type');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_type ----------------------------------
public function do_delete_type(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('type_m');
    $query= $this->type_m->delete('type_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_type');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_type1 page ------------------ //
public function add_type1(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type1_name','الاسم','required|xss_clean|min_length[1]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'type1_name' => $this->input->post('type1_name')
         );
         $this->load->model('type1_m');
         $cre= $this->type1_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة النوع بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_type1');
    $this->load->view('admin/footer');
}
// ------------------- edit_type1 page ------------------ //
public function edit_type1(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('type1_m');
		$config['base_url'] = base_url()."admin/edit_type1";
		$config['total_rows'] = $this->type1_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->type1_m->pagination('9',$page,'desc','type1_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_type1',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_type1 ------------------ //
public function do_edit_type1(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type1_name','اسم القسم ','required|xss_clean|min_length[1]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'type1_name' => $this->input->post('type1_name')
         );
         $this->load->model('type1_m');
         $up= $this->type1_m->update('type1_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('type1_m');
    $query = $this->type1_m->find_all_where_desc('type1_id',$segment,'type1_id');
    $con = $query->row();
    $data['type1_name']= $con->type1_name;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_type1');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_type1 ----------------------------------
public function do_delete_type1(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('type1_m');
    $query= $this->type1_m->delete('type1_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_type1');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_type2 page ------------------ //
public function add_type2(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type2_name','الاسم','required|xss_clean|min_length[1]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'type2_name' => $this->input->post('type2_name')
         );
         $this->load->model('type2_m');
         $cre= $this->type2_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة النوع بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_type2');
    $this->load->view('admin/footer');
}
// ------------------- edit_type2 page ------------------ //
public function edit_type2(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('type2_m');
		$config['base_url'] = base_url()."admin/edit_type2";
		$config['total_rows'] = $this->type2_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->type2_m->pagination('9',$page,'desc','type2_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_type2',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_type2 ------------------ //
public function do_edit_type2(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type2_name','اسم القسم ','required|xss_clean|min_length[1]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'type2_name' => $this->input->post('type2_name')
         );
         $this->load->model('type2_m');
         $up= $this->type2_m->update('type2_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('type2_m');
    $query = $this->type2_m->find_all_where_desc('type2_id',$segment,'type2_id');
    $con = $query->row();
    $data['type2_name']= $con->type2_name;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_type2');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_type2 ----------------------------------
public function do_delete_type2(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('type2_m');
    $query= $this->type2_m->delete('type2_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_type2');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_type3 page ------------------ //
public function add_type3(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type3_name','الاسم','required|xss_clean|min_length[1]|trim');
      if ($this -> form_validation -> run()){
         $data= array(
           'type3_name' => $this->input->post('type3_name')
         );
         $this->load->model('type3_m');
         $cre= $this->type3_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة النوع بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_type3');
    $this->load->view('admin/footer');
}
// ------------------- edit_type3 page ------------------ //
public function edit_type3(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('type3_m');
		$config['base_url'] = base_url()."admin/edit_type3";
		$config['total_rows'] = $this->type3_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->type3_m->pagination('9',$page,'desc','type3_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_type3',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_type3 ------------------ //
public function do_edit_type3(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('type3_name','اسم القسم ','required|xss_clean|min_length[1]|trim');
         if ($this -> form_validation -> run()){
         $data= array(
           'type3_name' => $this->input->post('type3_name')
         );
         $this->load->model('type3_m');
         $up= $this->type3_m->update('type3_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('type3_m');
    $query = $this->type3_m->find_all_where_desc('type3_id',$segment,'type3_id');
    $con = $query->row();
    $data['type2_name']= $con->type2_name;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_type3');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_type3 ----------------------------------
public function do_delete_type3(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('type3_m');
    $query= $this->type3_m->delete('type3_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_type3');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_model page ------------------ //
public function add_model(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('model_name','الموديل','required|xss_clean');
      if ($this -> form_validation -> run()){
         $data= array(
           'model_name' => $this->input->post('model_name')
         );
         $this->load->model('model_m');
         $cre= $this->model_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة الموديل بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_model');
    $this->load->view('admin/footer');
}
// ------------------- edit_model page ------------------ //
public function edit_model(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('model_m');
		$config['base_url'] = base_url()."admin/edit_model";
		$config['total_rows'] = $this->model_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->model_m->pagination('9',$page,'desc','model_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_model',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_model ------------------ //
public function do_edit_model(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('model_name','الموديل','required|xss_clean');
         if ($this -> form_validation -> run()){
         $data= array(
           'model_name' => $this->input->post('model_name')
         );
         $this->load->model('model_m');
         $up= $this->model_m->update('model_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('model_m');
    $query = $this->model_m->find_all_where_desc('model_id',$segment,'model_id');
    $con = $query->row();
    $data['model_name']= $con->model_name;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_model');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_model ----------------------------------
public function do_delete_model(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('model_m');
    $query= $this->model_m->delete('model_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_model');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- edit_cloth page ------------------ //
public function edit_cloth(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('cloth_m');
		$config['base_url'] = base_url()."admin/edit_cloth";
		$config['total_rows'] = $this->cloth_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->cloth_m->pagination('9',$page,'desc','cloth_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_cloth',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_cloth ------------------ //
public function do_edit_cloth(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('cloth_name','اسم القماش','required|xss_clean');
      $this->form_validation->set_rules('cloth_price','السعر','required|xss_clean');
      $this->form_validation->set_rules('cloth_color','اللون','required|xss_clean');
         if ($this -> form_validation -> run()){
         $data= array(
           'cloth_name' => $this->input->post('cloth_name'),
           'cloth_price' => $this->input->post('cloth_price'),
           'cloth_color' => $this->input->post('cloth_color')
         );
         $this->load->model('cloth_m');
         $up= $this->cloth_m->update('cloth_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
      }
    }
    //select
    $this->load->model('cloth_m');
    $query = $this->cloth_m->find_all_where_desc('cloth_id',$segment,'cloth_id');
    $con = $query->row();
    $data['cloth_name']= $con->cloth_name;
    $data['cloth_price']= $con->cloth_price;
    $data['cloth_color']= $con->cloth_color;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_cloth');
    $this->load->view('admin/footer');
}
// ------------------- do_delete_cloth ----------------------------------
public function do_delete_cloth(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('cloth_m');
    $query= $this->cloth_m->delete('cloth_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_cloth');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- add_banner page ------------------ //
public function add_banner(){
    $data['message']= '';
    if($this->input->post('submit')){
      $this->form_validation->set_rules('banner_url','الرابط','required');
  $this->form_validation->set_rules('banner_type','مكان العرض','required');
      if ($this -> form_validation -> run()){
         $data= array(
           'banner_url' => $this->input->post('banner_url'),
           'banner_type' => $this->input->post('banner_type')
         );
         $this->load->model('banner_m');
         $cre= $this->banner_m->create($data);
         if(!empty($cre)){
             $data['message']= 'تم اضافة البانر بنجاح';
         }else{
             $data['message']= 'لم يتم اضافة القسم';
         }
          	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> banner_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('banner_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id',$cre, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/add_banner');
    $this->load->view('admin/footer');
}
// ------------------- edit_banner page ------------------ //
public function edit_banner(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('banner_m');
		$config['base_url'] = base_url()."admin/edit_banner";
		$config['total_rows'] = $this->banner_m->count_all();
		$config['per_page'] = 100;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 100 -100;
       $data['row']= $this->banner_m->pagination('100',$page,'asc','banner_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/edit_banner',$data);
    $this->load->view('admin/footer');
}
// ------------------- do_edit_banner------------------ //
public function do_edit_banner(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    if($this->input->post('submit')){
      $this->form_validation->set_rules('banner_url','الرابط','required');
      $this->form_validation->set_rules('banner_type','مكان العرض','required');
         if ($this -> form_validation -> run()){
             $data= array(
           'banner_url' => $this->input->post('banner_url'),
            'banner_type' => $this->input->post('banner_type')
         );
         $this->load->model('banner_m');
         $up= $this->banner_m->update('banner_id',$segment,$data);
         if(!empty($up)){
             $data['message']= 'تم التعديل بنجاح';
         }else{
             $data['message']= 'لم يتم التعديل';
         }
                 	if (!empty($_FILES['imgURL']['tmp_name'])) {
					if ($this -> banner_m -> doupload()) {
						$photo = $this -> upload -> data();
						$new_photo = array('banner_photo' => $photo['file_name']);
						$this -> banner_m -> update('banner_id',$segment, $new_photo);
					} else {
						$data['message'] = $this -> upload -> display_errors();
					}
				}
      }
    }
    //select
    $this->load->model('banner_m');
    $query = $this->banner_m->find_all_where_desc('banner_id',$segment,'banner_id');
    $con = $query->row();
    $data['banner_url']= $con->banner_url;
    $data['banner_type']= $con->banner_type;
    $data['banner_photo']= $con->banner_photo;
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/do_edit_banner');
    $this->load->view('admin/footer');
}
// ------------------- do delete banner ----------------------------------
public function do_delete_banner(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('banner_m');
    $query= $this->banner_m->delete('banner_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/edit_banner');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// ------------------- mail page ------------------ //
public function mail(){
    $data['message']= '';
		$this->load->library('pagination');
		$this->load->model('mail_m');
		$config['base_url'] = base_url()."admin/mail";
		$config['total_rows'] = $this->mail_m->count_all();
		$config['per_page'] = 9;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$page=$this->uri->segment(3);
		if($page != 0) $page= $page * 9 -9;
       $data['row']= $this->mail_m->pagination('9',$page,'desc','mail_id');
    $this->load->view('admin/header',$data);
    $this->load->view('admin/sidebar');
    $this->load->view('admin/mail',$data);
    $this->load->view('admin/footer');
}
// ------------------- do delete mail ----------------------------------
public function do_delete_mail(){
    $data['message']= '';
    $segment= $this->uri->segment(3);
    $this->load->model('mail_m');
    $query= $this->mail_m->delete('mail_id',$segment);
    if($query){
         $data['message']= 'تم الحذف بنجاح';
         redirect('admin/mail');
    }else{
         $data['message']= 'لم يتم الحذف';
    }
}
// -------------- logout Page ---------------
	public function logout() {
		$array_items = array("admin_name" => "" , "is_login_in_admin" => 0);
		$this -> session -> unset_userdata($array_items);
        redirect('login');
	}
}