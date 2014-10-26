<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
?>
<script>
seleccionado = "pruebasenlinea";
</script>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
            	<div id="selected" class="boton" onClick="cambiarPagina('pruebasenlinea',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Pruebas en Línea</div>
                <div class="boton" onClick="cambiarPagina('consola',this); document.getElementById('conso').contentWindow.document.getElementById('consotext').focus()" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Pruebas en consola</div>
                <div class="boton" onClick="cambiarPagina('demostracion',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Demostración de funcionamiento</div>
            </div>
            <div id="pruebasenlinea">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>PRUEBAS EN LÍNEA</strong><br/><br/></span>
            Mini manual de cómo usar las pruebas en línea.
            </div>
            </div>
            <div id="consola" style="display:none;">
            <iframe id="conso" style="margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px" src="http://localhost/terminal/"></iframe>

            </div>
             <div id="demostracion" style="display:none;">
           <iframe id="conso" style="margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px" src="http://localhost:8000/agrupar"></iframe>
            </div>
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>
<?php
include ("footer.php");
?>