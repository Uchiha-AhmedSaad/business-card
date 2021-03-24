<?php
/**
 * This class is general class to other database classe
 */
class B_cards extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'b_cards';
	}


	public function doupload()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "*";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL");
	}
	public function doupload2()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "*";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL2");
	}



	public function doupload5()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL5");
	}



	public function doupload6()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL6");
	}



	public function doupload7()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL7");
	}



	public function doupload8()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "203333333333348";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL8");
	}


}

?>
