<?php include ("../php/Header.php"); ?>

<script type="text/javascript" src="../js/Empleado/Prospecto_Funciones.js"></script>
<script language="javascript">
<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

	function Validar_Registro()
	{
		var Areas = document.Formulario_Area.Combo_Area.value;
			if (Areas=="1" || Areas=="2" || Areas=="3" || Areas=="4")
				{
				}else{
					// $('#Combo_Area').popover('show')
					// document.getElementById("Combo_Area").disabled = true;
					alert("Area no Disponible por el Momento")
					location.reload(true);
					document.Formulario_Area.Combo_Area.focus();
					return false;			
				}
			Hoja_Prospecto_Registro();
	}

	function Validar_Guardar()
	{
		var Nombre = Sin_Espacios(document.Form_Prospecto.nombre.value);
			if (Nombre=="")
			{
				document.Form_Prospecto.nombre.focus();
				document.Form_Prospecto.nombre.value = Sin_Espacios(Nombre);
				return false;
			}
			Prospecto_Registro();
	}

</script>

<?php include ("../php/Body.php"); ?>

<form name="Formulario_Area">
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <label class="input-group-text" for="Combo_Area">Selecciona Una Area</label>
	  </div>
	  <!-- <select class="custom-select" id="Combo_Area" onchange="Validar_Registro()" data-toggle="popover" data-trigger="focus" title="" data-content="Favor de Seleccionar Otra Area" data-original-title="Área No disponible" > -->
	  <select class="custom-select" name="Combo_Area" id="Combo_Area" onchange="Validar_Registro()">
	    <option selected >...</option>
<?php
$sql_areas = "SELECT id_area,nombre FROM areas ;";
$resultado_areas = mysqli_query($conexion,$sql_areas);

while($fila_areas = mysqli_fetch_array($resultado_areas)){
?>
      <option value="<?php echo $fila_areas["id_area"]; ?>"><?php echo $fila_areas["nombre"]; ?></option>
<?php
}
?>
	  </select>
	</div>
</form>

<br />

<div id="Resultado">&nbsp;</div>
<div id="Resultado2">&nbsp;</div>

<?php //include ("../ajax/Empleado/Prospecto_Registro.php"); ?>
<?php include ("../php/Footer.php"); ?>