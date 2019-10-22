<?php 

abstract class vc{
	
	public function __construct(){
		$this->load = new _vl();
			$this->modal =& $this->load->modal;
				$this->library =& $this->load->library;
	}
	
	abstract protected function index();
}
