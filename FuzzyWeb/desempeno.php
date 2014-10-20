<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
?>
<script>
seleccionado = "desempeno";
</script>


<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
            	<div id="selected" class="boton" onClick="cambiarPagina('desempeno',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Desempe&ntilde;o</div>
            </div>
            <div id="desempeno">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>DESEMPEÑO</strong><br/><br/></span>
            <div id="texto" style="text-align:center; padding-top:150px">
            ESPACIO PARA LA INFORMACIÓN QUE ENVIARÁ EL EQUIPO DE PRUEBAS DE DESEMPEÑO
            </div>
            </div>
            </div>
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>

<?php
include ("footer.php");
?>