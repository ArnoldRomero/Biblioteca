 <?
    class Carrito
    {
       private $titulo = array();
	   private $tipo= array();
	   private $descripcion= array();
	   private $nombre=array();
	   private $tamaño=array();
	   private $formato=array();

	   private $destino=array();
	   private $dim;
	 
		public function Carrito()
	    {
	      $this->dim = 0;
		}


		public function setDim($f)
	    {
		     $this->dim = $f;
		}
		public function getDim()
	    {
		    return $this->dim;

		}


		public function setElem($titulo,$tipo,$descripcion,$nombre,$tamaño,$formato,$destino,$pos)
		{
			$this->titulo[$pos]=$titulo;
			$this->tipo[$pos]=$tipo;
			$this->descripcion[$pos]=$descripcion;
			$this->nombre[$pos]=$nombre;
			$this->tamaño[$pos]=$tamaño;
			$this->formato[$pos]=$formato;
			$this->destino[$pos]=$destino;
		}


		public function getTitulo($pos)
		{
			return $this->titulo[$pos]; 
		}
		public function getTipo($pos)
		{
			return $this->tipo[$pos];
		}
		public function getDescripcion($pos)
		{
			return $this->descripcion[$pos];
		}
		public function getNombre($pos)
		{
			return $this->nombre[$pos]; 
		}
		public function getTamaño($pos)
		{
			return $this->tamaño[$pos];
		}
		public function getFormato($pos)
		{
			return $this->formato[$pos];
		}
		public function getDestino($pos)
		{
			return $this->destino[$pos];
		}




		public function Insertar($titulo,$tipo,$descripcion,$nombre,$tamaño,$formato,$destino)
		{
			$this->setElem($titulo,$tipo,$descripcion,$nombre,$tamaño,$formato,$destino,$this->dim);
			$this->dim++;

		}



		public function Eliminar($pos)
		{
			if($this->dim==1)
			{	
				$this->setDim(0);
			}
			else
			{
				for($i=$pos+1; $i<$this->dim; $i++)
				{
					$aux1=$this->getTitulo($i);
					$aux2=$this->getTipo($i);
					$aux3=$this->getDescripcion($i);
					$aux4=$this->getNombre($i);
					$aux5=$this->getTamaño($i);
					$aux6=$this->getFormato($i);
					$aux7=$this->getDestino($i);
					$this->setElem($aux1,$aux2,$aux3,$aux4,$aux5,$aux6,$aux7,$i-1);
				}
				$this->dim--;
			}
		}
}						  
?>				