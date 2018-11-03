<?php include ("../php/Header.php"); ?>

<script language="javascript">
<script language="javascript">
<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>


  function Validar_Area()
  {
    var Areas = document.Formulario_Area.Combo_Area.value;
    alert("Area no Disponible por el Momento")
      if (Areas=="1")
        {
        }else{
        }
      Prospecto_Registro();
  }

</script>

<?php 
?>


<?php include ("../php/Body.php"); ?>


<form name="Formulario_Area">
<!-- <p style="font-size:30px;"style="color:blue;">Prospectos<p> -->
  <div class="form-group">
    <label for="exampleFormControlSelect1"></label>
    <select class="form-control" id="exampleFormControlSelect1" name="Combo_Area" id="Combo_Area" onchange="Validar_Area()">
      <option>...</option>
      <option value="1">En camino</option>
      <option value="2">Pendientes</option>
      <option value="3">Terminados</option>
      <option value="4">Cobranza</option>
    </select>
  </div>
</form>

<br />

<div id="Resultado">&nbsp;</div>
<div id="Resultado2">&nbsp;</div>

<?php include ("../php/Footer.php"); ?>