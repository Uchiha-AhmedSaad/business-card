<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**re
 * THis controller to create classes of models To all my site
 */
class Site extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function index()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('index',$data);
	    $this->load->view('layout/footer');
	}
    // ------------------ login page  --------------------------
	public function login()
	{
		if (!empty($this->session->userdata('user'))) {
			redirect(base_url('site'));
		}
		$data = [];
		if (!empty($_POST)) 
		{
			$user_email = $this->input->post('user_email');
			$user_pass  = $this->input->post('user_pass');
			$this->form_validation->set_rules('user_email', e_lang('Email'), 'required');
			$this->form_validation->set_rules('user_pass', e_lang('Password'), 'required');
                if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('layout/header',$data);
					$this->load->view('login',$data);
					$this->load->view('layout/footer');
                }
                else
                {
                	$check = $this->db->where('user_email',$user_email)->where('user_pass',md5($user_pass))->get('users')->row_array();

                	if (empty($check)) 
                	{
					
						SweetFlash('error','wrong password','error');
						return redirect(base_url('site/login'));
                	}
                	else{
                		$this->session->set_userdata('user',$check);
                		SweetFlash('Wellcome','welcome');
                		
                		return redirect(base_url('site'));
                	}
                }
		}
		$this->load->view('layout/header',$data);
		$this->load->view('login',$data);
		$this->load->view('layout/footer');
	}
	// ------------------ register page  --------------------------
	public function register()
	{
		if (!empty($this->session->userdata('user'))) {
			redirect(base_url('site'));
		}
		$data = [];

		if (!empty($_POST)) 
		{
			$user_name = $this->input->post('user_name');
			$user_email = $this->input->post('user_email');
			$user_pass = $this->input->post('user_pass');
			$password_confirmation = $this->input->post('password_confirmation');
			$acceptterms = $this->input->post('acceptterms');
			$this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|is_unique[users.user_email]');
			$this->form_validation->set_rules('user_pass', 'Password', 'required');
			$this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required|matches[user_pass]');
			$this->form_validation->set_rules('user_pass', 'Password', 'required');

                if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('layout/header',$data);
					$this->load->view('register',$data);
					$this->load->view('layout/footer');
                }
                else
                {
                	$data_insert = [
                		'user_name' 	=> $user_name,
                		'user_email' 	=> $user_email,
                		'user_pass' 	=> md5($user_pass)
                	];
                	$insert = $this->db->insert('users',$data_insert);
                	if (empty($insert)) 
                	{
                		SweetFlash('error','Not inserted','error');
						
						return redirect(base_url('site/register'));
                	}
                	else{
                		$this->session->set_userdata('user',$check);
                		SweetFlash('success','success');
                		return redirect(base_url('site'));
                	}
                }
		}
	    $this->load->view('layout/header',$data);
	    $this->load->view('register',$data);
	    $this->load->view('layout/footer');
	}
	public function account()
	{
		$data = [];
		if (empty($this->session->userdata('user'))) {
			redirect(base_url('site/login'));
		}		
		if (!empty($_POST)) 
		{
			$data['user_name'] 		= $this->input->post('user_name');
			$data['user_email'] 	= $this->input->post('user_email');
			$data['user_photo'] 	= $this->input->post('user_photo');
			$this->form_validation->set_rules('user_name',e_lang('Name'), 'required');
			$this->form_validation->set_rules('user_email',e_lang('Email'), 'required');
			if (!empty($_FILES)) {
				$data['user_photo'] = uploadMedia($_FILES['user_photo']);
			}
			
		}


		SweetFlash('Created','user created successfully');
	    $this->load->view('layout/header',$data);
	    $this->load->view('account',$data);
	    $this->load->view('layout/footer');
	}
	public function logout()
	{
	
		if (!empty($this->session->userdata('user'))) {
			$this->session->unset_userdata('user');
		}
		SweetFlash('By','We hope you visiting again');
		return redirect($_SERVER['HTTP_REFERER']);
	}
	public function changeCountry()
	{
		$country = $this->uri->segment(3);
		$this->session->set_userdata('country',$country);
		SweetFlash('success','changed');
		return redirect($_SERVER['HTTP_REFERER']);
	}
	// ------------------ register1 page  --------------------------
	// ------------------ addCard page  --------------------------
	public function addCard()
	{
		if (empty($this->session->userdata('user'))) {
			redirect(base_url('site/login'));
		}
		$data = [];

		$categories = $this->db->get('cat')->result_array();
		$countries = $this->db->get('country')->result_array();
		if (!empty($_SESSION['language'])) 
		{
			if ($_SESSION['language'] == 'ar') {
				$countries = array_column($countries,'country_name','country_id');
				$categories = array_column($categories,'cat_name','cat_id');
			}
			else{
				$countries = array_column($countries,'country_name_en','country_id');
				$categories = array_column($categories,'cat_name_en','cat_id');
			}
		}
		else{
			$countries = array_column($countries,'country_name','country_id');
			$categories = array_column($categories,'cat_name','cat_id');
		}
		
		$data['categories'] = $categories;
		$data['countries'] = $countries;

		if (!empty($_POST)) 
		{
			$data_insert['b_cards_name'] 		= $this->input->post('b_cards_name');
			$data_insert['b_cards_name_en'] 	= $this->input->post('b_cards_name_en');
			$data_insert['b_cards_country_id'] = $this->input->post('b_cards_country_id');
			$data_insert['b_cards_city_id'] 	= $this->input->post('b_cards_city_id');
			$data_insert['b_cards_address'] 	= $this->input->post('b_cards_address');
			$data_insert['b_cards_address_en'] = $this->input->post('b_cards_address_en');
			$data_insert['b_cards_phone'] 		= $this->input->post('b_cards_phone');
			$data_insert['b_cards_work'] 		= $this->input->post('b_cards_work');
			$data_insert['job'] 				= $this->input->post('job');
			$data_insert['job_en'] 				= $this->input->post('job_en');
			$data_insert['email'] 				= $this->input->post('email');
			$data_insert['facebook'] 			= $this->input->post('facebook');
			$data_insert['twitter'] 			= $this->input->post('twitter');
			$data_insert['snapchat'] 			= $this->input->post('snapchat');
			$data_insert['linkedin'] 			= $this->input->post('linkedin');
			$data_insert['website'] 			= $this->input->post('website');
			$data_insert['instegram'] 			= $this->input->post('instegram');
			$data_insert['about_info'] 			= $this->input->post('about_info');


			$this->form_validation->set_rules('b_cards_name',e_lang('b_cards_name'), 'required');
			$this->form_validation->set_rules('b_cards_name_en',e_lang('b_cards_name_en'), 'required');
			$this->form_validation->set_rules('b_cards_country_id',e_lang('b_cards_country_id'), 'required');
			$this->form_validation->set_rules('b_cards_city_id',e_lang('b_cards_city_id'), 'required');
			$this->form_validation->set_rules('b_cards_address',e_lang('b_cards_address'), 'required');
			$this->form_validation->set_rules('b_cards_address',e_lang('b_cards_address'), 'required');
			$this->form_validation->set_rules('b_cards_address_en',e_lang('b_cards_address_en'), 'required');
			$this->form_validation->set_rules('b_cards_phone',e_lang('b_cards_phone'), 'required');
			$this->form_validation->set_rules('b_cards_work',e_lang('b_cards_work'), 'required');
			$this->form_validation->set_rules('job',e_lang('job'), 'required');
			$this->form_validation->set_rules('job_en',e_lang('job_en'), 'required');
			$this->form_validation->set_rules('email',e_lang('email'), 'required');

			if (!empty($_FILES['files'])) 
			{
		
				$extract = [];
				for ($i=0; $i < count($_FILES['files']['name']); $i++) { 
					$extract[$i]['name'] = $_FILES['files']['name'][$i];
					$extract[$i]['type'] = $_FILES['files']['type'][$i];
					$extract[$i]['tmp_name'] = $_FILES['files']['tmp_name'][$i];
					$extract[$i]['error'] = $_FILES['files']['error'][$i];
					$extract[$i]['size'] = $_FILES['files']['size'][$i];
					
				}
				

				foreach ($extract as $images) {
					$data_insert['user_photo'][] = uploadMedia($images);
				}

				$data_insert['user_photo'] = implode('|', $data_insert['user_photo']);
			}
			if (!empty($_FILES['logo'])) {
				$data_insert['logo'] = uploadMedia($_FILES['logo']);
			}
            if ($this->form_validation->run() == FALSE)
            {
				$this->load->view('layout/header',$data);
				$this->load->view('add_card',$data);
				$this->load->view('layout/footer');
            }
            else
            {

            	$insert = $this->db->insert('b_cards',$data_insert);
            	if (empty($insert)) 
            	{
					$this->session->set_flashdata('error', e_lang('wrong'));
					return redirect(base_url('site/addCard'));
            	}
            	else{
            		return redirect(base_url('site/addCard'));
            	}
            }
		}


	    $this->load->view('layout/header',$data);
	    if (!empty($this->session->userdata('choose_card'))) {
	    	$this->load->view('add_card',$data);
	    }
	    else{
	    	$this->load->view('choose_card',$data);
	    }
	    
	    $this->load->view('layout/footer');
	}
	// ------------------ addCard page  --------------------------
	// ------------------ addJob page  --------------------------
	public function addJob()
	{
		$data = [];

		$categories = $this->db->get('cat')->result_array();
		$countries = $this->db->get('country')->result_array();
		if (!empty($_SESSION['language'])) 
		{
			if ($_SESSION['language'] == 'ar') {
				$countries = array_column($countries,'country_name','country_id');
				$categories = array_column($categories,'cat_name','cat_id');
			}
			else{
				$countries = array_column($countries,'country_name_en','country_id');
				$categories = array_column($categories,'cat_name_en','cat_id');
			}
		}
		else{
			$countries = array_column($countries,'country_name','country_id');
			$categories = array_column($categories,'cat_name','cat_id');
		}
		$data['categories'] = $categories;
		$data['countries'] = $countries;
		if (!empty($_POST)) 
		{
			$data_insert['details'] 		= $this->input->post('details');
			$data_insert['job_name'] 		= $this->input->post('job_name');
			$data_insert['job_type'] 		= $this->input->post('job_type');
			$data_insert['job_country_id'] 	= $this->input->post('job_country_id');
			$data_insert['job_city_id'] 	= $this->input->post('job_city_id');
			$data_insert['job_cat_id'] 		= $this->input->post('job_cat_id');
			$data_insert['job_email'] 		= $this->input->post('job_email');
			$data_insert['job_telephone'] 	= $this->input->post('job_telephone');
			$data_insert['job_info'] 		= $this->input->post('job_info');

			$this->form_validation->set_rules('details',e_lang('Details'), 'required');
			$this->form_validation->set_rules('job_name',e_lang('Name'), 'required');
			$this->form_validation->set_rules('job_type',e_lang('Type'), 'required');
			$this->form_validation->set_rules('job_country_id',e_lang('Country'), 'required');
			$this->form_validation->set_rules('job_city_id',e_lang('City'), 'required');
			$this->form_validation->set_rules('job_cat_id',e_lang('Category'), 'required');


			if (!empty($_FILES['job_pictures'])) 
			{
		
				$extract = [];
				for ($i=0; $i < count($_FILES['job_pictures']['name']); $i++) { 
					$extract[$i]['name'] 		= $_FILES['job_pictures']['name'][$i];
					$extract[$i]['type'] 		= $_FILES['job_pictures']['type'][$i];
					$extract[$i]['tmp_name'] 	= $_FILES['job_pictures']['tmp_name'][$i];
					$extract[$i]['error'] 		= $_FILES['job_pictures']['error'][$i];
					$extract[$i]['size'] 		= $_FILES['job_pictures']['size'][$i];
				}
				
				foreach ($extract as $images) {
					$data_insert['job_pictures'][] = uploadMedia($images);
				}

				$data_insert['job_pictures'] = implode('|', $data_insert['job_pictures']);
			}

            if ($this->form_validation->run() == FALSE)
            {
				$this->load->view('layout/header',$data);
				$this->load->view('add_job',$data);
				$this->load->view('layout/footer');
            }
            else
            {

            	$insert = $this->db->insert('jobs',$data_insert);
            	if (empty($insert)) 
            	{
					$this->session->set_flashdata('error', e_lang('wrong'));
					return redirect(base_url('site/addJob'));
            	}
            	else{
            		return redirect(base_url('site/addJob'));
            	}
            }
		}
	    $this->load->view('layout/header',$data);
	    $this->load->view('add_job',$data);
	    $this->load->view('layout/footer');
	}
	// ------------------ addJob page  --------------------------
	// ------------------ addJob page  --------------------------
	public function package()
	{
		$data = [];
		$countries = $this->db->get('country')->result_array();
		if (!empty($_SESSION['language'])) 
		{
			if ($_SESSION['language'] == 'ar') {
				$countries = array_column($countries,'country_name','country_id');

			}
			else{
				$countries = array_column($countries,'country_name_en','country_id');

			}
		}
		else{
			$countries = array_column($countries,'country_name','country_id');

		}

		$data['countries'] = $countries;
		$data['packages'] = $this->db->get('package')->result();
	    $this->load->view('layout/header',$data);
	    $this->load->view('bouquet',$data);
	    $this->load->view('layout/footer');
	}
	// ------------------ addJob page  --------------------------
	public function cardCategory()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('card_category',$data);
	    $this->load->view('layout/footer');
	}
	public function cardDetails()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('card_details',$data);
	    $this->load->view('layout/footer');
	}
	public function chooseCard()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('choose_card',$data);
	    $this->load->view('layout/footer');
	}
	public function changePassword()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('code',$data);
	    $this->load->view('layout/footer');
	}
	public function contact_us()
	{
		$data = [];
		if (!empty($_POST)) 
		{
			$msg_name 		= $this->input->post('msg_name');
			$msg_email 		= $this->input->post('msg_email');
			$msg_phone 		= $this->input->post('msg_phone');
			$msg_title 		= $this->input->post('msg_title');
			$msg_details 	= $this->input->post('msg_details');
			$this->form_validation->set_rules('msg_name',e_lang('msg_name'), 'required');
			$this->form_validation->set_rules('msg_email', e_lang('Email'), 'required');
			$this->form_validation->set_rules('msg_phone', e_lang('Phone'), 'required');
			$this->form_validation->set_rules('msg_title', e_lang('Title'), 'required');
			$this->form_validation->set_rules('msg_details', e_lang('Details'), 'required');
                if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('layout/header',$data);
					$this->load->view('contact_us',$data);
					$this->load->view('layout/footer');
                }
                else
                {
                	$data_insert = [
                		'msg_name' 		=> $msg_name,
                		'msg_email' 	=> $msg_email,
                		'msg_phone' 	=> $msg_phone,
                		'msg_title' 	=> $msg_title,
                		'msg_details' 	=> $msg_details,
                	];
                	$insert = $this->db->insert('msg',$data_insert);
                	if (empty($insert)) 
                	{
                		SweetFlash('error','wrong','error');
						return redirect(base_url('site/contact_us'));
                	}
                	else{
                		return redirect(base_url('site/contact_us'));
                	}
                }
		}
	    $this->load->view('layout/header',$data);
	    $this->load->view('contact_us',$data);
	    $this->load->view('layout/footer');
	}
	public function docCard()
	{ 
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('contact_us',$data);
	    $this->load->view('layout/footer');
	}
	public function docJob()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('doc_jobs',$data);
	    $this->load->view('layout/footer');
	}
	public function jobDetails()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('job_details',$data);
	    $this->load->view('layout/footer');
	}
	public function terms()
	{


		$data = [];
		$data['settings'] = $this->db->get('setting')->row();

	    $this->load->view('layout/header',$data);
	    $this->load->view('terms',$data);
	    $this->load->view('layout/footer');
	}
	public function changeLang()
	{
		$lang = $this->uri->segment(3);

		$this->session->set_userdata('language',$lang);
		SweetFlash('changed','language changed successfully');
		return redirect($_SERVER['HTTP_REFERER']);
	}

	public function sendCodeInEmail()
	{
		$data = [];
	    $this->load->view('layout/header',$data);
	    $this->load->view('forget_password',$data);
	    $this->load->view('layout/footer');
	}
	public function payment()
	{
		if (empty($this->session->userdata('user'))) {
			redirect(base_url('site/login'));
		}
		$data = [];
		$data['setting'] = $this->db->get('setting')->row();
		if (!empty($_POST)) 
		{
			$user_name 		= $this->input->post('user_name');
			$account_number = $this->input->post('account_number');
			$bank_name 		= $this->input->post('bank_name');
			$notes 			= $this->input->post('notes');
		
			$this->form_validation->set_rules('user_name',e_lang('user name'), 'required');
			$this->form_validation->set_rules('account_number',e_lang('account number'), 'required');
			$this->form_validation->set_rules('bank_name',e_lang('bank name'), 'required');
			$this->form_validation->set_rules('notes',e_lang('notes'), 'required');


                if ($this->form_validation->run() == FALSE)
                {
					$this->load->view('layout/header',$data);
					$this->load->view('payment',$data);
					$this->load->view('layout/footer');
                }
                else
                {
                	$data_insert = [
                		'user_name' 		=> $user_name,
                		'account_number' 	=> $account_number,
                		'bank_name' 		=> $bank_name,
                		'notes' 			=> $notes,
                	];
					if (!empty($_FILES['payment_pictures'])) 
					{
				
						$extract = [];
						for ($i=0; $i < count($_FILES['payment_pictures']['name']); $i++) { 
							$extract[$i]['name'] 		= $_FILES['payment_pictures']['name'][$i];
							$extract[$i]['type'] 		= $_FILES['payment_pictures']['type'][$i];
							$extract[$i]['tmp_name'] 	= $_FILES['payment_pictures']['tmp_name'][$i];
							$extract[$i]['error'] 		= $_FILES['payment_pictures']['error'][$i];
							$extract[$i]['size'] 		= $_FILES['payment_pictures']['size'][$i];
						}
						
						foreach ($extract as $images) {
							$data_insert['payment_pictures'][] = uploadMedia($images);
						}

						$data_insert['payment_pictures'] = implode('|', $data_insert['payment_pictures']);
					}
                	$insert = $this->db->insert('payment',$data_insert);
                	if (empty($insert)) 
                	{
                		SweetFlash('error','wrong','error');
						return redirect(base_url('site/payment'));
                	}
                	else{
                		return redirect(base_url('site/payment'));
                	}
                }
		}		

	    $this->load->view('layout/header',$data);
	    $this->load->view('payment',$data);
	    $this->load->view('layout/footer');
	}
	public function getCities()
	{
		$country 	= $this->input->post('country');
		$cities 	= $this->db->where('city_country',$country)->get('city')->result();
		$extract 	= [];
		foreach ($cities as $city) 
		{
			if (!empty($this->session->userdata('language')) && $this->session->userdata('language') == 'en') 
			{
				$extract[] = ['city_id' => $city->city_id,'city_name' => $city->city_name_en];
			}
			else{
				$extract[] = ['city_id' => $city->city_id,'city_name' => $city->city_name];
			}
		}
		echo json_encode($extract);
	}

	public function getPackages()
	{
		$country 	= $this->input->post('country_id');
		$packages 	= $this->db->where('country_id',$country)->get('package')->result();
		$extract 	= [];
		foreach ($packages as $package) 
		{
			if (!empty($this->session->userdata('language')) && $this->session->userdata('language') == 'en') 
			{
				$extract[] = ['package_id' => $city->city_id,'package_name' => $city->package_name_en];
			}
			else{
				$extract[] = ['package_id' => $city->city_id,'package_name' => $city->package_name];
			}
		}
		echo json_encode($extract);
	}
}

