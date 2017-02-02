<!DOCTYPE html>
<html>
    <head>       
        <meta charset="utf-8"> 
        <title>Ejemplo del uso de tablas- aprenderaprogramar.com</title>
    </head>
    <body>
        <table border="2px"> <!-- Lo cambiaremos por CSS -->
            <thead>
            	<tr>
            		<th>N°</th>
            		<th>Nombres</th>
            		<th>Fecha</th>
            		<th>Direccion</th>
            	</tr>
            	<?php 
            		foreach ($listarcliente as $key => $value) {?>
            			<tr>
		            		<th><?php echo $value["id_cliente"]?></th>
		            		<th><?php echo $value["nombres"]?></th>
		            		<th><?php echo $value["fecha"]?></th>
		            		<th><?php echo $value["direccion"]?></th>
		            	</tr>
            		<?php }
            	 ?>
            </thead>
            <tbody></tbody>
        </table>
    </body>
</html>