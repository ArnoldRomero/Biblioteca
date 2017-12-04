<?
include_once('clsConexion.php');

class Documento extends Conexion{
	//atributos
	private $id_documento;
	private $titulo;
	private $descripcion;
	private $size;
	private $formato;
	private $paginas;
	private $ruta;
	private $id_mat;
	private $id_tipo;

	//construtor
	public function Documento()
	{   parent::Conexion();
		$this->id_documento=0;
		$this->titulo="";
		$this->descripcion="";
		$this->size=0;
		$this->formato="";
		$this->paginas=0;
		$this->ruta="";
		$this->id_mat="";
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

	public function setTitulo($valor)
	{
		$this->titulo=$valor;
	}
	public function getTitulo()
	{
		return $this->titulo;
	}

	public function setDescripcion($valor)
	{
		$this->descripcion=$valor;
	}
	public function getDescripcion()
	{
		return $this->descripcion;
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

	public function setPaginas($valor)
	{
		$this->paginas=$valor;
	}
	public function getPaginas()
	{
		return $this->paginas;
	}

	public function setRuta($valor)
	{
		$this->ruta=$valor;
	}
	public function getRuta()
	{
		return $this->ruta;
	}

	public function setIdMat($valor)
	{
		$this->id_mat=$valor;
	}
	public function getIdMat()
	{
		return $this->id_mat;
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
     $sql="INSERT into documento(titulo,descripcion,size,formato,paginas,ruta) values('$this->titulo','$this->descripcion','$this->size','$this->formato','$this->paginas','$this->ruta')";
		
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
		$sql="SELECT *from materia where nombre like '$criterio%'";
		return parent::ejecutar($sql);
	}										

	public function Buscar()
	{
		$sql="SELECT *from materia";
		return parent::ejecutar($sql);
	}										

}    
?>