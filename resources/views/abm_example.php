<?php
//echo "hola hola";
if(isset($_POST["action"])||isset($_GET["action"])) 
{

	require_once('usuarios_model.php');
	$usuario1 = new Usuario();

	$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];

	switch($action) 
	{
		case 'agregar_usuario':
				$correo=$_POST['correo'];
				echo $correo;
				$usuario1->set($correo);
        break;

	}

}
else
{
	echo ("no");
}


	
?>