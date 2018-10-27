<?php
session_start();
// ************************************************************************************************
// FECHA DE ÚLTIMA ACTUALIZACIÓN: 13/04/2016
// USUARIO QUE EDITÓ: Julio César Morales Crispín
// DESCRIPCIÓN RÁPIDA DE EDICIÓN: Se crea el archivo
// ************************************************************************************************
include ("../../php/Funciones.php");

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: filename=\"Aspirantes_Reporte_XLS.xls\";");

$sql = "SELECT * FROM aspirantes JOIN escuela_procedencia USING(id_escuela_procedencia) WHERE fecha_registro BETWEEN '".$_POST["Fecha_Inicio"]."' AND '".$_POST["Fecha_Fin"]."' ORDER BY apellido_paterno, apellido_materno, nombre;";
$resultado = mysql_query($sql,$conexion);
@$registros = mysql_num_rows($resultado);

if ($registros > 0)
	{
?>
<table class="siup" border="0" align="center" width="99%">
  <thead>
  <tr>
    <th class="siup" align="center"># Aspirante</th>
    <th class="siup" align="center">Apellido Paterno</th>
    <th class="siup" align="center">Apellido Materno</th>
    <th class="siup" align="center">Nombre</th>
    <th class="siup" align="center">Tel&eacute;fono</th>
    <th class="siup" align="center">Correo</th>
    <th class="siup" align="center">Escuela</th>
    <th class="siup" align="center">Promedio</th>
    <th class="siup" align="center">Boleta</th>
  </tr>
  </thead>
  <tbody>
<?php
		while($fila = mysql_fetch_array($resultado))
			{
				$i++;
				if ($i%2 == 0) $color = "#EFF5FB";
				else $color = "#FFFFFF";
?>
  <tr bgcolor="<?php echo $color; ?>">
        <td class="siup" align="center"><?php echo $fila["id_aspirante"]; ?></td>
        <td class="siup"><?php echo htmlentities($fila["apellido_paterno"]); ?></td>
		<td class="siup"><?php echo htmlentities($fila["apellido_materno"]); ?></td>
		<td class="siup"><?php echo htmlentities($fila["nombre"]); ?></td>
        <td class="siup"><?php echo htmlentities($fila["telefono"]); ?></td>
        <td class="siup"><?php echo htmlentities($fila["correo"]); ?></td>
        <td class="siup" align="center"><?php echo htmlentities($fila["escuela_procedencia"]); ?></td>
        <td class="siup" align="center"><?php echo htmlentities($fila["promedio"]); ?></td>
        <td class="siup" align="center"><a href="http://201.163.210.252/SIPS/promedio/<?php echo htmlentities($fila["promedio_imagen"]); ?>" target="_blank"><?php echo substr($fila["promedio_imagen"],0,15); ?></a></td>
  </tr>
<?php
			}
?>
</tbody>
<tfoot>
	<tr>
    	<td class="siup" colspan="9"></td>       
    </tr>
</tfoot>
</table>
<?php
	}
else
	{
		echo "false";
	}
?>