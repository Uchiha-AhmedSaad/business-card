<?php
/**
 * This class is general class to other database classe
 */
class Type_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'type';
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