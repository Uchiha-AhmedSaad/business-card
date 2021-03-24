<?php
/**
 * This class is general class to other database classe
 */
class Admin_m extends General_Model{
	public function __construct() {
		parent::__construct();
        $this->table= 'admin';
	}
            public function check_data() {
              $this -> db -> where("admin_name", $this -> input -> post("admin_name"));
              $this -> db -> where("admin_pass", md5($this -> input -> post("admin_pass")));
              $query = $this -> db -> get("admin");
            if ($query -> num_rows() == 1) {
              $this_user = $query -> row();
              $login_array= array("admin_id"=>$this_user->admin_id,"admin_name"=>$this_user->admin_name,"is_login_in_admin"=>1);
              $this -> session -> set_userdata($login_array);
            return TRUE;
             } else {
            return FALSE;
             }
           }
}