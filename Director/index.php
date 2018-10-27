<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>

<p align="center" class="shadow-lg p-3 mb-5 bg-white rounded">Bienvenido(a): <?php echo $_SESSION["Nombre"]; ?></p>

<p align="center" class="alert alert-info">Tu correo es: <?php echo $_SESSION["Correo"]; ?></p>

<?php include ("../php/Footer.php"); ?>