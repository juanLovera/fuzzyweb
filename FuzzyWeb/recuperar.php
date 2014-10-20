<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
?>
<script>
seleccionado = cambiarContrasena;
</script>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
                <div id="selected" class="boton" onClick="cambiarPagina('cambiarContrasena',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Cambiar Contraseña</div>
            
            </div>
            
       
            
            <div id="cambiarContrasena">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>RECUPERAR CONTRASE&Ntilde;A</strong><br/><br/></span>
            Ingrese su nueva contraseña.<br/>
            <form >
            <input type="text" id="contrasenaNueva" onfocus="clearSearch(this);" placeholder="Contraseña" style="border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px; margin-left: 300px; margin-top:30px;" />
            <input type="text" id="contrasenaNuevaC" onfocus="clearSearch(this);" placeholder="Confirmar contraseña" style="border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px; margin-left: 300px; margin-top:15px;" />
            <input type = "image" src="img/boton-recuperar.png" width="99" height="30" alt="recuperar" style="margin-left: 340px; margin-top:30px" />
            </form>
            </div>
            </div>
            
            
            
            
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>
<?php
include ("footer.php");
?>
