<?php 
class vista {
	
	private $maqueta;
	private $contenido;

	function __construct(){
		$this->maqueta="Vistas/maqueta.php";
	}

	function getMaqueta(){
		return $this->maqueta;
	}
	function render($vista, $array=null, $array2=null,$dato1 =null){
		$this->contenido="Vistas/".$vista.".php";
		include $this->getMaqueta();

	}
}

 
 ?>

