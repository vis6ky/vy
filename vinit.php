<?php 

$controller = null;
	$method = null;
if(isset($_REQUEST['v'])){
	$req = explode('/', $_REQUEST['v']);
		$controller = array_shift($req);
			$method = array_shift($req);
	
	if(file_exists(CONTROLLER."\\{$controller}".APPEXT)){
		require_once CONTROLLER."\\{$controller}".APPEXT;
	}
	
	if(class_exists($controller)){
		if($method){
			if(method_exists($controller, $method)){
				$v = new $controller();
					call_user_func_array(array($v, $method), $req);	
			}else{
				_e(_je(_res("error","Method {$method} Not Found",0)));
			}
		}else{
			if(method_exists($controller, DEFAULT_METHOD)){
				$v = new $controller();
					$m = DEFAULT_METHOD;
						$v->$m();
			}else{
				_e(_je(_res("error","Default Method Not Found",0)));
			}
		}	
	}else{
		_e(_je(_res("error","Controller {$controller} Not Found",0)));
	}
}else{
	if(file_exists(CONTROLLER."\\".DEFAULT_CONTROLLER.APPEXT)){
		require_once CONTROLLER."\\".DEFAULT_CONTROLLER.APPEXT;
	}
	
	if(DEFAULT_CONTROLLER){
		$c = DEFAULT_CONTROLLER;
			$v = new $c();
				$m = DEFAULT_METHOD;
					$v->$m();
	}else{
		_e(_je(_res("error","Default Controller Not Found",0)));
	}	
}