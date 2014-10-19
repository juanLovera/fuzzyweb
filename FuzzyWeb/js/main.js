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


function validarCampos()
{
    var re = /\S+@\S+\.\S+/;
    var i = 0;
    arreglo = ['nombre','apellido','institucion','ocupacion','pais','mail','contrasena','confirmar'];
    
    for(i=0; i < arreglo.length; i++){
        document.getElementById(arreglo[i]).style.borderColor = "#045d6f";
    	if (document.getElementById(arreglo[i]).value == "") {
            if (arreglo[i] == "nombre"){
               alert("El campo 'Nombre' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "apellido"){
               alert("El campo 'Apellido' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "institucion"){
               alert("El campo 'Institución' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "ocupacion"){
               alert("El campo 'Ocupación' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "pais"){
               alert("Debe seleccionar un 'País de residencia'.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "mail"){
               alert("El campo 'E-mail' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "contrasena"){
               alert("El campo 'Contraseña' no puede estar vacío.");
               document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }
            if (arreglo[i] == "confirmar"){
               alert("El campo 'Confirmar contraseña' no puede estar vacío.");
             document.getElementById(arreglo[i]).style.borderColor = "red"; 
                return false;
            }   
        }
    }
    
    for(i=0; i < arreglo.length; i++){
    	if (arreglo[i] == "mail") {
            if (!re.test(document.getElementById('mail').value)) {
		alert("Ingrese un e-mail válido.");
                document.getElementById(arreglo[i]).style.borderColor = "red";
            }
        }
    }    
    
    for (i=0; i < arreglo.length; i++){
        if (arreglo[i] == 'contrasena') {
            if (document.getElementById(arreglo[i]).value != document.getElementById(arreglo[i+1]).value) { 
                        alert("Su contraseña y confirmación de contraseña no coinciden.");
                        document.getElementById('contrasena').style.borderColor = "red";
                        document.getElementById('confirmar').style.borderColor = "red";   
                        
            }
            if ((document.getElementById(arreglo[i]).value.length < 8) || (document.getElementById(arreglo[i]).value.length > 12)) {
                alert("La contraseña debe ser de mínimo 8 caracteres y máximo 12 caracteres.");
                document.getElementById('contrasena').style.borderColor = "red";
                document.getElementById('confirmar').style.borderColor = "red";  
            }    
        }    
    }
    return false;
}

	