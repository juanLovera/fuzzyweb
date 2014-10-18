<?php
include ("header.php");
?>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
		<div id="titulo" style="background-image: url(img/titulo_banner.png); width: 567px; height: 109px; top: 45px; position: absolute; left: 317px;"></div>
        <div id="cromofuzzy" style="position: absolute; background-image: url(img/cromovegetal_fuzzy.png); width: 609px; height: 286px; left: 296px; top: 197px;"></div>
      <div id="caja_fondo" style="background-image: url(img/home_box.png); width: 285px; height: 190px; position: absolute; left: 919px; top: 85px; z-index:2"></div>
        <div id="caja_titulo1" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px;">Última <strong>Versión</strong></div>
        <div id="caja_texto1" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px;"><strong>Versión 3.0</strong><br/>Se arreglaron los siguientes bugs:<br/>Uno<br/>Dos<br/>Tres<br/><br/><span style=" margin-left:100px;">Sección de Descarga ></span></div>
        <div id="caja_titulo2" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px; display:none;">Últimos <strong>Proyectos</strong></div>
        <div id="caja_texto2" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px; display:none;"><strong>Otros proyectos de la universidad</strong><br/>Uno<br/>Dos</div>
        <div id="caja_titulo3" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px; display:none;"><strong>Colabora</strong></div>
        <div id="caja_texto3" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px; display:none;"><strong>Nuestras redes sociales</strong><br/>Twitter, Facebook, etc</div>
        <div id="box_selectors" style="position: absolute; left: 1140px; top: 279px;"><a href="javascript:void(0)" onclick="cambiarCaja('1');"><img id="selector1" src="img/box_selector_c.png" width="12" height="12" alt="Seleccionado" style="border:0" /></a><a href="javascript:void(0)" onclick="cambiarCaja('2');"><img id="selector2"src="img/box_selector.png" width="12" height="12" alt="Seleccionar" style="margin-left:10px; border:0" /></a><a href="javascript:void(0)" onclick="cambiarCaja('3');"><img id="selector3" src="img/box_selector.png" width="12" height="12" alt="Seleccionar" style="margin-left:10px; border:0" /></a></div>
    </div>
</div>
<div id="barra_gris" style="background-color:#f2f2f2; height:272px; width:100%">
	<div id="marco_centrado3" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
        <div style="position: absolute; font-size: 21px; color: #525252; top: 160px; left: 0; width:100%; text-align:center;">De la Universidad Simón Bolívar<br/><strong>Venezuela</strong></div>
  </div>
</div>
<?php
include ("footer.php");
?>