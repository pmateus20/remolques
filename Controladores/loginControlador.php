<?php 
class loginControlador extends controlador{
	private $usuario;
	private $password;
	private $tipoUsuario;
	

	

	function iniciar(){
		$this->vista->render("login/iniciar");
	}

	function login(){
		if(isset($_POST["Login"])){
			$this->setusuario($_POST["usuario"]);
			$this->setpassword(md5(strtoupper($_POST["password"])));
			

			$model=new empleadoModelo();
			$r=$model->buscarUsuario($this->getusuario());
			if(isset($r)){
				if($this->getpassword() == $r["password"]){
				$_SESSION["login"]="si";
				$_SESSION["empleado"]=$r["codigo"];
				$_SESSION["tipo"]=$r["tipoUsuario"];
				$this->vista->render("principal/main");
				}else{
					$this->vista->render("login/iniciar",null,null,"Usuario o Password Incorrectos intente de nuevo");	
				}	
			}else{
				$this->vista->render("login/iniciar",null,null,"Usuario o Password Incorrectos intente de nuevo");	
			}
			
			
		}


			
			
			
	}

	function logout(){
		session_destroy();
		router::redirect("login/iniciar");

	}







	//start get and set
	

	function getusuario(){
		return $this->usuario;
	}
	function setusuario($usr){
		$this->usuario=$usr;
	}

	function getpassword(){
		return $this->password;
	}
	function setpassword($pas){
		$this->password=$pas;
	}

	function gettipoUsuario(){
		return $this->tipoUsuario;
	}
	function settipoUsuario($tipUsr){
		$this->tipoUsuario=$tipUsr;
	}

	
	//end get and set
}
 ?>