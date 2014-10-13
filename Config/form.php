<?php 

class form{

		function iniciarForm($metodo,$action,$nombre){
			echo "<form class='form-horizontal' role='form' name='".$nombre."' action='".$action."' method='".$metodo."'>";
			echo "<div class='form-group'>";

		}

		function addTextbox($nombre,$valor=null){
			if(!is_null($valor)){
				$value="value=".$valor." ";
			}else{
				$value="";
			}
			echo "<input class='form-control' type='text' name='".$nombre."' ".$value.">";
		}

		function addPassword($nombre){
			echo "<input class='form-control' type='password' name='".$nombre."' >";
		}

		function addLabel($texto){
			echo "<label>".$texto."</label>";
		}

		function addCombo($nombre,$array){
			echo "<select class='form-control' name='".$nombre."'>";
			foreach($array as $key => $value){
				echo "<option value='".$value."'>".$key."</option>";
			}
			echo "</select>";
		}

		function addSubmit($nombre){
			echo "<input class='btn btn-default' type='submit' value='".$nombre."' name='".$nombre."'>";
		}

		function finForm(){
			echo "</div>";
			echo "</form>";
		}
}












 ?>