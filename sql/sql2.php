<?php
session_start();
include ("../../php/Funciones.php");

$id_usuario =1;

// date_default_timezone_set('UTC');

// date_default_timezone_set('America/Mexico_City')

echo date('l jS \of F Y h:i:s A')."<br/>";

// Imprime algo como: Monday
echo date("l")."<br/>";

// Imprime algo como: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A')."<br/>";

// Imprime: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000))."<br/>";

/* Usar las constantes en el parámetro de formato */
// Imprime algo como: Wed, 25 Sep 2013 15:28:57 -0700
echo date(DATE_RFC2822)."<br/>";

// Imprime algo como: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000))."<br/>";



// INSERT INTO `bitacora_ssu`(`id_bitacora_siup`, `id_usuario`, `fecha`, `hora`, `archivo`, `consulta_sql`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6])


// $sql_bitacora = "INSERT INTO bitacora_ssu (id_bitacora_siup,id_usuario, fecha, hora,archivo, consulta_sql) VALUES (
// '".$id_usuario."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$ip."', '".$archivo."', '".mysqli_real_escape_string($conexion,$consulta)."');";


// mysqli_query($conexion, $sql_bitacora);
// mysqli_select_db($conexion, "bitacora_ssu");

// $resultado->close(); 
?>

<p><?php echo $sql_bitacora ?></p>