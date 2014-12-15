<?php 
	class router{
		private $url;

		function __construct(){
			if(isset($_GET["p"])){
				$this->url=$_GET["p"];
			}else{
				if(isset($_SESSION["login"])){
					$this->url="principal/main";	
				}else{
					$this->url="login/iniciar";	
				}
				
			}

		}

		function direccionar(){

			$url=explode("/",trim($this->url,"/"));
			if(isset($url[0])){
				$controlador=$url[0]."Controlador";
				
				if(isset($url[1])){
					$metodo=$url[1];
				
					if(isset($url[2])){
						$valor=$url[2];
					}else{
						$valor=null;
					}
				}
			}
			require_once("Controladores/".$controlador.".php");
			$clase=new $controlador();
			$clase->$metodo($valor);
		}

		static function redirect($url){
			header("Location: index.php?p=".$url);
		}


		
	}





 ?>