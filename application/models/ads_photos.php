<?php

class Ads_photos extends General_Model {
		
	function __construct() {
		parent::__construct();
		$this -> table = 'ads_photos';
	}
		
		
		 
		
	public function doupload()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL");	
	}
		
	
	}
?>