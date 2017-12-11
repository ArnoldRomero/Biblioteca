<?
include_once('clsConexion.php');

class Download extends Conexion{
	//atributos
	private $fecha;
	private $usuario;
	private $archivo;

	//construtor
	public function Download()
	{   parent::Conexion();
		$this->fecha="";
		$this->usuario="";
		$this->archivo="";
	}




	//propiedades de acceso
	public function setFecha($valor)
	{
		$this->fecha=$valor;
	}
	public function getFecha()
	{
		return $this->fecha;
	}

	public function setUsuario($valor)
	{
		$this->usuario=$valor;
	}
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setArchivo($valor)
	{
		$this->archivo=$valor;
	}
	public function getArchivo()
	{
		return $this->archivo;
	}



	public function Guardar()
	{
     $sql="INSERT into download (fecha_down,id_usd_pk,id_ard_pk) values('$this->fecha','$this->usuario','$this->archivo')";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function Buscar()
	{
		$sql="SELECT *from documento";
		return parent::ejecutar($sql);
	}	

										

}    
?>