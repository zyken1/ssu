<?php include ("../php/Header.php"); ?>

<script language="javascript">
<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>
</script>

<?php include ("../php/Body.php"); ?>

<?php 
$sql_correos = "SELECT * FROM usuarios ;";
$resultado_correos = mysqli_query($conexion,$sql_correos);
// $fila_correos = mysqli_fetch_array($resultado_correos);
?>

<div class="table-responsive">
<table class="table  table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">id usuarios</th>
      <th scope="col">Login</th>
      <th scope="col">Password</th>
      <th scope="col">Nombre</th>
      <th scope="col">Area</th>
      <th scope="col">Correo</th>
      <th scope="col">Correo empresa</th>
      <th scope="col">Contraseña correo empresa</th>
    </tr>
  </thead>
  <tbody>
<?php
while ($fila_correos =  mysqli_fetch_array($resultado_correos)) {
?>
    <tr>
      <td scope="row"><?php echo $fila_correos["id_usuario"]; ?></td>
      <td scope="row"><?php echo $fila_correos["login"]; ?></td>
      <td scope="row"><?php echo $fila_correos["password"]; ?></td>
      <td scope="row"><?php echo $fila_correos["nombre"]; ?></td>
      <td scope="row"><?php echo $fila_correos["menu"]; ?></td>
      <td scope="row"><?php echo $fila_correos["correo"]; ?></td>
      <td scope="row"><?php echo $fila_correos["correo_empresa"]; ?></td>
      <td scope="row"><?php echo $fila_correos["contrasena_correo_empresa"]; ?></td>

    </tr>
<?php
}
?>
  </tbody>
</table>
</div>


<?php include ("../php/Footer.php"); ?>