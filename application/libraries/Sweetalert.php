<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sweetalert 
{
	private $status;
	private $title;
	private $message;
	private $timer;


	public function __construct($title,$message,$status = "success",$timer = 500)
	{
		
		$this->title    = $title;
		$this->message  = $message;
		$this->timer 	= $timer;
		$this->status 	= $status;
		return $this->FlashMessage();
	}
	public function FlashMessage()
	{
		$CI =& get_instance();
		$CI->session->set_userdata(['Flash_message' 	=> $this->Router()['status']]);
		$CI->session->set_userdata(['title' 			=> $this->Router()['title']]);
		$CI->session->set_userdata(['timer' 			=> $this->Router()['timer']]);
		$CI->session->set_userdata(['text' 				=> $this->Router()['text']]);
		
	}
	public function Router()
	{
		if     ($this->status == 'success') {return $this->Success();}
		elseif ($this->status == 'error'  ) {return $this->Error();  }
		elseif ($this->status == 'warning') {return $this->Warning();}
		elseif ($this->status == 'info'   ) {return $this->Info();   }
	}
	public function Success()
	{
		return [
			'status'	=> 'success',
			'title'		=> e_lang($this->title),
			'timer'		=> $this->timer,
			'text'		=> e_lang($this->message)
		];
	}
	public function Error()
	{
		return [
			'status'	=> 'error',
			'title'		=> e_lang($this->title),
			'timer'		=> $this->timer,
			'text'		=> e_lang($this->message)
		];
	}
	public function Warning()
	{
		return [
			'status'	=> 'warning',
			'title'		=> e_lang($this->title),
			'timer'		=> $this->timer,
			'text'		=> e_lang($this->message)
		];
	}
	public function Info()
	{
		return [
			'status'	=> 'info',
			'title'		=> e_lang($this->title),
			'timer'		=> $this->timer,
			'text'		=> e_lang($this->message)
		];
	}	
}