
function Calendario_Psicologa_Buscar()
{
	$('#div_Calendariox').html('~~');
	
	$('#div_Calendariox').fullCalendar({
		theme: true,
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay,listMonth'
		},
		defaultDate: '2016-12-12',
		navLinks: true, // can click day/week names to navigate views
		editable: true,
		eventLimit: true, // allow "more" link when too many events
		events: [
			{
				title: 'All Day Event',
				start: '2016-12-01'
			}
		],
		
		dayClick: function(date, jsEvent, view) {
			alert('Clicked on: ' + date.format());
		}
		
	});



//		$('#calendar').fullCalendar({
//			dayClick: function(date, jsEvent, view) {
//				alert('Clicked on: ' + date.format());
//			}
//		});	
	
	
/*

	//Sesion_Validar();
	
	$('#div_Calendario').html('');
	
	var date = new Date();
	var d = date.getDate(),
	m = date.getMonth(),
	y = date.getFullYear();
	
	$('#div_Calendario').fullCalendar({
		//theme: true,
		firstDay: 1,
		dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
		dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
		allDayDefault: false,
		header: {
			left: 'prev,next',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		buttonText: { //This is to add icons to the visible buttons
			month: 'Mes',
			week: 'Semana',
			day: 'Día'
		},
		//Random default events
		eventSources: [
		// your event source
			{
				//url: '../ajax/Promocion/Calendario_Psicologa_Buscar.php', // use the `url` property
			}
		// any other sources...
		]
//		,
//		dayClick: function(date, jsEvent, view) {
//			alert("Calendario_Psicologa_Evento_Horas");
//			//Calendario_Psicologa_Evento_Horas(date.format());
//		},
//		eventClick: function(calEvent, jsEvent, view) {
//			alert("Calendario_Psicologa_Evento");
//			//Calendario_Psicologa_Evento_Horas(calEvent.fecha);
//			Calendario_Psicologa_Evento(calEvent.fecha);
//		}
	});
*/
}