<?php
/**
 * This class is general class to other database classe
 */
class Notification_m extends General_Model{

	public function __construct() {
		parent::__construct();
        $this->table= 'notifications';
	}

}

?>
