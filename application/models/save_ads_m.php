<?php
/**
 * This class is general class to other database classe
 */
class Save_ads_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'save_ads';
	}
    

}

?>