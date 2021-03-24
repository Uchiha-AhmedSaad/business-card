<?php

class Ads_package_m extends General_Model {

	function __construct() {
		parent::__construct();
		$this -> table = 'ads_packages';
	}

	public function doupload()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png";
			$config["max_size"] = "2048";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL");
	}



	}
?>
