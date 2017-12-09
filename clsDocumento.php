<?
include_once('clsConexion.php');

class Documento extends Conexion{
	//atributos
	private $id_documento;
	private $size;
	private $formato;
	private $nombre;
	private $id_tipo;

	//construtor
	public function Documento()
	{   parent::Conexion();
		$this->id_documento=0;
		$this->size=0;
		$this->formato="";
		$this->nombre="";
		$this->id_tipo=0;
	}




	//propiedades de acceso
	public function setIdDocumento($valor)
	{
		$this->id_documento=$valor;
	}
	public function getIdDocumento()
	{
		return $this->id_documento;
	}

	public function setSize($valor)
	{
		$this->size=$valor;
	}
	public function getSize()
	{
		return $this->size;
	}

	public function setFormato($valor)
	{
		$this->formato=$valor;
	}
	public function getFormato()
	{
		return $this->formato;
	}


	public function setNombre($valor)
	{
		$this->nombre=$valor;
	}
	public function getNombre()
	{
		return $this->nombre;
	}


	public function setIdTipo($valor)
	{
		$this->id_tipo=$valor;
	}
	public function getIdTipo()
	{
		return $this->id_tipo;
	}




	public function Guardar()
	{
     $sql="INSERT into documento (size,formato,nombre,id_tipo) values('$this->size','$this->formato','$this->nombre','$this->id_tipo')";
		
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