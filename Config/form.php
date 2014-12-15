<?php 

class form{

		function iniciarForm($metodo,$action,$nombre){
			echo "<form class='form-horizontal' role='form' name='".$nombre."' action='".$action."' method='".$metodo."'>";
			echo "<div class='form-group'>";

		}

		function addTextbox($nombre,$valor=null,$maxlength=null){
			if(!is_null($valor)){
				$value="value='".$valor."' ";
			}else{
				$value="";
			}
			if(!is_null($maxlength)){
				$m="maxlength=".$maxlength;
			}else{
				$m="";
			}

			echo "<input class='form-control' type='text' name='".$nombre."' ".$value." ".$m.">";

			
		}

		function addPassword($nombre){
			echo "<input class='form-control' type='password' name='".$nombre."' >";
		}

		function addLabel($texto){
			echo "<label>".$texto."</label>";
		}

		function addCombo($nombre,$array,$selected=null){
			echo "<select class='form-control' name='".$nombre."'>";
			foreach($array as $key => $value){
				if($value==$selected){$op="selected";}else{$op="";}
				echo "<option value='".$value."' $op>".$key."</option>";
			}
			echo "</select>";
		}

		function addCheckbox($id,$nombre){
			echo "<input type='checkbox' name='$nombre' value='$id'>";
		}

		function addArea($filas,$nombre){
			echo "<textarea rows='$filas' name='$nombre' class='form-control'>";
			echo "</textarea>";
		}

		function addBoton($nombre){
			echo "<button class='btn btn-default'>".$nombre."</button>";
		}

		static function addHidden($nombre,$valor){
			echo "<input type='hidden' name='$nombre' value='$valor'>";
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