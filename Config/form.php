<?php 

class form{

		function iniciarForm($metodo,$action,$nombre){
			echo "<form name='".$nombre."' action='".$action."' method='".$metodo."'>";

		}

		function addTextbox($nombre,$valor=null){
			if(!is_null($valor)){
				$value="value=".$valor." ";
			}else{
				$value="";
			}
			echo "<input type='text' name='".$nombre."' ".$value.">";
		}

		function addPassword($nombre){
			echo "<input type='password' name='".$nombre."' >";
		}

		function addLabel($texto){
			echo "<label>".$texto."</label>";
		}

		function addCombo($nombre,$array){
			echo "<select name='".$nombre."'>";
			foreach($array as $key => $value){
				echo "<option value='".$value."'>".$key."</option>";
			}
			echo "</select>";
		}

		function addSubmit($nombre){
			echo "<input type='submit' value='".$nombre."' name='".$nombre."'>";
		}

		function finForm(){
			echo "</form>";
		}
}












 ?>