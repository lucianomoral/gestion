<?php

class datosConexion{
	
	private $hostname= '179.43.121.58';
	private $usuario = 'root';
	private $password = 'NAli59rufu';
	private $db = 'kiosco';
	
	
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
