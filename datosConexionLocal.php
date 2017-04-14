<?php

class datosConexion {

	private $host = 'localhost';
	private $db = 'kiosco';
	private $user = 'phpmyadmin';
	private $pass = '1234';

	public function getHost(){

		return $this->host;

	}

	public function getDb(){

		return $this->db;

	}

	public function getUser(){

		return $this->user;

	}

	public function getPass(){

		return $this->pass;

	}


}

?>
