<?php
session_start();
include ("../../php/Funciones.php");
// $conexion = Conectar();

// date_default_timezone_set('America/Mexico_City');
// echo date("l");

// $date = new Datetime($POST[""]);
// $fecha = date_format($date,"d/m/Y");
// 
$_POST["nombre"] = "PEDRO ";
$_POST["apellido"] = "medina ";
$_POST["comentarios"] = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas, las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum. ";
echo $_POST["nombre"];

$id_area = $_SESSION["id_area"];

$consulta_id="SELECT MAX(id_prospecto) + 1 AS ultimo_id FROM prospectos ";
$resultado = mysqli_query($conexion,$consulta_id);
$fila = mysqli_fetch_array($resultado);

// if(trim($_POST["id_Ciclo_Escolar"]) != "" && trim($_POST["id_Carrera"]) != "" && trim($_POST["id_Escuela"]) != "" && trim($_POST["Apellido_Paterno"]) != "" && trim($_POST["Apellido_Materno"]) != "" && trim($_POST["Nombre"]) != "")


		$sql_prospecto = "INSERT INTO prospectos(id_prospecto, id_area, id_estatus, nombre, apellido, telefono1, telefono2, celular, direccion, estado, ciudad, codigo_postal, comentarios) VALUES (".$fila["ultimo_id"].",'".$id_area."',1,'".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["telefono"]."','".$_POST["telefono2"]."','".$_POST["celular"]."','".$_POST["direccion"]."','".$_POST["estado"]."','".$_POST["ciudad"]."', '".$_POST["codigo_postal"]."','".$_POST["comentarios"]."') ";
		
		$resultado = mysqli_query($conexion,$sql_prospecto);
		//if (!mysqli_query($conexion,$sql_prospecto))
			//echo "Error en la query: " . mysqli_error();
		//else
			//echo "Datos Actualizados";
			//Bitacora_SSU($_SESSION["id_Usuario"], "ajax/Promocion/Candidato_Modificacion_Actualizar.php", $sql_prospecto);
var_dump($fila);


// $resultado->close(); 
?>

<p><?php echo $sql_prospecto ?></p>