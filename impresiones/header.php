<?php
/*
-- ==============================================================================
-- Empresa: 
-- Proyecto: 
-- Autor: 
-- Responsable: Ing.
-- Fecha de Creación: []
-- País: México
-- Objetivo: Funciones de la cabezera, pie de pagina para PDF
-- Última Modificación: []
-- Realizó: Ing. 
-- Observaciones:
-- ===============================================================================
*/
require '../librerias/fpdf/fpdf.php';
	
class PDF extends FPDF
   {
		function Header()
		{
			$this->Image('../imagenes/salle_pdf2.png',$x_celda_1+15,$y_celda,55);
	    	$this->Ln(5);  // Salto de línea
		}
		

	/******************** Pie de página **************************/
	function Footer()
	{
	  $fuente = 'Times';
	  $fuente_tamaño = 10;
	  $alto =4;
	    $this->SetY(-28);  // Posición: a 2,5 cm del final
	    $this->SetFont($fuente,'B',$fuente_tamaño);
	    $this->SetTextColor(0,0,0);
	    $this->cell(0,$alto,'Preparatoria La Salle del Pedregal',0,0,'R');
	    $this->SetY(-24);
	    $this->SetFont($fuente,'I',$fuente_tamaño);
	    $this->cell(0,$alto,'Av. Transmisiones 51 Col. Ex hacienda de',0,1,'R');
	    $this->SetY(-20);
	    $this->cell(0,$alto,utf8_decode('San Juan Huipulco, Tlalpan, México D.F.'),0,1,'R');
	    $this->SetY(-16);
	    $this->cell(0,$alto,utf8_decode('Tel.5673-3149 / 5673-1907'),0,1,'R');
	    $this->cell(149);
	    $this->SetFont($fuente,'I'.'U',$fuente_tamaño);
	    $this->cell(0,$alto-1,utf8_decode('www.preparatorialasalle.edu.mx'),0,0,'R');
	    $this->Ln(3);
	    $this->cell(140,0,'',1,0,'L');       //Celda vacia para dibujar la linea del footer.
		$this->Line(10, 269.8, 150, 269.8);  //se sobrepone una linea.
	}
   }
?>