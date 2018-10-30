<?php
session_start();
include ("../php/Funciones.php");

$id_usuario =1;


// INSERT INTO `bitacora_ssu`(`id_bitacora_siup`, `id_usuario`, `fecha`, `hora`, `archivo`, `consulta_sql`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])


// $sql_bitacora = "INSERT INTO bitacora_ssu (id_bitacora_siup,id_usuario, fecha, hora,archivo, consulta_sql) VALUES (
// '".$id_usuario."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$ip."', '".$archivo."', '".mysqli_real_escape_string($conexion,$consulta)."');";


// mysqli_query($conexion, $sql_bitacora);
// mysqli_select_db($conexion, "bitacora_ssu");

// $resultado->close();

echo $_SESSION["ruta_imagen"];
echo $var;
?>

<p><?php echo $sql_bitacora ?></p>