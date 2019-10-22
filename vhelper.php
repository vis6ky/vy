<?php 

function _getReqController($str){
	return 'c_'.$str;
}
function _getReqModal($str){
	return 'm_'.$str;
}
function _e($str){
	echo $str;
}
function _je($array){
	return json_encode($array);
}
function _jd($array){
	return json_decode($array, true);
}
function _res($status, $message, $result){
	return ["status"=>$status,"message"=>$message,"result"=>"$result"]; 
}
function _push($str, $array){
	return $array.push($str);
}
function _pop($array){
	return $array.pop();
}
function _fa($array){
	_pre();
	_pa($array);
}
function _pa($array){
	print_r($array);
}
function _p($array){
	print($array);
}
function _pre(){
	echo '<pre>';
}