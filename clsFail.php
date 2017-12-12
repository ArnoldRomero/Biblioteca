<?
include_once('clsConexion.php');
class Fail extends Conexion
{
	//atributos
	private $id_upload;
	private $id_documento;
	private $titulo;
	private $descripcion;
	private $tipo;
	

	//construtor
	public function Fail()
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


	
	public function Modificar()
	{
		$sqli="update detalle_up set titulo='$this->titulo', descripcion='$this->descripcion', id_tip_pk='$this->tipo' where id_arc_pk='$this->id_documento' and id_up_pk='$this->id_upload'";
		echo "<br><br>".$sqli;
		if(parent::ejecutar($sqli)){
			return true;
		}
		else{
			return false;
		}
	}


}    

?>