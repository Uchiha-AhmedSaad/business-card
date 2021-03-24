<?php
/**
 * This class is general class to other database classe
 */
class Users_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'users';
	}

	public function check_data() {

						$this -> db -> where("user_email", $this -> input -> post("user_email"));
						$this -> db -> where("user_pass", md5($this -> input -> post("user_pass")));
						 // $this -> db -> where("user_active", 1);
						$query = $this -> db -> get("users");
						$user = $query -> row();
						// var_dump($user);die();
						if (!empty($user) && $user->user_active != 1) {
						return "inactive";
						}
					if ($query -> num_rows() == 1) {
						$this_user = $query -> row();
						$login_array= array("user_name"=>$this_user->user_name,"user_phone"=>$this_user->user_phone,"user_id"=>$this_user->user_id,"is_login_in_user"=>1);
						$this -> session -> set_userdata($login_array);
						return TRUE;
				} else{
					return FALSE;
					 }
				 }
  	public function find_activation_code($user_key) {
		$key = $this->security->xss_clean($user_key);
		$row = $this -> db -> query("SELECT * FROM " . $this -> table . " WHERE user_key='" . $user_key . "' LIMIT 1");
		return !empty($row) ? $row -> row() : FALSE;
	}



	public function doupload()
	{
			$config["upload_path"] = "./uploads/";
			$config["allowed_types"] = "gif|jpg|png|jpeg";
			$config["max_size"] = "20444448";
			$config["encrypt_name"] = TRUE;
			$this -> load -> library("upload", $config);
			return $this -> upload -> do_upload("imgURL");
	}



          public static function source_url($url) {
        if (function_exists('curl_init')) {
            $curl = @curl_init($url);
            @curl_setopt($curl, CURLOPT_HEADER, FALSE);
            @curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
            @curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
            @curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            $source = @curl_exec($curl);
            @curl_close($curl);
            if ($source) {
                return $source;
            } else {
                return @file_get_contents($url);
            }
        } else {
            return @file_get_contents($url);
            //return die($url);
        }
    }

}

?>
