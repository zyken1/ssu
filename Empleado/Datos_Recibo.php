<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>


<table class="table" style="width:50%;margin-left: 30%;">
  <thead class="alert-info text-center">
    <tr>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">usuario</th>
      <td>maryfdez</td>
    </tr>
    <tr>
      <th scope="row">contraseña</th>
      <td>danytf2013</td>
    </tr>
  </tbody>
</table>

<div style="width:100%;height:800px;overflow:hidden;">
<iframe src="../iframe/Conoce el recibo.htm" width="100%" height="800px"></iframe>
</div>


<?php include ("../php/Footer.php"); ?>