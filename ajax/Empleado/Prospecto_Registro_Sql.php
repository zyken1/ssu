<?php
session_start();
include ("../../php/Funciones.php");
// include ("../../js/Empleado/Prospecto_Funciones.php");
// $conexion = Conectar();

// $_POST["nombre"] = "nombre";
$id_area = $_SESSION["id_area"];
utf8_encode($ruta_imagen) = $_SESSION["ruta_imagen"];

$consulta_id="SELECT MAX(id_prospecto) + 1 AS ultimo_id FROM prospectos ";
$resultado = mysqli_query($conexion,$consulta_id);
$fila = mysqli_fetch_array($resultado);


if(trim($_POST["nombre"]) != "")
	{
 		//subir_image();
		$sql_prospecto = "INSERT INTO prospectos(id_prospecto, id_area, id_estatus, nombre, apellido, telefono1, telefono2, celular, direccion, estado, ciudad, codigo_postal,ruta_imagen,comentarios) VALUES (".$fila["ultimo_id"].",'".$id_area."',1,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["telefono"]."','".$_POST["telefono2"]."','".$_POST["celular"]."','".$_POST["direccion"]."','".$_POST["estado"]."','".$_POST["ciudad"]."', '".$_POST["codigo_postal"]."','".$ruta_imagen."','".$_POST["comentarios"]."') ";
		
		if (!mysqli_query($conexion,$sql_prospecto))
			echo "Error en la query: " . mysqli_error();
		else
			Bitacora_SSU($_SESSION["id_Usuario"], "ajax/Empleado/Prospecto_Registro_Sql.php", $sql_prospecto);
			echo "Datos Actualizados";
	}
else
	{
		echo "No debes dejar campos sin llenar";
	}

	unset($_SESSION["id_area"]);
	unset($_SESSION["ruta_imagen"]);
?>