function clearSearch()
{
	o = document.getElementById("barra_busqueda");
	if (o.value == "Buscar")
		o.value = "";
}

function cambiarPagina(l,o)
{
	
	o.onmouseover='';
	o.onmouseout='';
	document.getElementById('selected').style.backgroundImage="url(img/boton.png)";
	document.getElementById('selected').style.fontWeight='';
	document.getElementById('selected').onmouseover=function () {this.style.fontWeight='bold'}; 
	document.getElementById('selected').onmouseout=function () {this.style.fontWeight=''}; 
	document.getElementById('selected').id='';
	document.getElementById(seleccionado).style.display='none';
	seleccionado=l;
	$("#"+seleccionado).fadeIn("slow");
	o.style.backgroundImage="url(img/boton_seleccionado.png)";
	o.style.fontWeight='bold';
	o.id='selected';
	
}
	