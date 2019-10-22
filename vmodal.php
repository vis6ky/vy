<?php 

abstract class vm{
	
	public function __construct(){
		$this->dbcon = new _con();
			$this->dbcon->conn();
				$this->vdb =& $this->dbcon->db;
	}
	
}