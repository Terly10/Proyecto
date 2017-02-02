<?php 
	include "../modelo/cliente.php";

	$nuevo = Cliente::conectando();
	$listarcliente = $nuevo->Listar();
        
         
	include "../vista/cliente/index.php";
 ?>