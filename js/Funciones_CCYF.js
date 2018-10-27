//Funcion para impedir que el usuario de click derecho en la página para Internet Explorer
function clickIE4()
	{
		if (event.button==2) return false;
	}

//Funcion para impedir que el usuario de click derecho en la página para NetScape
function clickNS4(e)
	{
		if (document.layers||document.getElementById&&!document.all)
			if (e.which==2||e.which==3) return false;
	}

if (document.layers)
	{
		document.captureEvents(Event.MOUSEDOWN);
		document.onmousedown=clickNS4;
	}
else if (document.all&&!document.getElementById)
	{
		document.onmousedown=clickIE4;
	}
document.oncontextmenu=new Function("return false");

//Funcion que solo permite ingresar letras, es decir, no permite la entrada de numeros
function Solo_Letras()
	{ 
		var key=window.event.keyCode;
		if ((key > 0 && key < 32) || (key > 32 && key < 45) || (key > 46 && key < 65) || (key > 90 && key < 95) || (key > 122 && key < 193)) window.event.keyCode=0;
	}

//Funcion que solo permite ingresar numeros, es decir, no permite la entrada de letras
function Solo_Numeros()
	{ 
		var key=window.event.keyCode;
		if (key < 48 || key > 57) window.event.keyCode=0;
	}	

//Funcion que quita los espacios a la izquierda
function Left_Trim(Cadena)
	{	 
		while (Cadena.charAt(0) == " ")
		Cadena = Cadena.substr(1, Cadena.length - 1);	 
		return Cadena;	
	}	

//Funcion que quita los espacios a la derecha
function Right_Trim(Cadena)
	{	 
		while (Cadena.charAt(Cadena.length - 1) == " ")	  
		Cadena = Cadena.substr(0, Cadena.length - 1);	 
		return Cadena;	
	}	

//Funcion que quita los espacios a la izquierda y a la derecha
//function Sin_Espacios(Cadena)
function Sin_Espacios(Cadena)
	{	 
		return Right_Trim(Left_Trim(Cadena));	
	}

//Funcion que verifica si un año es bisiesto
function Bisiesto(anio)
	{
		if ((anio % 100 != 0) && ((anio % 4 == 0) || (anio % 400 == 0))) return true;
		else return false;
	}

function init() {
	//==========================================================================================
	// if supported, initialize TransMenus
	//==========================================================================================
	// Check isSupported() so that menus aren't accidentally sent to non-supporting browsers.
	// This is better than server-side checking because it will also catch browsers which would
	// normally support the menus but have javascript disabled.
	//
	// If supported, call initialize() and then hook whatever image rollover code you need to do
	// to the .onactivate and .ondeactivate events for each menu.
	//==========================================================================================
	if (TransMenu.isSupported()) {
		TransMenu.initialize();
		
	}
}