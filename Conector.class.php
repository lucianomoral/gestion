<?php

require_once("datosConexionLocal.php");

class Conector extends datosConexion{

	public $conec;

	function Conector(){


	}


	function connect(){

		try {

			$this->conec = new PDO('mysql:host=' . $this->getHost() . '; dbname=' . $this->getDb(), $this->getUser(), $this->getPass());

			$this->conec->exec("SET CHARACTER SET utf8");

		} catch(Exception $e) {

			die("Error al conectar. Pongase en contacto con el administrador. <br><br>" . $e.GetMessage());

		}

	}


	function getAll($pSql, $pParm, $pColumn){

		try {

			$resultSet = $this->conec->prepare($pSql);

			$success = $resultSet->execute($pParm);

			if(!$success){

				echo "<script>alert('Error en la consulta. Pongase en contacto con el administrador.')</script>";

				return false;

			} else {

				$cantFilas = $resultSet->rowCount();

				if($cantFilas == 0){

					$resultado = false;

				} else {

					for($i = 0;$i < $cantFilas;$i++){

						$resultado[$i] = $resultSet->fetch(PDO::FETCH_ASSOC)[$pColumn];

					}

				}	

				return $resultado;

			}

		} catch (Exception $e) {

			die("Error en la consulta. Pongase en contacto con el administrador. <br><br>" . $e->GetMessage());
			
		}

	}

	function getFirstReg($pSql, $pParm){

		try{

			$resultSet = $this->conec->prepare($pSql);

			$success = $resultSet->execute($pParm);

			if(!$success){

				echo "<script>alert('Error en la consulta. Pongase en contacto con el administrador.')</script>";

				$resultado = 0;

			} else {

				$resultado = $resultSet->fetch(PDO::FETCH_ASSOC);

			}

			return $resultado;


		} catch(Exception $e){

			die("Error en la consulta. Pongase en contacto con el administrador. <br><br>" . $e->GetMessage());

		}

	}

	function exec($pSql, $pParm){

		try{

			$resultSet = $this->conec->prepare($pSql);

			$success = $resultSet->execute($pParm);

			if(!$success){

				return false;

			} else {

				return true;

			}


		} catch(Exception $e) {

			die("Error en la consulta. Pongase en contacto con el administrador. <br><br>" . $e->GetMessage());

		}

	}

	function getTable($pTable){
 
		try {
 
            $resultSet = $this->conec->prepare("SELECT * FROM $pTable");
            $success = $resultSet->execute();
 
            if(!$success){
 
                echo "Error en la tabla informada";
 
                return false;
 
            } else {
 
                $cantFilas = $resultSet->rowCount();

                if($cantFilas == 0){

                	echo "<meta charset = 'utf-8'>Consulta vacía.";

                	$table = false;

                } else {
 
	                for($i = 0; $i<$cantFilas; $i++){
	 
	                $table[$i] = $resultSet->fetch(PDO::FETCH_ASSOC);
	               
	                }

	            }
 
                return $table;
            }
 
		} catch(Exception $e) {
 
                die("Error en la consulta. Pongase en contacto con el administrador. <br><br>" . $e->GetMessage());
 
		}
 
	}
 
	function getView($pView, $pParm){

		try {
 
            $resultSet = $this->conec->prepare($pView);
            $success = $resultSet->execute($pParm);
 
            if(!$success){
 
                echo "Error en la consulta.";
 
            	return false;
 
            } else {
 
                $cantFilas = $resultSet->rowCount();
 				
                if($cantFilas == 0){

                	$view = false;

                } else {

	                for($i = 0; $i<$cantFilas; $i++){
	 
	                $view[$i] = $resultSet->fetch(PDO::FETCH_ASSOC);
	               
	                }

	            }
 
                return $view;

            }
 
		} catch(Exception $e) {
 
                die("Error en la consulta. Pongase en contacto con el administrador." . $e->GetMessage());
 
		}
 
	}

}

?>