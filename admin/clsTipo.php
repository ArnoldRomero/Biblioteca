<?
include_once('clsConexion.php');

class Tipo extends Conexion{
	//atributos
	private $id_tipo;
	private $nombre;

	//construtor
	public function Tipo()
	{   parent::Conexion();
		$this->id_tipo="";
		$this->nombre="";
	}




	//propiedades de acceso
	public function setIdTipo($valor)
	{
		$this->id_tipo=$valor;
	}
	public function getIdTipo()
	{
		return $this->id_tipo;
	}

	public function setNombreT($valor)
	{
		$this->nombre=$valor;
	}
	public function getNombreT()
	{
		return $this->nombre;
	}




	public function GuardarT()
	{
     $sql="INSERT into tipo(nombre_tipo) values('$this->nombre')";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function ModificarT()	{
	$sql="UPDATE tipo set nombre_tipo='$this->nombre' where id_tip=$this->id_tipo";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function EliminarT()
	{
		$sql="DELETE from tipo where id_tip=$this->id_tipo";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
												
	public function BuscarT()
	{
		$sql="SELECT *from tipo";
		return parent::ejecutar($sql);
	}										
8
}    
?>