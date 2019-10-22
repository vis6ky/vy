<?php 

class E404 {
	
	public function __construct(){}
	
	public function index(){
		_e(_je(_res('error','Page not found',0)));
	}
	
}