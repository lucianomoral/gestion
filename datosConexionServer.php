<?php

class datosConexion{
	
	private $hostname= 'sql208.byethost7.com';
	private $usuario = 'b7_16154770';
	private $password = '17091994';
	private $db = 'b7_16154770_kiosco';
	
	
	public function getHost(){
	
		return $this->hostname;
		
	}
		
	public function getUser(){
		
		return $this->usuario;
		
	}
		
	public function getPass(){
		
		return $this->password;
		
	}
		
	public function getDb(){
		
		return $this->db;
		
	}
	
}
	
?>