<?php
	require_once("includes/conexion.proc.php");
	extract($_GET);
	//SQL de actualización del historial
	$sql = "UPDATE `tbl_historial` SET `his_comentario` = '".$comentario."' WHERE `tbl_historial`.`his_id` = ".$id;
	if(mysqli_query($conexion,$sql))
	//Controlamos que la modificación haya sido correcta, si lo ha sido mostramos el mensaje de modificacion correcta
	{
		echo "<script type='text/javascript'>alert('Modificación correcta');
				location.href='orientacion.php';</script>";//Redireccionamos a orientacion
	}
	else{// Si n le indicamos que ha habido un error
		echo "<script type='text/javascript'>alert('A ocurrido un error inesperado, porfavor vuelva a intentarlo');
				location.href='sh_terapias.php';</script>";//Redireccionamos a ver terapias
	}
?>