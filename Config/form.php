<?php 

class form{

		function iniciarForm($metodo,$action,$nombre){
			echo  "<div class='row'><div class='col-mb-12 col-md-offset-2'>";
			echo "<form class='form-horizontal' role='form' name='".$nombre."' action='".$action."' method='".$metodo."' id='".$nombre."'>";
			

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
	
			echo "<input class='form-control' type='text' name='".$nombre."' ".$value." ".$m." id='".$nombre."'>";

			
			
		}

		function addPassword($nombre){
			echo "<input class='form-control' type='password' name='".$nombre."' id='".$nombre."'>";
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
			echo "<textarea rows='$filas' name='$nombre' class='form-control' id='".$nombre."'>";
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
			echo "</form>";
			echo "</div></div>";
		}

		function group($tipo){
			echo "<div class='row'>";
			switch ($tipo){
				case 1:
					echo "<div class='form-group col-lg-1' >";
					break;
				case 2:
					echo "<div class='form-group col-lg-2' >";
					break;
				case 3:
					echo "<div class='form-group col-lg-3' >";
					break;
				case 4:
					echo "<div class='form-group col-lg-4' >";
					break;
				case 5:
					echo "<div class='form-group col-lg-5' >";
					break;
				case 6:
					echo "<div class='form-group col-lg-6' >";
					break;
				case 7:
					echo "<div class='form-group col-lg-7' >";
					break;
				case 8:
					echo "<div class='form-group col-lg-8' >";
					break;
				case 9:
					echo "<div class='form-group col-lg-9' >";
					break;
				case 10:
					echo "<div class='form-group col-lg-10' >";					
					break;
				case 11:
					echo "<div class='form-group col-lg-11' >";
					break;
				case 12:
					echo "<div class='form-group col-lg-12' >";
					break;
				
			}
		}

		function endGroup(){
			echo "</div></div>";
		}
}












 ?>