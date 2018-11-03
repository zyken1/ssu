<?php include ("../php/Header.php"); ?>

<script language="javascript">
<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>
</script>

<?php include ("../php/Body.php"); ?>


<div style="width:100%;height:800px;overflow:hidden;">
<iframe src="../iframe/tarjetas.html" width="100%" height="800px"></iframe>
</div>

 <table class="table">
  <thead>
    <tr>
      <th> Nombre de la Empresa</th>
      <th> Nombre del Contacto</th>
      <th> Numero Telefonico</th>
      <th> Correo Electronico</th>
      <th> Numero</th>
      <th> Direccion</th>
      <th>Tarjeta de Presentacion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>New York Life</td>
      <th>------</th>
      <td>4521983046</td>
      <td>jqgebdguy@gmail.com</td>
      <td>15461463</td>
      <td>Avenida Juarez</td>
      <td><a href="../imagenes/sistemas.jpg " target="_blank">
        <img src="../imagenes/sistemas.jpg" alt="Logo" style="width:20px;height:25px;" >
      </a></td>
    </tr>

  </tbody>
</table>


<?php include ("../php/Footer.php"); ?>

