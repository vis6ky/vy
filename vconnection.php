<?php 

/**
	Fetch Type
*/

final class _con{
	public $db;
	
	public function __construct(){}
	
	public function conn(){
		$con = DB_DRIVER.":dbname=".DB_DATABASE.";host=".DB_HOST.";port=".DB_PORT;
		$this->db = new PDO($con, DB_USER, DB_PASSWORD);
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	public function fetchAll($table){
		$sql = "select * from {$table} where 1";
		$result = $this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	public function fetchByIdAll($table, $array=[]){
		$sql = "select * from {$table} where ".key($array)."=".current($array);
		$result = $this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	public function fetchById($table, $array=[]){
		$sql = "select * from {$table} where ".key($array)."=".current($array);
		$result = $this->db->query($sql);
		return $result->fetch(PDO::FETCH_ASSOC);
	}
	public function sqlfetchAll($sql){
		$result = $this->db->query($sql);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	public function sqlfetch($sql){
		$result = $this->db->query($sql);
		return $result->fetch(PDO::FETCH_ASSOC);
	}
	public function insert($table, $array=[]){
		$keys = array_keys($array);
		$values = array_values($array);
		$sql = "INSERT INTO {$table} ({$keys}) values({$values})";
		$this->db->query($sql);
		return $this->db->lastInsertId();
	}
	public function update($table, $array1=[], $array2=[]){
		
	}
}