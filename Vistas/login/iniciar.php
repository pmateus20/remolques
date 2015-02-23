<div class="panel panel-info">
  <div class="panel-heading"><h4>Login</h4></div>
  <div class="panel-body">


	<?php 

	$f=new form();

	$f->iniciarForm("POST","index.php?p=login/login","Login");

	if(isset($dato1)){
		echo "<h4>".$dato1."</h4>";
	}

	$f->group(10);
	$f->addLabel("Usuario");
	$f->addTextbox("usuario");
	$f->endGroup();

	$f->group(10);
	$f->addLabel("Password");
	$f->addPassword("password");
	$f->endGroup();

	$f->group(10);
	$f->addSubmit("Login");
	$f->endGroup();

	$f->finForm();







	 ?>

   </div>
</div>