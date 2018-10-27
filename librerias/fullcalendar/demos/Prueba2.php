<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link rel='stylesheet' href='../lib/cupertino/jquery-ui.min.css' />
<link href='../fullcalendar.min.css' rel='stylesheet' />
<link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' />

<script language="javascript" src="Funciones_Jquery.js"></script>

<script src='../lib/moment.min.js'></script>
<script src='../lib/jquery.min.js'></script>
<script src='../fullcalendar.min.js'></script>
<script>

	$(document).ready(function(){
		//Calendario_Psicologa_Buscar();
		
		$('#Mostrar').click(function(){
			//Calendario_Psicologa_Evento_Nuevo();
			//alert("btn_Nuevo");
			//Calendario_Psicologa_Buscar();
			
			$('#div_Calendariox').html('**');
			Calendario_Psicologa_Buscar();
			
		});
		
		$('#Ocultar').click(function(){
			//Calendario_Psicologa_Evento_Nuevo();
			//alert("btn_Nuevo2");
			//Calendario_Psicologa_Buscar();
			
			$('#div_Calendariox').html('');
			//Calendario_Psicologa_Buscar();
		});
	});

</script>

</head>
<body>

    
<table width="100%" align="center">
  <tr>
    <td width="60%">+<div id="div_Calendariox" style="width: 90%;">--</div>+</td>
    <td valign="top">
    
		<p style="text-align:center"><input type="button" class="button" name="Mostrar" id="Mostrar" value="Mostrar" /></p>
        <br />
        <p style="text-align:center"><input type="button" class="button" name="Ocultar" id="Ocultar" value="Ocultar" /></p>
    
    	/<div id="div_Calendario_Evento">**</div>/</td>
  </tr>
</table>

</body>
</html>
