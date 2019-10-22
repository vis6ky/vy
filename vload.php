<?php 

final class _vl{
	
	public function __construct(){
		$this->modal = (object) array();
			$this->library = (object) array();
	}
	
	public function modal($c){
		if(strpos($c, ',') !== false){
			$n = explode(',', $c);
			foreach($n as $e){
				$this->load_modal(trim($e));
			}
		}else{
			$this->load_modal(trim($c));
		}
				
	}
	public function load_modal($c){
		if(file_exists(MODAL."\\{$c}".APPEXT)){
			require_once MODAL."\\{$c}".APPEXT;
			$oc = "m_$c";
			if(class_exists($oc)){
				$this->modal->$c = new $oc();
			}else{
				_e('No Modal Found');
			}
		}else{
			_e('No Modal File Found');
		}
	}
	public function library($c){
		if(strpos($c, ',') !== false){
			$n = explode(',', $c);
			foreach($n as $e){
				$this->load_library(trim($e));
			}
		}else{
			$this->load_library(trim($c));
		}
	}
	public function load_library($c){
		if(file_exists(LIBRARY."\\{$c}".APPEXT)){
			require_once LIBRARY."\\{$c}".APPEXT;
			$oc = "l_$c";
			if(class_exists($oc)){
				$this->library->$c = new $oc();
			}else{
				_e('No Library Found');
			}
		}else{
			_e('No Library File Found');
		}
		
	}
	public function helper($c){
		if(strpos($c, ',') !== false){
			$n = explode(',', $c);
			foreach($n as $e){
				$this->load_helper(trim($e));
			}
		}else{
			$this->load_helper(trim($c));
		}
	}
	public function load_helper($c){
		if(file_exists(HELPER."\\{$c}".APPEXT)){
			require_once HELPER."\\{$c}".APPEXT;
		}else{
			_e('No Helper File Found');
		}
		
	}	
	public function view($h, $data=[]){
		extract($data);
		return include_once VIEW."/".$h.APPEXT;
	}
	
}
