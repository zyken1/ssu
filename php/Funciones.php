<?php
// ----------------------------------------------
// Función: Conexion a la Base de Datos 
// Parámetros: -
// Return: Objeto de conexión a la base de datos especificada
// Fecha de Actualización: Septiembre, 21 2018
// Realizó: 
// ----------------------------------------------
date_default_timezone_set('America/Mexico_City');

function Conectar()
{
		// $conexion = mysqli_connect("localhost", "u819229246_ssu2", "1MNWPNjvoKIX", "u819229246_ssu2");
		// $conexion = mysqli_connect("localhost", "u819229246_ssu", "Df1aQvhroQNz", "u819229246_ssu");
	$conexion = mysqli_connect("localhost", "root", "1212mysql", "ssu2");

	if (!$conexion) {
	    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
	    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
	    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	// echo "Éxito: Se realizó una conexión apropiada a MySQL! La base de datos mi_bd es genial." . PHP_EOL;
	// echo "Información del host: " . mysqli_get_host_info($conexion) . PHP_EOL;
	return $conexion;
}
$conexion = Conectar();

// ----------------------------------------------
// Función: Mayusculas
// Parámetros: texto a convertir
// Return: Texto en mayúsculas con codificación utf8
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: Junio, 28 2017
// Realizó: Ing. Julio César Morales Crispín
// ----------------------------------------------
function Mayusculas($palabra)
{
	$palabra = strtoupper($palabra);
	return $palabra;
}


// ----------------------------------------------
// Función: Minusculas
// Parámetros: texto a convertir
// Return: Texto en minúsculas con codificación utf8
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: Junio, 28 2017
// Realizó: Ing. Julio César Morales Crispín
// ----------------------------------------------
function Minusculas($palabra)
{
	$palabra = strtolower($palabra);
	return $palabra;
}

// ----------------------------------------------
// Función: Iniciales
// Parámetros: texto a convertir
// Return: Iniciales de las palabras que contiene el texto
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: -, - -
// ----------------------------------------------
function Iniciales($cadena)
{
	$palabras = explode(" ",$cadena);
		
	foreach ($palabras as $palabra) {
		$inicial = $inicial.substr($palabra,0,1);
	}
		
	return $inicial;
}

// ----------------------------------------------
// Función: Validar_Correo
// Parámetros: correo electrónico
// Return: el mismo correo de ser correcto o la leyenda de "Correo no válido"
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: -, - -
// ----------------------------------------------	
function Validar_Correo($Correo)
{
	if (ereg('^[0-9A-Za-z\_\.]{3,}@([0-9A-Za-z]{2,}\.)*([0-9A-Za-z]{2,}\.)[0-9A-Za-z]{2,4}$',$Correo))
		return $Correo;
	else
		return "Correo no valido";
}


//OBSOLETA, con el calendario de jQuery ya no es necesario validar las fechas

// ----------------------------------------------
// Función: Validar_Fecha
// Return: Fecha separado con guines en caso de ser correcta, de lo contrario leyenda de "Fecha incorrecta"
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: -, - -
// ----------------------------------------------	
function Validar_Fecha($dia,$mes,$año)
{
 	if(checkdate($mes,$dia,$año))
		return $dia.'-'.$mes.'-'.$año;
	else
		return "Fecha incorrecta";
}


// ----------------------------------------------
// Función: Validar_RFC
// Return: La misma cadena en caso de ser correcta, de lo contrario la leyenda "RFC no valido"
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: -, - -
// ----------------------------------------------	
function Validar_RFC($cadena)
{
	$cadena=strtoupper($cadena);
	$letra=substr($cadena,0,4);
	$digito=substr($cadena,4,6);
		
	if(ereg("[A-Z][AEIOU][A-Z]{2}",$letra) && Validar_Fecha (substr($digito,4,2), substr($digito,2,2), "19".substr($digito,0,2)) != "Fecha incorrecta" && strlen($cadena)==10)
		return $cadena;
	else
		return "RFC no valido";
}


// ----------------------------------------------
// Función: Validar_RFCH
// Return: La misma cadena en caso de ser correcta, de lo contrario la leyenda "RFC no valido"
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: -, - -
// Observaciones: Valida RFC con Homoclave
// ----------------------------------------------
function Validar_RFCH($cadena)
{
	$cadena=strtoupper($cadena);
	$digito=substr($cadena,4,6);

	if(ereg("[A-Z][AEIOU][A-Z]{2}[0-9]{2}[01][0-9][0123][0-9][0-9A-Z]{3}",$cadena) && Validar_Fecha ( substr($digito,4,2), substr($digito,2,2), "19".substr($digito,0,2)) != "Fecha incorrecta" && strlen($cadena)==13) 
		return $cadena;			
	else
		return "RFC no valido";			
}



function Validar_CURP($cadena)
	{
	$cadena=strtoupper($cadena);
	$digito=substr($cadena,4,6);

	if(ereg("[A-Z][AEIOU][A-Z]{2}[0-9]{2}[01][0-9][0123][0-9][HM][A-Z]{2}[BCDFGHJKLMNÑPQRSTVWXYZ]{3}[0-9A-Z]{2}",$cadena) && Validar_Fecha ( substr($digito,4,2), substr($digito,2,2), "19".substr($digito,0,2)) != "Fecha incorrecta" && strlen($cadena)==18) 
			return $cadena;			
		else
			return "CURP no valido";			
	}

function Insertar($palabra)
	{
		$palabra = trim(strtoupper($palabra));
		return $palabra;
	}

function Fecha_Cadena($Fecha)	//aaaa-mm-dd
	{
		if ($Fecha != "")
			{
				$dia = preg_replace("/0/","",substr($Fecha,8,1)) . substr($Fecha,9,1);	//Para dejar el dia de un solo digito y no incluya el 0 si es menor a 10
				$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
				$mes = $meses[preg_replace("/0/","",substr($Fecha,5,1)) . substr($Fecha,6,1)];	//Para dejar el mes de un solo digito y no incluya el 0 si es menor a 10
				$año = substr($Fecha,0,4);
		
				return $Fecha = $dia ." de ". $mes ." de ".$año;
			}
		else
			{
				return $Fecha = "";
			}
			
	}
	
function Fecha_Cadena_2($Fecha)	//aaaa-mm-dd
	{
		$dia = preg_replace("//","",substr($Fecha,8,1)) . substr($Fecha,9,1);	//Para dejar el dia de un solo digito y no incluya el 0 si es menor a 10
		$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$mes = preg_replace("//","",substr($Fecha,5,1)) . substr($Fecha,6,1);	//Para dejar el mes de un solo digito y no incluya el 0 si es menor a 10
		$año = substr($Fecha,0,4);

		return $Fecha = $dia ."/". $mes ."/".$año;
	}
	
//function Fecha_Cadena_Invertida($Fecha)	//dd-mm-aaaa
//	{
//		$dia = preg_replace("/0/","",substr($Fecha,0,1)) . substr($Fecha,1,1);	//Para dejar el dia de un solo digito y no incluya el 0 si es menor a 10
//		$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
//		$mes = $meses[preg_replace("/0/","",substr($Fecha,3,1)) . substr($Fecha,4,1)];	//Para dejar el mes de un solo digito y no incluya el 0 si es menor a 10
//		$año = substr($Fecha,6,4);
//
//		return $Fecha = $dia ." de ". $mes ." de ".$año;
//	}

function Mes_Cadena($Fecha)
	{
		$meses = array (1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
		$mes = $meses[preg_replace("/0/","",substr($Fecha,5,1)) . substr($Fecha,6,1)];	//Para dejar el mes de un solo digito y no incluya el 0 si es menor a 10

		return $Fecha = $mes;
	}

function Mes_Valor($Mes) //Recibe el nombre del mes y regresa el número correspondiente
	{
		$meses = array ("ENERO"=>1, "FEBRERO" => 2, "MARZO" => 3, "ABRIL" => 4, "MAYO" => 5, "JUNIO" => 6, "JULIO" => 7, "AGOSTO" => 8, "SEPTIEMBRE" => 9, "OCTUBRE" => 10, "NOVIEMBRE" => 11, "DICIEMBRE" => 12);
		$mes = $meses[$Mes];

		return $Mes = $mes;
	}

function Mes_Cadena_2($Mes)	//Recibe el numero del mes y regresa la cadena del mes
	{
		$meses = array (1 => "ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
		$mes = $meses[$Mes];

		return $Mes = $mes;
	}

function Dia_Numero($Fecha)
	{
		$dia = preg_replace("/0/","",substr($Fecha,8,1)) . substr($Fecha,9,1);	//Para dejar el día de un solo digito y no incluya el 0 si es menor a 10

		return $dia;
	}

function Mes_Numero($Fecha)
	{
		$mes = preg_replace("/0/","",substr($Fecha,5,1)) . substr($Fecha,6,1);	//Para dejar el mes de un solo digito y no incluya el 0 si es menor a 10

		return $mes;
	}
	
function Ano_Numero($Fecha)
	{
		$año = substr($Fecha,0,4);

		return $año;
	}

function Meses_Recargo($Fecha_Inicio, $Fecha_Fin)
	{
		$dia_inicio = Dia_Numero($Fecha_Inicio);
		$dia_fin = Dia_Numero($Fecha_Fin);
		
		$mes_inicio = Mes_Numero($Fecha_Inicio);
		$mes_fin = Mes_Numero($Fecha_Fin);
		
		//Si el mes de inicio fuera Septiembre 2010 (mes 9) y la fecha fin Mayo 2011 (mes 5), es decir de años diferentes, el mes fin es menor que el mes inicio
		//trayendo como problema 5 - 9 = -4, para corregirlo se suman los meses 9 + (12 - 9) + 5, dando como resultado mes inicio = 9 y mes fin = 17, por lo tanto
		//$meses_recargo = $mes_fin - $mes_inicio = 17 - 9 = 8;
		if ($mes_fin < $mes_inicio) $mes_fin = $mes_inicio + (12 - $mes_inicio) + $mes_fin;
		
		if ($mes_fin >= $mes_inicio) $meses_recargo = $mes_fin - $mes_inicio;
		if ($dia_fin >= $dia_inicio) $dias_recargo = $dia_fin - $dia_inicio;
		if ($dias_recargo > 0) $meses_recargo = $meses_recargo + 1;
		
		return $meses_recargo;
	}
	
function Meses_Recargo_2($Fecha_Inicio, $Fecha_Fin)
	{		
		
		$dia_inicio = Dia_Numero($Fecha_Inicio);
		$dia_fin = Dia_Numero($Fecha_Fin);
		
		$mes_inicio = Mes_Numero($Fecha_Inicio);
		$mes_fin = Mes_Numero($Fecha_Fin);
		
		if ($mes_fin >= $mes_inicio) {
				$meses_recargo = $mes_fin - $mes_inicio;
				if ($dia_fin >= $dia_inicio) $dias_recargo = $dia_fin - $dia_inicio;
				if ($dias_recargo > 0) $meses_recargo = $meses_recargo + 1;
		}else{
			$meses_recargo=0;	
		}

		return $meses_recargo;
	}
	
function Fecha($Fecha)
	{
		$dia = substr($Fecha,8,2);
		$mes = substr($Fecha,5,2);
		$año = substr($Fecha,0,4);

		return $Fecha = $dia ."-". $mes ."-".$año;
	}

function Fecha_Corte($Fecha)
	{
		$dia = substr($Fecha,8,2);
		$mes = substr($Fecha,5,2);
		$año = substr($Fecha,2,2);

		return $Fecha = $año.$mes.$dia;
	}
	
function Fecha_Corte_Invertida($Fecha)
	{
		$año = "20".substr($Fecha,0,2);
		$mes = substr($Fecha,2,2);
		$dia = substr($Fecha,4,2);
		
		return $Fecha = $año ."-". $mes ."-". $dia;
	}

function Semestre($Semestre)
	{
		switch ($Semestre) 
			{
				case 1:
					$Semestre = "PRIMERO";
					break;
				case 2:
					$Semestre = "SEGUNDO";
					break;
				case 3:
					$Semestre = "TERCERO";
					break;
				case 4:
					$Semestre = "CUARTO";
					break;
				case 5:
					$Semestre = "QUINTO";
					break;
				case 6:
					$Semestre = "SEXTO";
					break;
				case 7:
					$Semestre = "SÉPTIMO";
					break;
				case 8:
					$Semestre = "OCTAVO";
					break;
				case 9:
					$Semestre = "NOVENO";
					break;
				default:
					$Semestre = "";
			}
		return $Semestre;
	}


function Semestre_Carta($Semestre)
	{
		switch ($Semestre) 
			{
				case 1:
					$Semestre = "PRIMER";
					break;
				case 2:
					$Semestre = "SEGUNDO";
					break;
				case 3:
					$Semestre = "TERCER";
					break;
				case 4:
					$Semestre = "CUARTO";
					break;
				case 5:
					$Semestre = "QUINTO";
					break;
				case 6:
					$Semestre = "SEXTO";
					break;
				case 7:
					$Semestre = "SÉPTIMO";
					break;
				case 8:
					$Semestre = "OCTAVO";
					break;
				case 9:
					$Semestre = "NOVENO";
					break;
				default:
					$Semestre = "";
			}
		return $Semestre;
	}

function Generacion($Generacion)
	{
		return $Generacion . "ª";
	}

function Unidad($Calificacion)
	{
		switch ($Calificacion) 
			{
				case "0":
					$Unidad = "cero";
					break;
				case "1":
					$Unidad = "uno";
					break;
				case "2":
					$Unidad = "dos";
					break;
				case "3":
					$Unidad = "tres";
					break;
				case "4":
					$Unidad = "cuatro";
					break;
				case "5":
					$Unidad = "cinco";
					break;
				case "6":
					$Unidad = "seis";
					break;
				case "7":
					$Unidad = "siete";
					break;
				case "8":
					$Unidad = "ocho";
					break;
				case "9":
					$Unidad = "nueve";
					break;
				case "10":
					$Unidad = "diez";
					break;
				case ".":
					$Unidad = "punto";
					break;
				case "NP":
					$Unidad = "no presento";
					break;
				default:
					$Unidad = "";
			}
		return $Unidad;
	}

function Decimales($Decena)
	{
		if ($Decena >= 90 && $Decena <= 99)
			{
				$Decimales = "noventa";
				if ($Decena > 90)
					$Decimales = $Decimales." y ".(Unidad($Decena - 90));
			}
		else if ($Decena >= 80 && $Decena <= 89)
			{
				$Decimales = "ochenta";
				if ($Decena > 80)
					$Decimales = $Decimales." y ".(Unidad($Decena - 80));
			}
		else if ($Decena >= 70 && $Decena <= 79)
			{
				$Decimales = "setenta";
				if ($Decena > 70)
					$Decimales = $Decimales." y ".(Unidad($Decena - 70));
			}
		else if ($Decena >= 60 && $Decena <= 69)
			{
				$Decimales = "sesenta";
				if ($Decena > 60)
					$Decimales = $Decimales." y ".(Unidad($Decena - 60));
			}
		else if ($Decena >= 50 && $Decena <= 59)
			{
				$Decimales = "cincuenta";
				if ($Decena > 50)
					$Decimales = $Decimales." y ".(Unidad($Decena - 50));
			}
		else if ($Decena >= 40 && $Decena <= 49)
			{
				$Decimales = "cuarenta";
				if ($Decena > 40)
					$Decimales = $Decimales." y ".(Unidad($Decena - 40));
			}
		else if ($Decena >= 30 && $Decena <= 39)
			{
				$Decimales = "treinta";
				if ($Decena > 30)
					$Decimales = $Decimales." y ".(Unidad($Decena - 30));
			}
		else if ($Decena >= 20 && $Decena <= 29)
			{
				if ($Decena == 20)
					$Decimales = "veinte";
				else
					$Decimales = "veinti".(Unidad($Decena - 20));
			}
		else if ($Decena >= 10 && $Decena <= 19)
			{
				switch ($Decena)
					{
						case 10:
							$Decimales = "diez";
							break;
						case 11:
							$Decimales = "once";
							break;
						case 12:
							$Decimales = "doce";
							break;
						case 13:
							$Decimales = "trece";
							break;
						case 14:
							$Decimales = "catorce";
							break;
						case 15:
							$Decimales = "quince";
							break;
						case 16:
							$Decimales = "dieciseis";
							break;
						case 17:
							$Decimales = "diecisiete";
							break;
						case 18:
							$Decimales = "dieciocho";
							break;
						case 19:
							$Decimales = "diecinueve";
							break;
					} 
			}
		else if ($Decena >= 0 && $Decena <= 9)
			{
				if ($Decena == 0)
					$Decimales = "cero";
				else
					$Decimales = "cero ".Unidad($Decena);
			}
		else
			$Decimales = Unidad($Decena);
		
		return $Decimales;
	}

function Calificacion_Letra($Numero)
	{
		$Letra = Decimales($Numero);
		return $Letra;
	}

// ----------------------------------------------
// Función: Hora
// Parámetros: Hora Fin y Hora Inicio
// Return: Cantidad de Hora y Minutos en el Intervalo
// Autor: Abraham
// Fecha de Actualización: Marzo, 15 2016
// Observaciones: Se quita la función split (obsoleta en php 7) se sustituye por explode
// ----------------------------------------------
function Hora($Hora_Fin, $Hora_Inicio)
	{
		$Hora_Fin = explode(":",$Hora_Fin);	//explode divide la cadena en elementos de un array según una expresión regular (separados por los ":")
		$Hora_Inicio = explode(":",$Hora_Inicio);
		
		$Horas = (int)$Hora_Fin[0] - (int)$Hora_Inicio[0];
		$Minutos = (int)$Hora_Fin[1] - (int)$Hora_Inicio[1];
		
		//Si al hacer la resta de minutos dieran números negativos se tiene que quitar 1 unidad a las horas y convertirla a minutos (60 minutos) para 
		//sumarla a los minutos negativos y compensar, por ejemplo: Hora_Fin 17:30, Hora_Inicio 15:45, al hacer la resta da 2 horas y -15 minutos, 
		//lo cual es incorrecto, el resultado debe ser 1:45 (2 horas - 1 hora = 1 hora, -15 minutos + 60 minutos = 45 minutos)		
		if ($Minutos < 0) {
				$Horas = $Horas - 1;
				$Minutos = $Minutos + 60;
		}
		else if ($Minutos >= 0 && $Minutos < 10) $Minutos = "0" . $Minutos;
		
		return $Horas . ":" . $Minutos;
	}

function Hora_Numero($Hora)
	{
		$Hora = explode(":",$Hora);	//explode divide la cadena en elementos de un array según una expresión regular (separados por los ":")
		
		$Horas = (int)$Hora[0];
		$Minutos = (int)$Hora[1];
		
		$Minutos = ($Minutos % 60) / 60;
		
		$Hora_Numero = $Horas + $Minutos;
		
		return $Hora_Numero;
	}

function Horario_Uno($Hora_Inicio)
	{
		$Hora = substr($Hora_Inicio,0,5);
		
		return $Hora;
	}

function Horario_Dos($Hora_Inicio, $Hora_Fin)
	{
		if ($Hora_Inicio != "00:00:00" && $Hora_Fin != "00:00:00")
			$Hora = substr($Hora_Inicio,0,5) ." - ". substr($Hora_Fin,0,5);
		else 
			$Hora = "";
			
		return $Hora;
	}

function Recorta($Palabra_1, $Tamaño, $Corte)
	{
		$Palabra_2 = "";
		
		if (strlen($Palabra_1) > $Tamaño)
			 {
 			 $breakpoint = strpos($Palabra_1,$Corte, $Tamaño);
 			 if ($breakpoint != "0")
			 	{
			 	$Palabra_2 = substr ($Palabra_1, ($breakpoint+1));
				$Palabra_1 = substr ($Palabra_1, 0, $breakpoint);
			 	}		 
			 }	
			
			$Arreglo = array(0=>$Palabra_1,1=>$Palabra_2); 
			return $Arreglo;
	}
	
function truncar($numero, $decimales)
    {
		$parte = explode (".", $numero);
	
		if ($parte[1] != "") $despues_coma = ".".substr($parte[1], 0, $decimales);
		else $despues_coma = "";
		
		return $parte[0].$despues_coma;
    }

function Tipo_Periodo($id_Carrera_Tipo)
    {
		if ($id_Carrera_Tipo == 1) $Tipo_Periodo = "Semestre";
		else if ($id_Carrera_Tipo == 2 || $id_Carrera_Tipo == 3) $Tipo_Periodo = "Trimestre";
		
		return $Tipo_Periodo;
    }
	
	
function Periodo($id_Periodo)
	{
		switch ($id_Periodo)
			{
				case 1:
					$id_Periodo = "PRIMER PARCIAL";
					break;
				case 2:
					$id_Periodo = "SEGUNDO PARCIAL";
					break;
				case 3:
					$id_Periodo = "FINAL";
					break;
				default:
					$id_Periodo = "";
			}
		return $id_Periodo;
	}
	
	



//funciones de horarios

function RestarHoras($horaini,$horafin)
{
	$horai=substr($horaini,0,2);
	$mini=substr($horaini,3,2);
	$segi=substr($horaini,6,2);

	$horaf=substr($horafin,0,2);
	$minf=substr($horafin,3,2);
	$segf=substr($horafin,6,2);

	$ini=((($horai*60)*60)+($mini*60)+$segi);
	$fin=((($horaf*60)*60)+($minf*60)+$segf);

	$dif=$fin-$ini;

	$difh=floor($dif/3600);
	$difm=floor(($dif-($difh*3600))/60);
	$difs=$dif-($difm*60)-($difh*3600);
	return date("H:i:s",mktime($difh,$difm,$difs));
}



function SumarHoras_($horaini,$horafin)
{
	$horai=substr($horaini,0,2);
	$mini=substr($horaini,3,2);
	$segi=substr($horaini,6,2);

	$horaf=substr($horafin,0,2);
	$minf=substr($horafin,3,2);
	$segf=substr($horafin,6,2);

	$ini=((($horai*60)*60)+($mini*60)+$segi);
	$fin=((($horaf*60)*60)+($minf*60)+$segf);

	$dif=$fin+$ini;

	$difh=floor($dif/3600);
	$difm=floor(($dif-($difh*3600))/60);
	$difs=$dif-($difm*60)-($difh*3600);
	return date("H:i:s",mktime($difh,$difm,$difs));
}


function SumarHoras($Hora_1,$Hora_2)
{
$Corte = ":";	

/*
echo $Hora_1."<BR>";
echo $Hora_2."<BR>";
*/

//Obtenemos Valores de Hora, Min y Seg de la primera variable
$breakpoint = strpos($Hora_1,$Corte, 0);
$Hora_H_1 = substr ($Hora_1, 0, $breakpoint);
$Hora_1 = substr ($Hora_1, ($breakpoint+1));
$breakpoint = strpos($Hora_1,$Corte, 0);
$Hora_M_1 = substr ($Hora_1, 0, $breakpoint);
$Hora_1 = substr ($Hora_1, ($breakpoint+1));
$Hora_S_1 = $Hora_1;
//Obtenemos Valores de Hora, Min y Seg de la segunra variable
$breakpoint = strpos($Hora_2,$Corte, 0);
$Hora_H_2 = substr ($Hora_2, 0, $breakpoint);
$Hora_2 = substr ($Hora_2, ($breakpoint+1));
$breakpoint = strpos($Hora_2,$Corte, 0);
$Hora_M_2 = substr ($Hora_2, 0, $breakpoint);
$Hora_2 = substr ($Hora_2, ($breakpoint+1));
$Hora_S_2 = $Hora_2;

//Se suma por separado todo


//Suma de Segundos
$Hora_S_F = $Hora_S_1 + $Hora_S_2;

if($Hora_S_F>=60)
	{
	$Hora_S_F=$Hora_S_F-60;
	$Hora_M_F=1;                      //Acarreo	
	}

if($Hora_S_F<10)
	$Hora_S_F = "0".$Hora_S_F;
	
//Suma de Minutos	
$Hora_M_F = $Hora_M_F + $Hora_M_1 + $Hora_M_2;

if($Hora_M_F>=60)
	{
	$Hora_M_F=$Hora_M_F-60;
	$Hora_H_F=1;                      //Acarreo	
	}

if($Hora_M_F<10)
	$Hora_M_F = "0".$Hora_M_F;

//suma de Horas

$Hora_H_F = $Hora_H_F + $Hora_H_1 + $Hora_H_2;

if($Hora_H_F<10)
	$Hora_H_F = "0".$Hora_H_F;
	
return $Hora_H_F.":".$Hora_M_F.":".$Hora_S_F;

}

	
	


function Tipo_Carrera($entero)
{
switch ($entero)
	{
		case 1:
			$entero = "LICENCIATURA";
			break;
		case 2:
			$entero = "";
			break;
		case 3:
			$entero = "";
			break;
	} 
return $entero;
}	

function Tipo_Carrera2($entero)
{
switch ($entero)
	{
		case 1:
			$entero = "LICENCIATURA";
			break;
		case 2:
			$entero = "ESPECIALIDAD";
			break;
		case 3:
			$entero = "MAESTRÍA";
			break;
	} 
return $entero;
}	

function Hora_Fraccion($Hora)
	{
	$Corte = ":";	
	//Obtenemos Valores de Hora, Min y Seg de la primera variable
	$breakpoint = strpos($Hora,$Corte, 0);
	$Hora_H = substr ($Hora, 0, $breakpoint);
	$Hora = substr ($Hora, $breakpoint+1);
	$breakpoint = strpos($Hora,$Corte, 0);
	$Hora_M = substr ($Hora, 0, $breakpoint);
	$Hora_S = substr ($Hora, $breakpoint+1);

	$Fraccion_S = $Hora_S/60;
	$Fraccion_M =  round(($Hora_M+$Fraccion_S)/60, 2);
	
	$Hora_H = round($Hora_H+$Fraccion_M, 2);
	return $Hora_H;
	}






// ----------------------------------------------
// Función: Edad
// Parámetros: Fecha de nacimiento
// Return: La edad
// Archivo Origen: Funciones.php
// Autor: Ing. Julio César Morales Crispín
// Fecha de Actualización: Diciembre, 09 2016
// ----------------------------------------------
function Edad($Fecha_Nacimiento)
	{
		$año = date("Y",strtotime($Fecha_Nacimiento));
		$mes = date("m",strtotime($Fecha_Nacimiento));
		$dia = date("d",strtotime($Fecha_Nacimiento));
		
		$años = date("Y") - $año;
		
		if(date("m") - $mes > 0){
		}elseif(date("m") - $mes == 0){
			if(date("d") - $dia < 0){
				$años = $años - 1;
			}
		}else{
			$años = $años-1;
		}
		
		return $años;
	}
	



//FUNCIÓN DE CONVERSIÓN DE NUMEROS A LETRAS
//Máxima cifra soportada: 18 dígitos con 2 decimales: 999,999,999,999,999,999.99 

function Convertir_A_Letras($Numero)
	{ 
		$array_letras = array(0 => "Cero", 1 => "UN", "DOS", "TRES", "CUATRO", "CINCO", "SEIS", "SIETE", "OCHO", "NUEVE", "DIEZ", "ONCE", "DOCE", "TRECE", "CATORCE", "QUINCE", "DIECISEIS", "DIECISIETE", "DIECIOCHO", "DIECINUEVE", "VEINTI", 30 => "TREINTA", 40 => "CUARENTA", 50 => "CINCUENTA", 60 => "SESENTA", 70 => "SETENTA", 80 => "OCHENTA", 90 => "NOVENTA", 100 => "CIENTO", 200 => "DOSCIENTOS", 300 => "TRESCIENTOS", 400 => "CUATROCIENTOS", 500 => "QUINIENTOS", 600 => "SEISCIENTOS", 700 => "SETECIENTOS", 800 => "OCHOCIENTOS", 900 => "NOVECIENTOS");
		
		$Numero = trim($Numero);
		$longitud = strlen($Numero);
		$posicion_punto = strpos($Numero, ".");
		$auxiliar_entero = $Numero;
		$decimales = "00";
		
		if ($posicion_punto > 0)
			{
				$auxiliar_entero = substr($Numero, 0, $posicion_punto); // obtengo el entero de la cifra a covertir
				$decimales = substr($Numero."00", $posicion_punto + 1, 2); // obtengo los valores decimales
			}
		
		$auxiliar = str_pad($auxiliar_entero, 18, " ", STR_PAD_LEFT); // ajusto la longitud de la cifra, para que sea divisible por centenas de miles (grupos de 6)
		$cadena = "";
		
		for($i = 0; $i < 3; $i++)
			{
				$aux = substr($auxiliar, $i * 6, 6);
				$inicio = 0; $limite = 6; // inicializo el contador de centenas xi y establezco el límite a 6 dígitos en la parte entera
				$salir = true; // bandera para controlar el ciclo del While
				
				while ($salir)
					{
						if ($inicio == $limite) // si ya llegó al límite máximo de enteros
							{
								break; // termina el ciclo
							}
				
						$tres_digitos = ($limite - $inicio) * -1; // comienzo con los tres primeros digitos de la cifra, comenzando por la izquierda
						$aux = substr($aux, $tres_digitos, abs($tres_digitos)); // obtengo la centena (los tres dígitos)
						
						for ($j = 1; $j < 4; $j++) // ciclo para revisar centenas, decenas y unidades, en ese orden
							{
								switch ($j) 
									{
										case 1: // Revisa las centenas
		
											if (substr($aux, 0, 3) > 99) // Verifica que la centenas sea mayor a 99
												{
													$buscar = $array_letras[substr($aux, 0, 3)]; // busco si la centena es número redondo (100, 200, 300, 400, etc..)
													if ($buscar)
														{
															$sufijo = Sufijo($aux); // devuelve el sufijo correspondiente (Millón, Millones, Mil o nada)
															if (substr($aux, 0, 3) == 100) 
																$cadena = " ".$cadena." CIEN ".$sufijo;
															else
																$cadena = " ".$cadena." ".$buscar." ".$sufijo;
															$j = 3; // la centena fue redonda, entonces termino el ciclo del for y ya no reviso decenas ni unidades
														}
													else // entra aquí si la centena no fue numero redondo (101, 253, 120, 980, etc.)
														{
															$buscar = $array_letras[substr($aux, 0, 1) * 100]; // toma el primer caracter de la centena y lo multiplica por cien y lo busca en el arreglo (para que busque 100,200,300, etc)
															$cadena = " ".$cadena." ".$buscar;
														}
												}
											break;
										case 2: // Revisa las decenas (con la misma lógica que las centenas)
		
											if (substr($aux, 1, 2) > 9) // Verifica que la decena sea mayor a 9
												{
													$buscar = $array_letras[substr($aux, 1, 2)];
													if ($buscar)
														{
															$sufijo = Sufijo($aux);
															if (substr($aux, 1, 2) == 20)
																$cadena = " ".$cadena." VEINTE ".$sufijo;
															else
																$cadena = " ".$cadena." ".$buscar." ".$sufijo;
															$j = 3;
														}
													else
														{
															$buscar = $array_letras[substr($aux, 1, 1) * 10];
															if (substr($aux, 1, 1) * 10 == 20)
																$cadena = " ".$cadena." ".$buscar;
															else	
																$cadena = " ".$cadena." ".$buscar." Y ";
														}
												}
											break;
										case 3: // Revisa las unidades
		
											if (substr($aux, 2, 1) > 0) // Verifica que la unidad sea mayor a cero
												{
													$buscar = $array_letras[substr($aux, 2, 1)]; // obtengo directamente el valor de la unidad (del uno al nueve)
													$sufijo = Sufijo($aux);
													$cadena = " ".$cadena." ".$buscar." ".$sufijo;
												}
											break;
									}
							}
						$inicio = $inicio + 3;
					}
		
				if (substr($cadena, -6, 6) == "MILLON") // Si la cadena obtenida termina en MILLON, entonces le agrega al fina la palabra DE
					$cadena.= " DE";
					
				if (substr($cadena, -8, 8) == "MILLONES") // Si la cadena obtenida en MILLONES, entoncea le agrega al fina la palabra DE
					$cadena.= " DE";
				
				// ----------- esta línea la puedes cambiar de acuerdo a tus necesidades o a tu país -------
				if (trim($aux) != "")
					{
						switch ($i)
							{
								case 0:
									if (trim(substr($auxiliar, $i * 6, 6)) == "1")
										$cadena.= "UN BILLÓN ";
									else
										$cadena.= " BILLONES ";
									break;
								case 1:
									if (trim(substr($auxiliar, $i * 6, 6)) == "1")
										$cadena.= "UN MILLÓN ";
									else
										$cadena.= " MILLONES ";
									break;
								case 2:
									if ($Numero < 1 )
										$cadena = "CERO PESOS ".$decimales."/100 M.N.";
									if ($Numero >= 1 && $Numero < 2)
										$cadena = "UN PESO ".$decimales."/100 M.N. ";
									if ($Numero >= 2)
										$cadena.= " PESOS ".$decimales."/100 M.N. ";
									break;
							}
					}
				
				//En este caso, para México, se usa esta leyenda     ----------------
				$cadena = str_replace("VEINTI ", "VEINTI", $cadena); // quito el espacio para el VEINTI, para que quede: VEINTICUATRO, VEINTIUN, VEINTIDOS, etc
				$cadena = str_replace("  ", " ", $cadena); // quito espacios dobles
				$cadena = str_replace("UN UN", "UN", $cadena); // quito la duplicidad
				$cadena = str_replace("  ", " ", $cadena); // quito espacios dobles
				$cadena = str_replace("BILLON MILLONES", "BILLON", $cadena); // corrijo la leyenda
				$cadena = str_replace("BILLONES MILLONES", "BILLONES", $cadena); // corrijo la leyenda
			}
			return trim($cadena);
	}

//Esta función regresa un sufijo para la cifra
function Sufijo($cantidad)
	{
		$cantidad = trim($cantidad);
		$strlen = strlen($cantidad);
		
		if ($strlen == 1 || $strlen == 2 || $strlen == 3)
			$sufijo = "";
		
		if ($strlen == 4 || $strlen == 5 || $strlen == 6)
			$sufijo = "MIL";
		
		return $sufijo;
	}

function Redondeo($importe)
	{
		$cantidad = number_format($importe,2,'.','');	//Formateamos el numero con 2 decimales: 7896.00, 5786.45
		$decimales = substr($cantidad,-2);	//Obtenemos los decimales
		
		if ($decimales < 50) return floor($importe);	//Redondear fracciones hacia abajo
		else return ceil($importe);	//Redondear fracciones hacia arriba
	}

/*INICIAN FUNCIONES PARA GENERAR LA LINEA DE CAPTURA*/
function Multiplicar_Matrices($a, $b)
	{
		foreach ($a as $key => $valor)
			{
				$resultado[] = $a[$key] * $b[$key];
			}
		
		return $resultado;
	}

function Fecha_Limite_Pago($Fecha)
	{
		$año = substr($Fecha,0,4);
		$mes = substr($Fecha,5,2);
		$dia = substr($Fecha,8,2);
		
		$x = ($año - 2013) * 372;
		$y = ($mes - 1) * 31;
		$z = ($dia - 1);
		
		$FFFF = $x + $y + $z;
		
		if (strlen($FFFF) <= 3) $FFFF = "0".$FFFF;
		
		return $FFFF;
	}
	
function Importe($Cantidad)
	{
		$ponderadores = array(7, 3, 1);				//Ver manual Banamex
		$numero = str_replace(".","",$Cantidad);	//Quitando el punto a la cantidad
		$separador = 3;								//Separando el numero en bloques de 3
		$longitud = strlen($numero);				//Midiendo la longitud
		$invertido = strrev($numero);				//Inviertiendo el numero
		
		for($i = 0; $i < $longitud; $i += $separador)
			{
				$digitos = substr($invertido, $i, $separador);
				$matriz = array($digitos[0], $digitos[1], $digitos[2]);
				$suma = array_sum(Multiplicar_Matrices($matriz,$ponderadores));
				$total = $total + $suma;
				$residuo = $total % 10;
				
				$D = $residuo;
			}
		
		return $D;
	}
	
function Digitos_Globales_Validacion($Cantidad)
	{
		$ponderadores = array(11, 13, 17, 19, 23);	//Ver manual Banamex
		$numero = str_replace(" ","",$Cantidad);	//Quitando los espacios a la linea de captura a la cantidad
		$separador = 5;								//Separando el numero en bloques de 5
		$longitud = strlen($numero);				//Midiendo la longitud
		$invertido = strrev($numero);				//Inviertiendo el numero
		
		for($i = 0; $i < $longitud; $i += $separador)
			{
				$digitos = substr($invertido, $i, $separador);
				$matriz = array($digitos[0], $digitos[1], $digitos[2], $digitos[3], $digitos[4]);
				$suma = array_sum(Multiplicar_Matrices($matriz,$ponderadores));
				$total = $total + $suma;
				$residuo = ($total % 97) + 1;
				
				if (strlen($residuo) < 2) $GG = "0".$residuo;
				else $GG = $residuo;
			}
		
		return $GG;
	}
/*TERMINAN FUNCIONES PARA GENERAR LA LINEA DE CAPTURA*/

function Referencia_Mes($Referencia)
	{
		$mes = preg_replace("/0/","",substr($Referencia,2,1)) . substr($Referencia,3,1);	//Para dejar la referencia de un solo digito y no incluya el 0 si es menor a 10

		return $mes;
	}
	
function Fecha_Tip($Fecha)	//Fecha en formato 250214 y regresa 2014-02-25
	{
		$dia = substr($Fecha,0,2);
		$mes = substr($Fecha,2,2);
		$año = "20".substr($Fecha,4,2);
		
		$fecha_tip = $año ."-". $mes ."-". $dia;

		return $fecha_tip;
	}

//Funcion que suma n días, n meses, n años a la fecha inicio
//Divide la fecha dada con mktime a modo de arreglo, después le suma a cada parte de la fecha los valores que le enviamos.
function Sumar_Dias($fecha, $dia, $mes, $año)
	{
		$fecha_obtener = getdate(strtotime($fecha));
		//$fecha_resultado = date("m/d/Y", mktime(0, 0, 0, $fecha_obtener["mon"]+$mes, $fecha_obtener["mday"]+$dia, $fecha_obtener["year"]+$año));
		//$fecha_resultado = date("d/m/Y", mktime(0, 0, 0, $fecha_obtener["mon"]+$mes, $fecha_obtener["mday"]+$dia, $fecha_obtener["year"]+$año));
		$fecha_resultado = date("Y/m/d", mktime(0, 0, 0, $fecha_obtener["mon"]+$mes, $fecha_obtener["mday"]+$dia, $fecha_obtener["year"]+$año));
		return $fecha_resultado;
	}

function Cantidad($numero)
	{
		$cantidad = number_format($numero,2);
		return $cantidad;
	}

function meses_prueba($fech_ini,$fech_fin) {
   /*
   FELIPE DE JESUS SANTOS SALAZAR, LIFER35@HOTMAIL.COM
   SEP-2010

   ESTA FUNCION NOS REGRESA LA CANTIDAD DE MESES ENTRE 2 FECHAS

   EL FORMATO DE LAS VARIABLES DE ENTRADA $fech_ini Y $fech_fin ES YYYY-MM-DD

   $fech_ini TIENE QUE SER MENOR QUE $fech_fin

   ESTA FUNCION TAMBIEN SE PUEDE HACER CON LA FUNCION date

   SI ENCUENTRAS ALGUN ERROR FAVOR DE HACERMELO SABER

   ESPERO TE SEA DE UTILIDAD, POR FAVOR NO QUIERES ESTE COMENTARIO, GRACIAS

   */



   //SEPARO LOS VALORES DEL ANIO, MES Y DIA PARA LA FECHA INICIAL EN DIFERENTES
   //VARIABLES PARASU MEJOR MANEJO

    $fIni_yr=substr($fech_ini,0,4);
    $fIni_mon=substr($fech_ini,5,2);
    $fIni_day=substr($fech_ini,8,2);

   //SEPARO LOS VALORES DEL ANIO, MES Y DIA PARA LA FECHA FINAL EN DIFERENTES
   //VARIABLES PARASU MEJOR MANEJO
   $fFin_yr=substr($fech_fin,0,4);
    $fFin_mon=substr($fech_fin,5,2);
    $fFin_day=substr($fech_fin,8,2);

   $yr_dif=$fFin_yr - $fIni_yr;
   //echo "la diferencia de años es -> ".$yr_dif."<br>";
   //LA FUNCION strtotime NOS PERMITE COMPARAR CORRECTAMENTE LAS FECHAS
   //TAMBIEN ES UTIL CON LA FUNCION date
   if(strtotime($fech_ini) > strtotime($fech_fin)){
      //echo 'ERROR -> la fecha inicial es mayor a la fecha final <br>';
      return 0;
   }
   else
   {
       
	   if ($fFin_day >= $fIni_day) $dias_recargo = $fFin_day - $fIni_day;
	   
	   if($yr_dif == 1)
	   {
         $fIni_mon = 12 - $fIni_mon;
         $meses = $fFin_mon + $fIni_mon;
		 
		if ($dias_recargo > 0) $meses=$meses+1;
		 
         return $meses;
         //LA FUNCION utf8_encode NOS SIRVE PARA PODER MOSTRAR ACENTOS Y
         //CARACTERES RAROS
         //echo utf8_encode("la diferencia de meses con un año de diferencia es -> ".$meses."<br>");
      }
      else
	  {
          if($yr_dif == 0)
		  {
             $meses=$fFin_mon - $fIni_mon;
			 
			 if($meses==0)
			 {
				if($fFin_day>$fIni_day)
				{
					$meses=1;					
				}				
			 }
			 else
			 {
				if ($dias_recargo > 0) $meses=$meses+1;	
			 }
             return $meses;
            //echo utf8_encode("la diferencia de meses con cero años de diferencia es -> ".$meses.", donde el mes inicial es ".$fIni_mon.", el mes final es ".$fFin_mon."<br>");
         }
         else{
             if($yr_dif > 1){
               $fIni_mon = 12 - $fIni_mon;
               $meses = $fFin_mon + $fIni_mon + (($yr_dif - 1) * 12);
			   if ($dias_recargo > 0) $meses=$meses+1;
               return $meses;
               //echo utf8_encode("la diferencia de meses con mas de un año de diferencia es -> ".$meses."<br>");
            }
            else
               //echo "ERROR -> la fecha inicial es mayor a la fecha final <br>";
               return 0;
         }
      }
   }

}

function Promedio_Parcial($array_parcial)
	{
		if(is_array($array_parcial))
			{
				foreach($array_parcial as $valor)
					{
						if(is_numeric($valor)) $array_nuevo[++$indice] = $valor;
					}
				return @$promedio_parcial = array_sum($array_nuevo)/count($array_nuevo);
			}
	}
	
function Array_Extraordinario($array_final,$array_extraordinario)
	{
		if(is_array($array_final) && is_array($array_extraordinario))
			{
				foreach($array_final as $indice => $valor)
					{
						if ($array_extraordinario[$indice] >= (is_numeric($array_final[$indice])))
							$array_nuevo[$indice] = $array_extraordinario[$indice];
						else
							$array_nuevo[$indice] = $array_final[$indice];
					}
				return $array_nuevo;
			}
	}
	
function Backup_Tabla($tabla, $carpeta)
{
	$conexion = Conectar();
	
	$archivo = @fopen($carpeta, 'w+');
	
	if($archivo)
	{
		$sql_creacion_tabla = "SHOW CREATE TABLE ".$tabla;
		$resultado_creacion_tabla = mysql_query($sql_creacion_tabla, $conexion);
		
		$fila_creacion_tabla = @mysql_fetch_row($resultado_creacion_tabla);
		
		
		$cadena = $fila_creacion_tabla[1]."\n\n";
		
		$sql_tabla = "SELECT * FROM ".$tabla;
		$resultado_tabla = mysql_query($sql_tabla, $conexion);
		$campos_tabla = @mysql_num_fields($resultado_tabla);
		
		while($fila_tabla = @mysql_fetch_row($resultado_tabla))
		{
			$cadena .= "INSERT INTO ".$tabla." VALUES (";
			
			for($j=0; $j<$campos_tabla; $j++)
			{
				$cadena .= "'".$fila_tabla[$j]."'";
				if($j!=($campos_tabla-1))
					$cadena .= ",";				
			}
			$cadena .= ");\n";
		}
		
		fwrite($archivo, $cadena);
		fclose($archivo);
	}
}

function Becas_Disminucion($fecha_disminucion)
{
	$tabla = "becas_mes";
	$archivo = "../../CCYF/Respaldos/".$tabla."_".date("Ymd")."_".date("His")."_1.sql";

	Backup_Tabla($tabla,$archivo);
	
	$tabla = "becas_disminucion";
	$archivo = "../../CCYF/Respaldos/".$tabla."_".date("Ymd")."_".date("His")."_1.sql";

	Backup_Tabla($tabla,$archivo);
	
	$conexion = Conectar();
	
	$sql_fecha_limite = "SELECT * FROM fecha_limite_pago JOIN referencia USING (id_referencia) WHERE fecha_disminucion= '".$fecha_disminucion."'";
	$resultado_fecha_limite = mysql_query($sql_fecha_limite, $conexion);
	$fila_fecha_limite = @mysql_fetch_array($resultado_fecha_limite);
	
	$referencia = $fila_fecha_limite["id_referencia"];
	$id_mes = Mes_Valor($fila_fecha_limite["mes"]);
	$periodo = $fila_fecha_limite["periodo"];
	
	if($id_mes>9)
		$referencia_abono = "11".$id_mes;
	else
		$referencia_abono = "110".$id_mes;
		
	if($fila_fecha_limite["fecha_disminucion"]!="" && $fila_fecha_limite["fecha_disminucion"]!="0000-00-00")
	{
		$sql_ciclo_escolar = "SELECT * FROM ciclo_escolar WHERE fecha_inicio<='".$fecha_disminucion."' AND fecha_fin>='".$fecha_disminucion."'";
		$resultado_ciclo_escolar = mysql_query($sql_ciclo_escolar, $conexion);
		$fila_ciclo_escolar = @mysql_fetch_array($resultado_ciclo_escolar);
		
		$id_ciclo_escolar = $fila_ciclo_escolar["id_ciclo_escolar"];
		
		$sql_clave = "SELECT DISTINCT clave FROM proyecciones_licenciatura WHERE id_ciclo_escolar='".$id_ciclo_escolar."'";
		$resultado_clave = mysql_query($sql_clave, $conexion);
		
		$i=1;
		
		while($fila_clave = mysql_fetch_array($resultado_clave))
		{
			//Para cada clave verificar si no se encuentra dado de baja, para ello buscamos su registro de becas_mes
			
			$sql_becas_mes = "SELECT * FROM becas_mes WHERE clave='".$fila_clave["clave"]."' AND id_ciclo_escolar='".$id_ciclo_escolar."' AND periodo='".$periodo."'";
			$resultado_becas_mes = mysql_query($sql_becas_mes, $conexion);
			
			$fila_becas_mes = @mysql_fetch_array($resultado_becas_mes);
			
			if($fila_becas_mes["baja_oficial"]=='0000-00-00' || $fila_becas_mes["baja_oficial"]=='')
			{
				//Si el alumno no se encuetra dado de baja, verificamos que no cuente con beca de 0, Materias o 100% 
				
				if($fila_becas_mes["mes_".$id_mes]!="1 MAT" && $fila_becas_mes["mes_".$id_mes]!="2 MAT" && $fila_becas_mes["mes_".$id_mes]!="3 MAT" && $fila_becas_mes["mes_".$id_mes]!="0" && $fila_becas_mes["mes_".$id_mes]!="100" && $fila_becas_mes["mes_".$id_mes]!="EXTRA" && $fila_becas_mes["mes_".$id_mes]!="")
				{
					//Procedemos a buscar su pago de colegiatura del mes correspondiente y con fecha de corte menor o igual a la fecha de disminución
					
					$sql_tip = "SELECT * FROM tip WHERE clave = '".$fila_clave["clave"]."' AND periodo = '".$periodo."' AND (referencia = '".$referencia."' OR referencia = '".$referencia_abono."') AND fecha_corte <= '".Fecha_Corte($fila_fecha_limite["fecha_disminucion"])."'";
					
					//echo $sql_tip."<br>";
					
					$resultado_tip = mysql_query($sql_tip, $conexion);
					$fila_tip = @mysql_fetch_array($resultado_tip);
					$registro_tip = @mysql_num_rows ($resultado_tip);
					
					if($registro_tip <= 0)
					{
						//tenemos que determinar de cuanto será su disminución
						
						if($id_ciclo_escolar%2==0)
							$mes_final = 12;
						else
							$mes_final = 6;
						
						$sql_becas_disminucion = "SELECT * FROM becas_disminucion WHERE clave = '".$fila_clave["clave"]."' AND id_ciclo_escolar = '".$id_ciclo_escolar."' AND periodo = '".$periodo."' AND cancelado='NO'";
						
						$resultado_becas_disminucion = mysql_query($sql_becas_disminucion, $conexion);
						$registros_becas_disminucion = @mysql_num_rows($resultado_becas_disminucion);
						
						if($registros_becas_disminucion == 0)
							$disminucion = 5;
						if($registros_becas_disminucion == 1)
							$disminucion = 10;
						if($registros_becas_disminucion >= 2)
							$disminucion = $fila_becas_mes["mes_".$id_mes];
							
						if($disminucion<0)
							$disminucion=0;
						
						$sql_disminucion = "INSERT INTO becas_disminucion (id_ciclo_escolar, periodo, clave, id_mes, cancelado) VALUES ('".$id_ciclo_escolar."', '".$periodo."', '".$fila_clave["clave"]."', '".$id_mes."', 'NO')";
						
						$resultado_disminucion = mysql_query($sql_disminucion, $conexion);
						
						$beca_nueva = $fila_becas_mes["mes_".$id_mes]-$disminucion;
						
						if($beca_nueva < 0)
							$beca_nueva = 0;
						
						$mes_inicial = $id_mes+1;
						
						$cadena="";
						
						for($mes = $mes_inicial; $mes <= $mes_final; $mes++)
						{
							//$becas_mes[$mes] = $beca_nueva;
							if($mes == $mes_final)
								$cadena= $cadena." mes_".$mes." = '".$beca_nueva."'";
							else
								$cadena= $cadena." mes_".$mes." = '".$beca_nueva."',";
						}
						
						//echo $cadena."<br>";
						
						$sql_actualiza_becas = "UPDATE becas_mes SET ".$cadena." WHERE id_ciclo_escolar = '".$id_ciclo_escolar."' AND periodo = '".$periodo."' AND clave = '".$fila_clave["clave"]."'";
						
						$resultado_actualiza_becas = mysql_query($sql_actualiza_becas, $conexion);
						
					}					
				}
			}						
		}
	}
	
	$tabla = "becas_mes";
	$archivo = "../../CCYF/Respaldos/".$tabla."_".date("Ymd")."_".date("His")."_2.sql";

	Backup_Tabla($tabla,$archivo);
	
	$tabla = "becas_disminucion";
	$archivo = "../../CCYF/Respaldos/".$tabla."_".date("Ymd")."_".date("His")."_2.sql";

	Backup_Tabla($tabla,$archivo);
			
}


function recursive_array_replace($find, $replace, $array) {
    if (!is_array($array)) {
        return str_replace($find, $replace, $array);
    }
    $newArray = array();
    foreach ($array as $key => $value) {
        $newArray[$key] = recursive_array_replace($find, $replace, $value);
    }
    return $newArray;
}



function Bitacora_SIUP($tabla, $id_usuario, $ip, $archivo, $consulta, $error)
{
	$conexion = Conectar();
	mysqli_select_db($conexion,"bitacora_ssu");
	
	if(trim($error) != "")
	{
		$sql_bitacora = "INSERT INTO bitacora_ssu_errores (id_bitacora_siup, id_usuario, fecha, hora, archivo, consulta_sql, error) VALUES (
'".$id_usuario."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$ip."', '".$archivo."', '".mysqli_real_escape_string($conexion,$consulta)."','".mysqli_real_escape_string($conexion, $error)."');";
	}
	else
	{
		$sql_bitacora = "INSERT INTO bitacora_ssu (id_bitacora_siup, id_usuario, fecha, hora, archivo, consulta_sql, error) VALUES (
'".$id_usuario."', '".date("Y-m-d")."', '".date("H:i:s")."', '".$ip."', '".$archivo."', '".mysqli_real_escape_string($conexion,$consulta)."');";
	}
		
	mysqli_query($conexion, $sql_bitacora);
	mysqli_select_db($conexion, "siup7");
}
?>