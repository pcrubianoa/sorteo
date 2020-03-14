<?php

	function getGCalendarUrl($event){
		$titulo = urlencode($event['titulo']);
		$descripcion = urlencode($event['descripcion']);
		$localizacion = urlencode($event['localizacion']);
		$start=new DateTime($event['fecha_inicio'].' '.$event['hora_inicio'].' '.date_default_timezone_get());
		$end=new DateTime($event['fecha_fin'].' '.$event['hora_fin'].' '.date_default_timezone_get());
		$dates = urlencode($start->format("Ymd\THis")) . "/" . urlencode($end->format("Ymd\THis"));
		$name = urlencode($event['nombre']);
		$url = urlencode($event['url']);
		$gCalUrl = "http://www.google.com/calendar/event?action=TEMPLATE&amp;text=$titulo&amp;dates=$dates&amp;details=$descripcion&amp;location=$localizacion&amp;trp=false&amp;sprop=$url&amp;sprop=name:$name";
		return ($gCalUrl);
	}
	
	// array asociativo con los parametros necesarios.
	$evento = array(
		'titulo' => 'Mi evento de prueba',
		'descripcion' => 'Descripcion del evento de prueba',
		'localizacion' => 'Aqui ponemos la dirección donde se celebra el evento',
		'fecha_inicio' => '2014-04-10', // Fecha de inicio de evento en formato AAAA-MM-DD
		'hora_inicio'=>'17:30', // Hora Inicio del evento
		'fecha_fin'=>'2014-04-12', // Fecha de fin de evento en formato AAAA-MM-DD
		'hora_fin'=>'19:00', // Hora final del evento
		'nombre'=>'ReviBlog', // Nombre del sitio
		'url'=>'www.reviblog.net' // Url de la página
	);
?>