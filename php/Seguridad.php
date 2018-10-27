<?php
session_start(); //Inicio la sesión
if ($_SESSION["Autentificado"] != "SI")	//Comprueba que el usuario este autentificado
	{
		header("Location: ../index.php"); //Si no existe, envio a la página de autentificación
		// alert("NO TIENES PERMISOS CONTACTA AL ADMINISTRADOR");
		exit();	//Salgo de este script
	}
?>