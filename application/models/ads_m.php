<?php
/**
 * This class is general class to other database classe
 */
class Ads_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'ads';
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