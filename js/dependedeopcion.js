document.addEventListener('readystatechange',cargar_eventos,false);
function cargar_eventos(evento){
	if(document.readyState=="interactive"){
		document.getElementById("digital").addEventListener("change",formatoDigital);
		document.getElementById("fisico").addEventListener("change",formatoFisico);
		document.getElementById("ps4").addEventListener("change",tiendaDigital);
		document.getElementById("xboxone").addEventListener("change",tiendaDigital);
		if(document.getElementById("digital").checked){
			document.getElementById("pc").addEventListener("change",tiendaDigital);
		}
	}
}

function formatoDigital(evento){
	//Crear el label con sus atributos
	var lab = document.createElement("label");
	var texto = document.createTextNode("PC");
	lab.setAttribute("class", "textLabel");
	lab.setAttribute("id", "labelpc");
	
	//Crear el input con sus atributos
	var inp = document.createElement("input");
	inp.setAttribute("type", "radio");
	inp.setAttribute("id", "pc");
	inp.setAttribute("name", "console");
	inp.setAttribute("value", "pc");
	
	//Añade Elementos
	lab.appendChild(texto);
	lab.appendChild(inp);
	
	//Añade el label en el div labelParaPC
	document.getElementById("labelParaPC").appendChild(lab);
	
	//Oculta la Tienda Fisica
	var TiendaFisica = document.getElementById("tienda");
	if(document.getElementById("digital").checked){
		TiendaFisica.style.display = "none";
	}
	/*var tienda = document.getElementById("tienda");
	tienda.parentNode.removeChild(tienda)
	var ocultarTiendaFisica = document.getElementById("tienda");
	if(ocultarTiendaFisica.style.display === "none" && document.getElementById("digital").checked){
		ocultarTiendaFisica.style.display = "block";
	}else{
		ocultarTiendaFisica.style.display = "none";
	}*/
}

function formatoFisico(evento){
	var labelPC = document.getElementById("labelpc");
	var TiendaFisica = document.getElementById("tienda");
	var TiendaDigital = document.getElementById("tiendaonline");
	
	//Oculta la Tienda Digital
	if(document.getElementById("fisico").checked){
		labelPC.style.display = "none";
		TiendaDigital.style.display = "none";
		TiendaFisica.style.display = "block";
	}
	
	/*
	labelPC.parentNode.removeChild(labelPC);
	var ocultarLabelPC = document.getElementById("labelParaPC");
	if(ocultarLabelPC.style.display === "none" && document.getElementById("fisico").checked){
		ocultarLabelPC.style.display = "block";
	}else{
		ocultarLabelPC.style.display = "none";
	}
	
	var tienda = document.getElementById("tienda");
	document.getElementById("tiendaonline").appendChild(tienda);
	if(ocultarTiendaFisica.style.display === "none"){
		ocultarTiendaFisica.style.display = "block";
	}else{
		ocultarTiendaFisica.style.display = "none";
	}*/
	
}
function tiendaDigital(evento){
	if(document.getElementById("digital").checked && document.getElementById("ps4").checked){
		//Creación del Div
		var divps4 = document.createElement("div");
		divps4.setAttribute("id", "onlineps4");
		
		//Creación del H2
		var h2ps4 = document.createElement("h2");
		var textoTiendaPS4 = document.createTextNode("TIENDA ONLINE:");
		
		//Creación del Label
		var labps4 = document.createElement("label");
		labps4.setAttribute("class", "textLabel");
		
		//Creación del Texto del Label
		var textoPS4 = document.createTextNode("PlayStation Store");
		
		//Creación del Input
		var inpps4 = document.createElement("input");
		inpps4.setAttribute("type", "radio");
		inpps4.setAttribute("id", "playstore");
		inpps4.setAttribute("name", "tiendaonline");
		inpps4.setAttribute("value", "playstore");
		
		//Añadir elementos
		h2ps4.appendChild(textoTiendaPS4);
		labps4.appendChild(textoPS4);
		labps4.appendChild(inpps4);
		divps4.appendChild(h2ps4);
		divps4.appendChild(labps4);
		document.getElementById("tiendaonline").appendChild(divps4);
		
		//Quitar la tienda de XBOX y PC
		/*var tiendaXBOX = document.getElementById("onlinexbox");
		tiendaXBOX.parentNode.removeChild(tiendaXBOX);
		var tiendaPC = document.getElementById("onlinepc");
		tiendaPC.parentNode.removeChild(tiendaPC);*/
		var ocultarTiendaDigitalXBOX = document.getElementById("onlinexbox");
		var ocultarTiendaDigitalPC = document.getElementById("onlinepc");
		if(document.getElementById("ps4").checked){
			ocultarTiendaDigitalXBOX.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}
		/*if((ocultarTiendaDigitalXBOX.style.display === "none") && (ocultarTiendaDigitalPC.style.display === "none") && (document.getElementById("ps4").checked)){
			ocultarTiendaDigitalXBOX.style.display = "block";
			ocultarTiendaDigitalPC.style.display = "block";
		}else{
			ocultarTiendaDigitalXBOX.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}*/
	}else if(document.getElementById("digital").checked && document.getElementById("xboxone").checked){
		//Creación del Div
		var divxbox = document.createElement("div");
		divxbox.setAttribute("id", "onlinexbox");
		
		//Creación del H2
		var h2XBOX = document.createElement("h2");
		var textoTiendaXBOX = document.createTextNode("TIENDA ONLINE:");
		
		//Creación del Label
		var labxbox = document.createElement("label");
		labxbox.setAttribute("class", "textLabel");
		
		//Creación del Texto del Label
		var textoXBOX = document.createTextNode("Microsoft Store");
		
		//Creación del Input
		var inpxbox = document.createElement("input");
		inpxbox.setAttribute("type", "radio");
		inpxbox.setAttribute("id", "microstore");
		inpxbox.setAttribute("name", "tiendaonline");
		inpxbox.setAttribute("value", "microstore");
		
		//Añadir elementos
		h2XBOX.appendChild(textoTiendaXBOX);
		labxbox.appendChild(textoXBOX);
		labxbox.appendChild(inpxbox);
		divxbox.appendChild(h2XBOX);
		divxbox.appendChild(labxbox);
		document.getElementById("tiendaonline").appendChild(divxbox);
		
		//Quitar la tienda de PS4 y PC
		var ocultarTiendaDigitalPS4 = document.getElementById("onlineps4");
		var ocultarTiendaDigitalPC = document.getElementById("onlinepc");
		if(document.getElementById("xboxone").checked){
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}
		/*
		var tiendaPS4 = document.getElementById("onlineps4");
		tiendaPS4.parentNode.removeChild(tiendaPS4);
		var tiendaPC = document.getElementById("onlinepc");
		tiendaPC.parentNode.removeChild(tiendaPC);
		if((ocultarTiendaDigitalPS4.style.display === "none") && (ocultarTiendaDigitalPC.style.display === "none") && (document.getElementById("xboxone").checked)){
			ocultarTiendaDigitalPS4.style.display = "block";
			ocultarTiendaDigitalPC.style.display = "block";
		}else{
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalPC.style.display = "none";
		}*/
	}else if(document.getElementById("digital").checked && document.getElementById("pc").checked){
		//Creación del Div
		var divpc = document.createElement("div");
		divpc.setAttribute("id", "onlinepc");
		
		//Creación del H2
		var h2PC = document.createElement("h2");
		var textoTiendaPC = document.createTextNode("Tienda Online:");
		
		//Creación del Label
		var labpc = document.createElement("label");
		labpc.setAttribute("class", "textLabel");
		
		//Creación del Texto del Label
		var textoPC = document.createTextNode("Steam");
		
		//Creación del Input
		var inppc = document.createElement("input");
		inppc.setAttribute("type", "radio");
		inppc.setAttribute("id", "steam");
		inppc.setAttribute("name", "tiendaonline");
		inppc.setAttribute("value", "steam");
		
		//Añadir elementos
		h2PC.appendChild(textoTiendaPC);
		labpc.appendChild(textoPC);
		labpc.appendChild(inppc);
		divpc.appendChild(h2PC);
		divpc.appendChild(labpc);
		document.getElementById("tiendaonline").appendChild(divpc);
		
		//Quitar la tienda de PS4 y XBOX
		var ocultarTiendaDigitalPS4 = document.getElementById("onlineps4");
		var ocultarTiendaDigitalXBOX = document.getElementById("onlinexbox");
		if(document.getElementById("pc").checked){
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalXBOX.style.display = "none";
		}
		/*
		var tiendaPS4 = document.getElementById("onlineps4");
		tiendaPS4.parentNode.removeChild(tiendaPS4);
		var tiendaXBOX = document.getElementById("onlinexbox");
		tiendaXBOX.parentNode.removeChild(tiendaXBOX);
		if((ocultarTiendaDigitalPS4.style.display === "none") && (ocultarTiendaDigitalXBOX.style.display === "none") && (document.getElementById("pc").checked)){
			ocultarTiendaDigitalPS4.style.display = "block";
			ocultarTiendaDigitalXBOX.style.display = "block";
		}else{
			ocultarTiendaDigitalPS4.style.display = "none";
			ocultarTiendaDigitalXBOX.style.display = "none";
		}*/
	}
}
function tiendaDigitalPS4(evento){
	
}

function tiendaDigitalXBOX(evento){

}

function tiendaDigitalPC(evento){
	
}

function decripcionVersion(evento){
	
}