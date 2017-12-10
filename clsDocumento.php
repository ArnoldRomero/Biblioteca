<?
include_once('clsConexion.php');

class Documento extends Conexion{
	//atributos
	private $id_documento;
	private $size;
	private $formato;
	private $nombre;

	//construtor
	public function Documento()
	{   parent::Conexion();
		$this->id_documento=0;
		$this->size=0;
		$this->formato="";
		$this->nombre="";
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

	public function ultimo_codigo()	{
	  $s="select max(id_archivo) as maximo from archivo";	  
	  $reg = parent::ejecutar($s);	
	  $row =mysqli_fetch_array($reg);
	  $ultimo=$row['maximo'];
	  $ultimo=$ultimo;
      return $ultimo;
	}

	public function Guardar()
	{
     $sql="INSERT into archivo (size,formato,nombre_ar) values('$this->size','$this->formato','$this->nombre')";
		
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