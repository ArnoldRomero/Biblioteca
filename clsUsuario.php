<?php

include_once('clsConexion.php');

class Usuario extends Conexion
{

	private $nro_registro;
	private $nombres;
	private $paterno;
	private $materno;
	private $sexo;
	private $fecha_nac;
	private $telefono;
	private $correo;
	private $direccion;
	private $pass;

	public function Usuario()
	{
		parent::Conexion();
		$this->nro_registro=0;
		$this->nombres="";
		$this->paterno="";
		$this->materno="";
		$this->sexo="";
		$this->fecha_nac="";
		$this->telefono=0;
		$this->correo="";
		$this->direccion="";
		$this->pass="";


	}

	/*---METODOS SET y FUNCIONES GET---*/
		public function setNroReg($valor)
		{
			$this->nro_registro=$valor;
		}
		public function getNroReg()
		{
			return $this->nro_registro;
		}
		public function setNombres($valor)
		{
			$this->nombres=$valor;
		}
		public function getNombres()
		{
			return $this->nombres;
		}
		public function setPaterno($valor)
		{
			$this->paterno=$valor;
		}
		public function getPaterno()
		{
			return $this->paterno;
		}
		public function setMaterno($valor)
		{
			$this->materno=$valor;
		}
		public function getMaterno()
		{
			return $this->materno;
		}
		public function setSexo($valor)
		{
			$this->sexo=$valor;
		}
		public function getSexo()
		{
			return $this->sexo;
		}
		public function setFecha($valor)
		{
			$this->fecha_nac=$valor;
		}
		public function getFecha()
		{
			return $this->fecha_nac;
		}
		public function setTelefono($valor)
		{
			$this->telefono=$valor;
		}
		public function getTelefono()
		{
			return $this->telefono;
		}
		public function setCorreo($valor)
		{
			$this->correo=$valor;
		}
		public function getCorreo()
		{
			return $this->correo;
		}
		public function setDireccion($valor)
		{
			$this->direccion=$valor;
		}
		public function getDireccion()
		{
			return $this->direccion;
		}
		public function setPass($valor)
		{
			$this->pass=$valor;
		}
		public function getPass()
		{
			return $this->pass;
		}

	/*---METODOS Y FUNCIONES DE SISTEMA---*/	
		public function GuardarNuevo()
		{
			$sql="INSERT INTO usuario (nro_reg,pass,nombres,paterno,materno,sexo,correo) VALUES ('$this->nro_registro','$this->pass','$this->nombres','$this->paterno','$this->materno','$this->sexo','$this->correo'	)";
			if(parent::ejecutar($sql))
				return true;
			else
				return false;
		}

		public function Modificar(){
			$sql="UPDATE usuario set nombres='$this->nombres', paterno='$this->paterno', materno='$this->materno', sexo='$this->sexo', fecha_nacimiento='$this->fecha_nac', telefono='$this->telefono', correo='$this->correo', direccion='$this->direccion', pass='$this->pass=' where nro_reg='$this->nro_registro';";		
			if(parent::ejecutar($sql))
				return true;
			else
				return false;	
		}

		public function Buscar()
		{
			$sql="SELECT * from usuario";
			return parent::Ejecutar($sql);			
		}

		public function BuscarxId()
		{
			$sql="SELECT * from usuario where nro_reg='$this->nro_registro';";
			return parent::Ejecutar($sql);			
		}
		
		
		public function Info(){
		$sql="SELECT * from usuario where nro_reg='$this->nro_registro' ";
		$dato=parent::ejecutar($sql);
		return mysqli_fetch_object($dato);
		}

		public function Eliminar()
		{
			$sql="DELETE from usuario where nro_reg='$this->nro_registro'";
			
			if(parent::ejecutar($sql))
				return true;
			else
				return false;	
		}






}

		

?>