<?php
/**
 * This class is general class to other database classe
 */
class Mail_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'mail';
	}
    
    		

}

?>