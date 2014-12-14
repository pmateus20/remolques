<?php 
//falta probar
class modelo{

	private $conexion;
	protected $campos;

	
	function __construct(){
		$this->valoresInsertar= array();
	}

	function conectar(){
		$this->conexion = mysql_connect('localhost', 'root', '')
    			or die('No se pudo conectar: ' . mysql_error());

		mysql_select_db('Remolques') or die('No se pudo seleccionar la base de datos');
	}

	function consulta($tabla,$condicion = null,$join=null,$c1=null,$c2=null){
		if(!isset($join)){
		$sql="select * from ".$tabla;
		}else{
			$sql="select * from ".$tabla." as t1 join ".$join." as t2 on t1.".$c1." = t2.".$c2;
			
		}
		
		if (!is_null($condicion)){
				$sql=$sql." ".$condicion;
			}
		
		$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
		return $resultado;
	}

	function insertar($tabla){
		if(!empty($this->campos)){
			$campos = implode(",",array_keys($this->campos));
			$valores= implode("','",$this->campos);
			$sql= "insert into ".$tabla."(".$campos.") values ('".$valores."')";

			$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
					
		}
	}

	function update($tabla,$condicion = null){
		if(!empty($this->campos)){
			$sql= "update ".$tabla." set ";
			foreach($this->campos as $clave => $valor){
				$sql=$sql.$clave."='".$valor."',";
			}
			$sql = substr($sql, 0, -1 );
			
			if (!is_null($condicion)){
				$sql=$sql." ".$condicion;
			}
			$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
			
		}	
	}

	function eliminar($tabla,$condi){
		
		$sql="delete from ".$tabla." where ".$condi;
	
		$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
				
	}

	
	function setCampos($array){
		$this->campos=$array;
	}

	function lastId($tabla,$campo){
		$sql="select max(".$campo.") as id from ".$tabla;
		$resultado=mysql_query($sql) or die('Consulta fallida: ' . mysql_error());
		$f=mysql_fetch_array($resultado);
		return $f["id"];

	}


}










 ?>