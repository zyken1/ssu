<?
include("php/Funciones.php");

if(trim($_POST["Login"]) != "" && trim($_POST["Password"]) != "")
	{
		$sql = "SELECT * FROM usuarios WHERE login = '".$_POST["Login"]."' ";
	  	$resultado = mysqli_query($conexion,$sql);
		@$registros = mysqli_num_rows($resultado);


	  	if($registros > 0)
			{
				$fila = mysqli_fetch_array($resultado);

			  	if($fila["password"] == md5($_POST["Password"]))
				  	{
					  	session_start();
					  	$_SESSION["Autentificado"] = $fila["edicion"]; //SI tiene permisos
						$_SESSION["id_Usuario"] = $fila["id_usuario"];
					  	$_SESSION["Usuario"] = $fila["login"];
						$_SESSION["Nombre"] = $fila["nombre"];
						$_SESSION["Correo"] = $fila["correo"];
						$_SESSION["Correo2"] = $fila["correo_empresa"];
						$_SESSION["Pagina"] = $fila["pagina"];
						$_SESSION["Menu"] = $fila["menu"];
						$_SESSION["Funciones"] = $fila["funcion"];
						// $_SESSION["AJAX"] = $fila["ajax"];
						// $_SESSION["Edicion"] = $fila["edicion"];
						$_SESSION["Permisos"] = $fila["permisos"];
						$_SESSION["Activo"] = $fila["id_estatus"];
						
						if (!empty($_SERVER['HTTP_CLIENT_IP']))
							$ip_usuario = $_SERVER['HTTP_CLIENT_IP'];
						else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
							$ip_usuario = $_SERVER['HTTP_X_FORWARDED_FOR'];
						else
							$ip_usuario = $_SERVER['REMOTE_ADDR'];
						
						$sql_registro = "INSERT INTO usuarios_bitacora_ingreso (id_ingreso,id_usuario, fecha, hora, ip) VALUES ('','".$fila["id_usuario"]."', '".date('Y-m-d')."', '".date('H:i:s')."', '".$ip_usuario."')";
						$resultado_registro = @mysqli_query($conexion,$sql_registro);
						
					  	header ("Location: ".$fila["pagina"]."");
				  	}
			  	else
				  	{
?>
						<? include ("Etiquetas.php"); ?>
    
    					<h3>Contrase&ntilde;a Incorrecta</span></h3>
                        <p align="center"><a href="index.php">Regresar</a></p>
                        
                        <? include ("Footer.php"); ?>
<?
					}
			}
		else
			{
?>
				<? include ("Etiquetas.php"); ?>
                
                <h3>Usuario No valido</span></h3>
                <p align="center"><a href="index.php">Regresar</a></p>
        
                <? include ("Footer.php"); ?>        
<?				
			}
		mysqli_close($conexion);
	}
else
	{
?>
		<? include ("Etiquetas.php"); ?>
         <h3>Debes introducir tu usuario y contrase&ntilde;a</span></h3>
		<p align="center"><a href="index.php">Regresar</a></p>

		<? include ("Footer.php"); ?>        
<?
	}
?>