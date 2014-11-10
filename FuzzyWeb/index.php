<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
$subsecs = get_subsecciones("Descarga");
$subsecsw = get_subsecciones("Pruebas en línea");
?>
<div id="barra_azul" style="background-image:url(img/barradifuminada.jpg); height:343px; width:100%;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
		<div id="titulo" style="background-image: url(img/titulo_banner.png); width: 567px; height: 109px; top: 45px; position: absolute; left: 317px;"></div>
        <div id="mascotafuzzy" style="position: absolute; background-image: url(img/mascota_fuzzy.png); width: 451px; height: 310px; left: 376px; top: 177px;"></div>
      <div id="caja_fondo" style="background-image: url(img/home_box.png); width: 285px; height: 190px; position: absolute; left: 919px; top: 85px; z-index:2"></div>
        <div id="caja_titulo1" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px;">Última <strong>Versión</strong></div>
        <div id="caja_texto1" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px;">
        <div id="caja_texto12" style="height: 110px"><strong><?php $numeroDescarga = count($subsecs[0]['bloque'][0]['descarga'])-1; echo $subsecs[0]['bloque'][0]['descarga'][$numeroDescarga]['nombre'] ?></strong> - <?php echo $subsecs[0]['bloque'][0]['descarga'][$numeroDescarga]['fecha']?><br/><?php echo $subsecs[0]['bloque'][0]['descarga'][$numeroDescarga]['descripcion']?><br/></div>
        <div id="caja_texto13"><span style=" margin-left:100px;"><a href="descarga.php" style="color:#1B1B1B;">Sección de Descarga ></a></span></div>
        </div>
        <div id="caja_titulo2" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px; display:none;">Últimos <strong>Proyectos</strong></div>
        <div id="caja_texto2" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px; display:none">
        <div id="caja_texto22" style="height: 110px"><strong><?php $numeroWebapp = count($subsecsw[2]['bloque'][0]['webapp'])-1; echo $subsecsw[2]['bloque'][0]['webapp'][$numeroWebapp]['nombre'] ?></strong> - <?php echo $subsecsw[2]['bloque'][0]['webapp'][$numeroWebapp]['fecha']?><br/><?php echo $subsecsw[2]['bloque'][0]['webapp'][$numeroWebapp]['descripcion']?><br/></div>
        <div id="caja_texto23"><span style=" margin-left:100px;"><a href="pruebas.php?sec=2" style="color:#1B1B1B;">Sección de Pruebas ></a></span></div>
        </div>
        <div id="caja_titulo3" style="position: absolute; left: 925px; width: 250px; text-align: right; top: 102px; z-index: 3; color: #FFF; font-size: 14px; display:none;"><strong>Contáctanos</strong></div>
        <div id="caja_texto3" style="position: absolute; left: 950px; width: 235px; text-align: left; top: 133px; z-index: 3; color: #000; font-size: 13px; display:none;"><strong>fuzzydoDB es una comunidad</strong><br/>¿Tienes alguna pregunta del proyecto o de alguno de sus miembros?<br/>¿Quieres colaborar y ser parte del equipo desarrollador?<br/><br/><span style=" margin-left:147px;"><a href="comunidad_p.php?sec=2" style="color:#1B1B1B;">Ingresa aquí ></a></span></div>
        <div id="box_selectors" style="position: absolute; left: 1140px; top: 279px;"><a href="javascript:void(0)" onclick="cambiarCaja('1');"><img id="selector1" src="img/box_selector_c.png" width="12" height="12" alt="Seleccionado" style="border:0" /></a><a href="javascript:void(0)" onclick="cambiarCaja('2');"><img id="selector2"src="img/box_selector.png" width="12" height="12" alt="Seleccionar" style="margin-left:10px; border:0" /></a><a href="javascript:void(0)" onclick="cambiarCaja('3');"><img id="selector3" src="img/box_selector.png" width="12" height="12" alt="Seleccionar" style="margin-left:10px; border:0" /></a></div>
    </div>
</div>
<div id="barra_gris" style="background-color:#f2f2f2; height:272px; width:100%">
	<div id="marco_centrado3" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
            <div style="position: absolute; font-size: 21px; color: #525252; top: 160px; left: 0; width:100%; text-align:center;">Universidad Simón Bolívar<br/><strong>Venezuela</strong></div>
  </div>
</div>
<?php
include ("footer.php");
?>