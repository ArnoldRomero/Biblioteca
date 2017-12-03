<?
include_once('clsConexion.php');

class Materia extends Conexion{
	//atributos
	private $id_materia;
	private $nombre;

	//construtor
	public function Materia()
	{   parent::Conexion();
		$this->id_materia="";
		$this->nombre="";
	}




	//propiedades de acceso
	public function setIdMateria($valor)
	{
		$this->id_materia=$valor;
	}
	public function getIdMateria()
	{
		return $this->id_materia;
	}

	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function getNombre()
	{
		return $this->nombre;
	}




	public function Guardar()
	{
     $sql="INSERT into materia(sigla,nombre_m) values('$this->id_materia','$this->nombre')";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function Modificar()	{
	$sql="UPDATE materia set nombre='$this->nombre' where sigla=$this->id_materia";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function Eliminar()
	{
		$sql="DELETE from materia where sigla=$this->id_materia";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
		
	public function buscarPorNombre($criterio)
	{
		$sql="select *from categoria where nombre like '$criterio%'";
		return parent::ejecutar($sql);
	}										

	public function Buscar()
	{
		$sql="select *from categoria";
		return parent::ejecutar($sql);
	}										

}    
?>