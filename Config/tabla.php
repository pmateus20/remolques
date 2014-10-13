<?php 

class tabla {

	private $datos;
//el array debe ser bidimencional
	function __construct($array){
		$this->datos=array();
		$this->datos=$array;
	}

	function mostrarTabla(){
		
	$campos=implode(",",array_keys($this->datos[0]));
	$cam=explode(",", $campos);


	echo "<table>";

	echo "<tr>";

	foreach ($cam as $titulo) {
		$string=$titulo;
		$string = preg_replace("/(?<=\\w)(?=[A-Z])/"," $1", $string);
		$string = strtoupper($string);
		echo "<th>".$string."</th>";
	}
	echo "</tr>";

	foreach ($this->datos as $value) {
		echo "<tr>";
			foreach ($value as $dato) {
				echo "<td>".$dato."</td>";
			}
		echo "</tr>";
	}
	echo "</table>";

	}



}







 ?>