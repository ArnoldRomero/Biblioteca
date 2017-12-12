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
	public function Detalle()
	{   parent::Conexion();
		$this->id_upload=0;
		$this->id_documento=0;
		$this->titulo="";		
		$this->descripcion="";
		$this->tipo=0;
	}
	//propiedades de acceso
	public function setIdUpload($valor)
	{
		$this->id_upload=$valor;
	}
	public function getIdUpload(){
		return $this->id_upload;
	}

	public function setIdDocumento($valor)
	{
		$this->id_documento=$valor;
	}
	public function getIdDocumento()	
	{
		return $this->id_documento;
	}

    public function setDescripcion($valor)
    {
		$this->descripcion=$valor;
	}
	
	public function getDescripcion()
	{
		return $this->descripcion;
	}

	public function setTitulo($valor)
	{
		$this->titulo=$valor;
	}
	public function getTitulo()
	{
		return $this->titulo;
	}
	public function setTipo($valor)
	{
		$this->tipo=$valor;
	}
	public function getTipo()
	{
		return $this->tipo;
	}


	public function Guardar(){
     $sql="insert into detalle_up (id_up_pk,id_arc_pk,titulo,descripcion,id_tip_pk) values('$this->id_upload','$this->id_documento','$this->titulo','$this->descripcion','$this->tipo')";		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	public function Modificar()
	{
		$sqli="update detalle_up set titulo='$this->titulo', descripcion='$this->descripcion', id_tip_pk='$this->tipo' where id_arc_pk='$this->id_documento' and id_up_pk='$this->id_upload';";
		echo "<br><br>".$sqli;
		if(parent::ejecutar($sqli)){
			return true;
		}
		else
			return false;
	}
	
	public function Eliminar()	{
		$sql="DELETE from detalle_up where id_up_pk='$this->id_upload' and id_arc_pk='$this->id_documento'";
		
		if(parent::ejecutar($sql))
			return true;
		else
			return false;	
	}
	
	
	public function buscar($criterio) {
	$sql="select * from detalle_up where id_arc_pk=$criterio";
		return parent::ejecutar($sql);
	}

	public function UltimosCinco(){
		$sql="SELECT * FROM detalle_up,archivo,tipo WHERE detalle_up.id_arc_pk=archivo.id_archivo AND detalle_up.id_tip_pk=tipo.id_tip ORDER BY id_archivo DESC LIMIT 5"; 
		return parent::ejecutar($sql); 
	}

	public function Busqueda($criterio,$tipo){
		$sql="SELECT * FROM detalle_up,archivo,tipo WHERE detalle_up.id_arc_pk=archivo.id_archivo AND detalle_up.id_tip_pk=tipo.id_tip AND titulo like '%$criterio%' AND id_tip like '$tipo%';"; 
		return parent::ejecutar($sql); 
	}

	public function Filtrar($tittle,$fecha){
		$sql="SELECT * FROM detalle_up,archivo,tipo WHERE detalle_up.id_arc_pk=archivo.id_archivo AND detalle_up.id_tip_pk=tipo.id_tip AND titulo like '%$criterio%' AND id_tip like '$tipo%';"; 
		return parent::ejecutar($sql); 
	}
	public function BuscarxUsuario($criterio) {
	$sql="SELECT * from detalle_up,upload where upload.id_up=detalle_up.id_up_pk AND id_usu_pk='$criterio' ORDER BY fecha_up DESC; ";
		return parent::ejecutar($sql);
	}


}    

?>