function clearSearch(s,o)
{
	if (o.value == s)
        {
		o.value = "";
                o.style.color= "#1b1b1b";
        }
            
}

function abrirSignIn()
{
    document.getElementById('botoniniciarsesion').src="img/boton-iniciarS2.png";
    $("#marco_signin").slideDown("fast");
    document.getElementById('botoniniciarsesion').onclick=cerrarSignIn;
    
}

function cerrarSignIn()
{
    document.getElementById('botoniniciarsesion').src="img/boton-iniciarS.png";
    $("#marco_signin").slideUp("fast");
    document.getElementById('botoniniciarsesion').onclick=abrirSignIn;
    
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
	