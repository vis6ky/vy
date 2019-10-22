<?php 

class m_velcome extends vm{
	
	public function __construct(){
		parent :: __construct();
	}
	
	public function test(){
		_e('Testing Modal');
	}
	public function alldata(){
		return $this->dbcon->fetchAll('emp');
	}
	public function getdata(){
		return $this->dbcon->fetchById('emp', array('id'=>1));
	}
	
}