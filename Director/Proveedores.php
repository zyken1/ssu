<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>


<table class="table">
  <thead>
    <tr>
    	<th scope="col">Area</th>
      <th scope="col">Provedor</th>
      <th scope="col">Numero</th>
      <th scope="col">Direccion</th>
      <th scope="col">Correo</th>
      <th scope="col">Insumos</th>
      <th scope="col">Mas informacion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Inter</th>
      <td>IBE</td>
      <td>4521983046</td>
      <td>Calzada juarez</td>
      <td>ibe@gmail.com</td>
      <td>Cable, etc.</td>
      <td>			<a href="#" target="_blank">
				<img src="../imagenes/list.png" alt="Logo" style="width:28px;"></td>
    </tr>
  
  </tbody>
</table>

<?php include ("../php/Footer.php"); ?>

