<?php
/**
 * This class is general class to other database classe
 */
class Percent_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'percent';
	}
    
}

?>