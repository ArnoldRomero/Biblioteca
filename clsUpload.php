<?
include_once('clsConexion.php');

class Upload extends Conexion{
	//atributos
	private $id_up;
	private $fecha;
	private $cantidad;
	private $id_usuario;

	//construtor
	public function Venta()
	{   parent::Conexion();
		$this->id_up=0;
		$this->fecha="";
		$this->cantidad=0;
		$this->id_usuario=0;
	}
	
	//propiedades de acceso
	public function setIdUpload($valor){
		$this->id_up=$valor;
	}
	
	public function getIdUpload(){
		return $this->id_up;
	}

	public function setFecha($valor){
		$this->fecha=$valor;
	}
	public function getFecha(){
		return $this->fecha;
	}

	public function setCantidad($valor){
		$this->cantidad=$valor;
	}
	public function getCantidad(){
		return $this->cantidad;
	}

	public function setIdUsuario($valor){
		$this->id_usuario=$valor;
	}
	public function getIdUsuario(){
		return $this->id_usuario;
	}

	public function ultimo_codigo()	{
	  $s="select max(id_up) as maximo from upload";	  
	  $reg = parent::ejecutar($s);	
	  $row =mysqli_fetch_array($reg);
	  $ultimo=$row['maximo'];
	  $ultimo=$ultimo;
      return $ultimo;
	}
	
	public function Guardar(){
     $sql="insert into upload (fecha_up,cantidad,id_usu) values('$this->fecha','$this->cantidad','$this->id_usuario')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar(){
	$sql="update venta set fecha='$this->fecha' where id_venta=$this->id_venta";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function modificar2() {
	$sql="update venta set id_cliente='$this->id_cliente',fecha='$this->fecha' where id_venta=$this->id_venta";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function eliminar(){
		$sql="delete from venta where id_venta=$this->id_venta";
	
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function buscarCliente($criterio){
		$sql="select *from cliente where nombre like '%$criterio%'";
		return parent::ejecutar($sql);
	}	
	
	public function buscarVenta($criterio){
	 $sql="select c.id_cliente, c.nombre, c.apellidos, v.id_venta, v.fecha from cliente c, venta v where c.id_cliente=v.id_cliente and (c.nombre like '%$criterio%' or c.apellidos like '%$criterio%')";
		return parent::ejecutar($sql);	
	}					
}    
?>