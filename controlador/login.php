<?php 
    include "../modelo/login.php";
    $usuario = $_POST["usuario"];
    $clave	 = $_POST["clave"];
     
 	//$nom = new  Login(); crear objeto del modelo
 	//$nom = new  Login();
 	$conect = Login::conectando();
 	$user=$conect->Logeo($usuario,$clave); //instancia d user
 	if ($user==true) {
 		header("Location:../controlador/cliente.php"); 
 		//header para redireccionar o cargar
 	}
 	else {
 		  header("Location:../index.php");
 			
 		}

 ?>