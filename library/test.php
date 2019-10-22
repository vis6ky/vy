<?php 

class l_test{
	
	public $fname;
	public $lname;
	
	public function getFullName(){
		_e("My name is {$this->fname} {$this->lname}");
	}
	public function setFName($fname){
		$this->fname = $fname;
	}
	public function setLName($lname){
		$this->lname = $lname;
	}
	
}