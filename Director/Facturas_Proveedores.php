<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>


<table class= "shadow table">
  <thead>
    <tr>
      <th scope="col">Empresa</th>
      <th scope="col">Fecha de la factura</th>
      <th scope="col">Area</th>
      <th scope="col">Factura pdf</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>IBE</th>
      <td>02/11/2018</td>
      <td>Interconexion</td>
      <td><a href="#" target="_blank">
				<img src="../imagenes/pdf.png" alt="Logo" style="width:25px;height:30px;" >
			</a></td>
    </tr>

  </tbody>
</table>

<?php include ("../php/Footer.php"); ?>

