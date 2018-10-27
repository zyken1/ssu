<?php
/*
-- ==============================================================================
-- Empresa:
-- Proyecto: Sistema Integral DE PANELES SOLARES - URUAPAN - Administrativo
-- Autor:
-- Responsable: Ing. PEDRO E. NEQUIZ MEDINA
-- Fecha de Creación: []
-- País: México
-- Objetivo: Página de autenticación
-- Última Modificación:
-- Realizó: 
-- Observaciones:
-- ===============================================================================
*/
session_start();
session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="imagenes/golden.ico">
  <title>::... SSU ...::</title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
                <!-- HOJAS DE ESTILO -->
  <link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="librerias/bootstrap/4.1.3/css/bootstrap.min.css">

  <script language="javascript">
  function Left_Trim(Cadena)  //Funcion que quita los espacios a la izquierda
  {  
    while (Cadena.charAt(0) == " ")
    Cadena = Cadena.substr(1, Cadena.length - 1);  
    return Cadena;  
  } 

function Right_Trim(Cadena) //Funcion que quita los espacios a la derecha
  {  
    while (Cadena.charAt(Cadena.length - 1) == " ")   
    Cadena = Cadena.substr(0, Cadena.length - 1);  
    return Cadena;  
  } 

function Sin_Espacios(Cadena) // Funcion que quita los espacios a la izquierda y a la derecha
  {  
    return Right_Trim(Left_Trim(Cadena)); 
  }

// ************************************************************
// Funcion javascript para validar para que no se dejen campos sin llenar
function Validar() 
  {
    var Login = document.Formulario.Login.value;
    var Password =  document.Formulario.Password.value;
    if (Sin_Espacios(Login)=="")
      {
        // $('[data-toggle="popover"]').popover('show'); 
        $('#Login').popover('show')
        document.Formulario.Login.focus();
        document.Formulario.Login.value = Sin_Espacios(Login);
        return false;
      }
    else
      { document.Formulario.Login.value = Sin_Espacios(Login); }

    if (Sin_Espacios(Password)=="")
      {
        // $('[data-toggle="popover"]').popover('show'); 
        $('#Password').popover('show')
        document.Formulario.Password.focus();
        document.Formulario.Password.value = Sin_Espacios(Password);
        return false;
      }
      else
      { document.Formulario.Password.value = Sin_Espacios(Password); }
       document.getElementById("progreso").style.display = "";      
  }  
  
  </script>
</head>
<body>

<div id="wrapper">
  <div id="header">
    <figure  class="figure">
       <!-- <img src="imagenes/cabezera.png" id="logo" class="logo"> -->
      <!-- <figcaption class="figure-caption">A caption for the above image.</figcaption> -->
       <img src="imagenes/logo.png" class="logo" class="img-fluid" alt="logo_vectores" class="logo_vectores" style="height: 145px;">
    </figure>
    <div id="user"></div>
  </div>
  <div id="page">
    <div id="content">
      <p>
        <form name="Formulario"  action="Entrar.php" method="post" onSubmit="return Validar();">
          <table width="280" border="0" align="center" class="table table-borderless">
            <tr align="center">
              <td colspan="2"><p><h3>¡Bienvenido!</h3></p>
              <p>Para ingresar introduce los siguientes datos:</p></td>
            </tr>
            <tr align="center">
              <td >&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><input type="text" name="Login" id="Login" placeholder="Usuario" maxlength="15" data-toggle="popover" data-trigger="focus" title="Error" data-content="Debes introducir un Usuario"/></td>
            </tr>
            <tr>
              <td align="center"><input type="password" name="Password" id="Password" placeholder="Contraseña" maxlength="20" data-toggle="popover" data-trigger="focus" title="Error" data-content="Debes introducir una Contraseña" /></td>
            </tr>
            <tr> 
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><input type="submit" class="btn btn-primary" name="Enviar" id="Enviar" value="Ingresar" /></td>
            </tr>       
          </table>
           <div class="progress" id="progreso" style="display:none; ">              
           <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>     
        </form>
        </div>
      </p>
      </div>
  </div>
  <footer id="footer" class="footer">
      <div class="container">
        <span style="color:#6c757d">Sistemas Solares de Uruapan. 2018</span>
      </div>
  </footer>
</div>
                                               <!-- JS BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>