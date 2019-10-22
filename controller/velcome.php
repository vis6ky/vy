<?php 

class velcome extends vc{
	
	public function __construct(){
		parent :: __construct();
	}
	
	public function index(){
		echo 'index method found';
		echo "<br/>";
		$this->load->modal('velcome');
			$this->modal->velcome->test();
				$this->load->helper('test');
					echo "<br>";
						help();
	}
	public function test($p,$q){
		echo $p ."-". $q;
		$data['title'] = 'Testing Test View';
		$this->load->view('index', $data);
	}
	public function testl(){
		$this->load->library('test');
			$this->library->test->setFName('vishal');
				$this->library->test->setLName('sharaf');
					$this->library->test->getFullName();
	}
	public function getdata(){
		$this->load->modal('velcome');
			$data = $this->modal->velcome->alldata();
				_fa($data);
	}
	
}