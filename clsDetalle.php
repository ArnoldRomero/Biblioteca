<?
include_once('clsConexion.php');
class Detalle extends Conexion
{
	//atributos
	private $id_upload;
	private $id_documento;
	private $titulo;
	private $descripcion;
	private $tipo;
	

	//construtor
	public function DetalleVenta()
	{   parent::Conexion();
		$this->id_upload=0;
		$this->id_documento=0;
		$this->titulo="";		
		$this->descripcion="";
		$this->tipo="";
	}
	//propiedades de acceso
	public function setIdUpload($valor){
		$this->id_upload=$valor;
	}
	public function getIdUpload(){
		return $this->id_upload;
	}

	public function setIdDocumento($valor){
		$this->id_documento=$valor;
	}
	public function getIdDocumento()	{
		return $this->id_documento;
	}

    public function setDescripcion($valor){
		$this->descripcion=$valor;
	}
	
	public function getDescripcion(){
		return $this->descripcion;
	}

	public function setTitulo($valor){
		$this->titulo=$valor;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function setTipo($valor){
		$this->tipo=$valor;
	}
	public function getTipo(){
		return $this->tipo;
	}


	public function Guardar(){
     $sql="insert into detalle_up (id_up_pk,id_arc_pk,titulo,descripcion,id_tip_pk) values('$this->id_upload','$this->id_documento','$this->titulo','$this->descripcion','$this->tipo')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar(){
	$sql="update detalle_venta set preciov=$this->preciov , cantidad=$this->cantidad where id_upload=$this->id_upload and id_producto=$this->id_producto";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function eliminar()	{
		$sql="delete from detalle_venta where id_upload=$this->id_upload and id_producto=$this->id_producto";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function eliminardetalle(){
		$sql="delete from detalle_venta where id_upload=$this->id_upload";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;
	}
	
	public function buscar($criterio) {
	$sql="select * from detalle_venta where id_upload=$criterio";
		return parent::ejecutar($sql);
	}
}    
?>