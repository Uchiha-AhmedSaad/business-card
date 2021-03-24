<?php
/**
 * This class is general class to other database classe
 */
class Support_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'support';
	}
    

}

?>