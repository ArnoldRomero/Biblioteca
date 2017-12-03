<?php
class Conexion{
//atributos
	private $servidor;
	private $usuario;
	private $password;
	private $basededatos;

//constructor
public function Conexion()
{
	$this->servidor = "localhost";
	$this->usuario = "root";
	$this->password = "12345678";
	$this->basedatos = "prueba";
	
		
}	

}//end clase		

?>