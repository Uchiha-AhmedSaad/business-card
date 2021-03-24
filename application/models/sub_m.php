<?php
/**
 * This class is general class to other database classe
 */
class Sub_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'sub';
	}
    

}

?>