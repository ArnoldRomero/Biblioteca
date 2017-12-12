<?php
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
		$sql="SELECT *from download";
		return parent::ejecutar($sql);
	}

	public function BuscarHoy($user,$fechahoy){
		$sql="SELECT * FROM download,archivo,detalle_up WHERE download.id_ard_pk=archivo.id_archivo AND archivo.id_archivo=detalle_up.id_arc_pk AND id_usd_pk='$user' AND fecha_down='$fechahoy' ORDER BY fecha_down ASC;";
		return parent::ejecutar($sql);
	}

	public function BuscarEntreFecha($user,$fecha1,$fecha2){
		$sql="SELECT * FROM download,archivo,detalle_up WHERE download.id_ard_pk=archivo.id_archivo AND archivo.id_archivo=detalle_up.id_arc_pk AND id_usd_pk='$user' AND fecha_down>='$fecha1' AND fecha_down<='$fecha2' ORDER BY fecha_down DESC;";
		return parent::ejecutar($sql);
	}	

										

}    
?>