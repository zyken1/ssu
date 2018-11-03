<?php
session_start();
include ("../php/Funciones.php");





// $conexion = Conectar();
$sql_prueba = "INSERT INTO bitacora_ssu  (id_bitacora_siup, id_usuario, fecha, hora, archivo, consulta_sql, error) VALUES ('6','2','3','4','5','6','7') ;";



if ($result = mysqli_query($conexion, "SELECT DATABASE()")) {
    $row = mysqli_fetch_row($result);
    printf("Default database is %s.\n", $row[0]);
    mysqli_free_result($result);
}

// $tabla = mysqli_select_db($conexion, "bitacora_ssu");

$sql_aspirantes = "CONSULTA SQL QUE VA ENTRAR NE LA BASE";
$_SESSION["id_Usuario"] = "variable sesion";
$_SESSION["IP_Usuario"] = "ip con la que se logio";
// $sql_aspirantes = "INSERT INTO bitacora_ssu  (id_bitacora_siup, id_usuario, fecha, hora, archivo, consulta_sql, error) VALUES ('4','2','3','4','5','6','7') ;";
// mysqli_query($conexion, $sql_bitacora2);
// echo $tabla;


Bitacora_SIUP("","promocion", $_SESSION["id_Usuario"], $_SESSION["IP_Usuario"], "Aspirante_Guardar.php", $sql_aspirantes, $error);

?>

<p><?php echo $sql_bitacora ?></p>




