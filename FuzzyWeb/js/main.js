function clearSearch(o)
{   
    o.style.color= "#1b1b1b";          
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

function validarModificarPerfil()
{
    arreglo = ['nombre','apellido','ocupacion','institucion','pais']
    
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
        }
    }
    
    return true;
}

function validarModificarCorreo()
{
    var re = /\S+@\S+\.\S+/;
    
    document.getElementById('mail').style.borderColor = "#045d6f";
    if (document.getElementById('mail').value == "") {
        alert("El campo 'Correo' no puede estar vacío.");
            document.getElementById('mail').style.borderColor = "red"; 
            return false;
    }
    
    if (!re.test(document.getElementById('mail').value)) {
        alert("Ingrese un e-mail válido.");
        document.getElementById('mail').style.borderColor = "red";
        return false;
    }
    
    return true;
}

function validarModificarContrasena()
{
    document.getElementById('contrasena').style.borderColor = "#045d6f";
    document.getElementById('confirmar').style.borderColor = "#045d6f";
    if (document.getElementById('contrasena').value == "") {
        alert("El campo 'Contraseña' no puede estar vacío.");
            document.getElementById('contrasena').style.borderColor = "red"; 
            return false;
    }
    
    if (document.getElementById('confirmar').value == "") {
        alert("El campo 'Confirmar Contraseña' no puede estar vacío.");
            document.getElementById('confirmar').style.borderColor = "red"; 
            return false;
    }
    
    if (document.getElementById('contrasena').value != document.getElementById('confirmar').value) { 
        alert("Su contraseña y confirmación de contraseña no coinciden.");
        document.getElementById('contrasena').style.borderColor = "red";
        document.getElementById('confirmar').style.borderColor = "red";
        return false;
    }
    
    if ((document.getElementById('contrasena').value.length < 8) || (document.getElementById('confirmar').value.length > 12)) {
        alert("La contraseña debe ser de mínimo 8 caracteres y máximo 12 caracteres.");
        document.getElementById('contrasena').style.borderColor = "red";
        document.getElementById('confirmar').style.borderColor = "red";
        return false;
    }
    
    return true;
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
                return false;
            }
        }
    }    
    
    for (i=0; i < arreglo.length; i++){
        if (arreglo[i] == 'contrasena') {
            if (document.getElementById(arreglo[i]).value != document.getElementById(arreglo[i+1]).value) { 
                        alert("Su contraseña y confirmación de contraseña no coinciden.");
                        document.getElementById('contrasena').style.borderColor = "red";
                        document.getElementById('confirmar').style.borderColor = "red";
                        return false;
                        
            }
            if ((document.getElementById(arreglo[i]).value.length < 8) || (document.getElementById(arreglo[i]).value.length > 12)) {
                alert("La contraseña debe ser de mínimo 8 caracteres y máximo 12 caracteres.");
                document.getElementById('contrasena').style.borderColor = "red";
                document.getElementById('confirmar').style.borderColor = "red";
                return false;
            }    
        }    
    }
    return true;
}

function registrar()
{
    if (!validarCampos())
        return;
    $("#registro-form").slideUp("fast", function (){
    $("#registro-loading").show();
    rq = "process/signup.php?nombre="+$("#nombre").val()+"&apellido="+$("#apellido").val()
          +"&mail="+$("#mail").val()+"&contrasena="+$("#contrasena").val()
          +"&confirmar="+$("#confirmar").val()+"&ubicacion="+$("#ubicacion").val()
          +"&institucion="+$("#institucion").val()+"&ocupacion="+$("#ocupacion").val();
    jqaj = $.ajax(rq)
            .done(function(res){
                 $("#registro-loading").hide();
                if (res != "OK")
                {
                    alert(res);
                    $("#registro-form").slideDown("fast");
                }
                else
                {
                    $("#registro-ok").fadeIn("fast");
                }
            })
                    .fail(function() {
                        alert("Ha ocurrido un error al enviar el formulario.");
                        $("#registro-form").slideDown("fast");
                        $("#registro-loading").hide();
            })
    });
    
}

function iniciarSesion()
{
    $("#form-inicio").hide();
    $("#signin-loading").show();
    rq = "process/signin.php?mail="+$("#barra_signin_correo").val()+"&contrasena="+$("#barra_signin_contrasena").val();
    jqaj = $.ajax(rq)
            .done(function(res){
                 $("#signin-loading").hide();
                if (res != "OK")
                {
                    $("#signin-error").fadeIn("fast");
                }
                else
                {
                    location.href="index.php";
                }
            })
                    .fail(function() {
                        alert("Ha ocurrido un error al enviar el formulario.");
                        $("#form-inicio").fadeIn("fast");
                        $("#signin-loading").hide();
            })
}

function cambiarTextoDescarga()
{
    document.getElementById("textodescarga").innerText = "Para acceder a las descargas debes iniciar sesión o registrarte.";
}

function recuperarClave()
{
     $("#recuperar-form").hide();
    $("#recuperar-loading").show();
    rq = "process/recuperarpass.php?paso=1&mail="+$("#correoRecuperarContrasena").val();
    jqaj = $.ajax(rq)
            .done(function(res){
                 $("#recuperar-loading").hide();
                if (res != "OK")
                {
                    alert(res);
                    $("#recuperar-form").fadeIn("fast");
                }
                else
                {
                    $("#recuperar-ok").fadeIn();
                }
            })
                    .fail(function() {
                        alert("Ha ocurrido un error al enviar el formulario.");
                        $("#recuperar-form").fadeIn("fast");
                        $("#recuperar-loading").hide();
            })
}

function cambiarClaveRec()
{
   
     $("#recuperar-form").hide();
    $("#recuperar-loading").show();
    rq = "process/recuperarpass.php?paso=2&mail="+$("#mail").val()
           +"&con="+$("#con").val()+"&contrasena="+$("#contrasenaNueva").val()
            +"&confirmar="+$("#contrasenaNuevaC").val();
    jqaj = $.ajax(rq)
            .done(function(res){
                 $("#recuperar-loading").hide();
                if (res != "OK")
                {
                    alert(res);
                    $("#recuperar-form").fadeIn("fast");
                }
                else
                {
                    $("#recuperar-ok").fadeIn();
                }
            })
                    .fail(function() {
                        alert("Ha ocurrido un error al enviar el formulario.");
                        $("#recuperar-form").fadeIn("fast");
                        $("#recuperar-loading").hide();
            })
}



	