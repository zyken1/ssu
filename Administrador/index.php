<?php include ("../php/Header.php"); ?>

<script language="javascript">

<?php include ("../js/".$_SESSION["Funciones"].""); //Archivo que contiene funciones para validar en javascript ?>

</script>

<?php include ("../php/Body.php"); ?>

<p align="center">Bienvenido(a): <?php echo $_SESSION["Nombre"]; ?></p>

<p align="center">Tu correo es: <?php echo $_SESSION["Correo"]; ?></p>


<?php include ("../php/Footer.php"); ?>