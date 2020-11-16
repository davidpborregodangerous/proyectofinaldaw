document.addEventListener('readystatechange',cargar_eventos,false);
function cargar_eventos(evento){
	if(document.readyState=="interactive"){
		document.getElementById("digital").addEventListener("change",formatoDigital);
		document.getElementById("fisico").addEventListener("change",formatoFisico);
		document.getElementById("standard").addEventListener("change",verEstandar);
		document.getElementById("collector").addEventListener("change",verColeccionista);
		document.getElementById("ps4").addEventListener("change",tiendaDigitalPS4);
		document.getElementById("xboxone").addEventListener("change",tiendaDigitalXBOX);
		document.getElementById("pc").addEventListener("change",tiendaDigitalPC);
	}
}

function formatoDigital(evento){
	var labelPC = document.getElementById("labelpc");
	var TiendaFisica = document.getElementById("tienda");
	if(document.getElementById("digital").checked){
		labelPC.style.display = "inline";
		TiendaFisica.style.display = "none";
	}
}

function formatoFisico(evento){
	var labelPC = document.getElementById("labelpc");
	var TiendaFisica = document.getElementById("tienda");
	var TiendaDigitalPC = document.getElementById("onlinepc");
	var TiendaDigitalPS4 = document.getElementById("onlineps4");
	var TiendaDigitalXBOX = document.getElementById("onlinexbox");
	//Oculta la Tienda Digital
	if(document.getElementById("fisico").checked){
		TiendaFisica.style.display = "block";
		labelPC.style.display = "none";
		TiendaDigitalPC.style.display = "none";
		TiendaDigitalPS4.style.display = "none";
		TiendaDigitalXBOX.style.display = "none";
	}
}

function tiendaDigitalPS4(evento){
	if(document.getElementById("digital").checked && document.getElementById("ps4").checked){
		//Quitar la tienda de XBOX y PC
		var ocultarTiendaDigitalPS4 = document.getElementById("onlineps4");
		var ocultarTiendaDigitalXBOX = document.getElementById("onlinexbox");
		var ocultarTiendaDigitalPC = document.getElementById("onlinepc");
		if(document.getElementById("ps4").checked){
			ocultarTiendaDigitalPS4.style.display = "block";
			ocultarTiendaDigitalXBOX.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}
	}
}

function tiendaDigitalXBOX(evento){
	if(document.getElementById("digital").checked && document.getElementById("xboxone").checked){
		//Quitar la tienda de PS4 y PC
		var ocultarTiendaDigitalXBOX = document.getElementById("onlinexbox");
		var ocultarTiendaDigitalPS4 = document.getElementById("onlineps4");
		var ocultarTiendaDigitalPC = document.getElementById("onlinepc");
		if(document.getElementById("xboxone").checked){
			ocultarTiendaDigitalXBOX.style.display = "block";
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}
	}
}

function tiendaDigitalPC(evento){
	if(document.getElementById("digital").checked && document.getElementById("pc").checked){
		//Quitar la tienda de PS4 y XBOX
		var ocultarTiendaDigitalPC = document.getElementById("onlinepc");
		var ocultarTiendaDigitalPS4 = document.getElementById("onlineps4");
		var ocultarTiendaDigitalXBOX = document.getElementById("onlinexbox");
		if(document.getElementById("pc").checked){
			ocultarTiendaDigitalPC.style.display = "block";
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalXBOX.style.display = "none";
		}
	}
}

function verEstandar(evento){
	var estandar = document.getElementById("edEstandar");
	var coleccionista = document.getElementById("edColeccionista");
	//Oculta la Tienda Digital
	if(document.getElementById("standard").checked){
		estandar.style.display = "block";
		coleccionista.style.display = "none";
	}
}

function verColeccionista(evento){
	var estandar = document.getElementById("edEstandar");
	var coleccionista = document.getElementById("edColeccionista");
	//Oculta la Tienda Digital
	if(document.getElementById("collector").checked){
		coleccionista.style.display = "block";
		estandar.style.display = "none";
	}
}