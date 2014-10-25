<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
?>
<script>
seleccionado = "descarga";
</script>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
            	<div id="selected" class="boton" onClick="cambiarPagina('descarga',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Descarga</div>
                <div class="boton" onClick="cambiarPagina('requerimientos',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Requerimientos</div>
                <div class="boton" onClick="cambiarPagina('manual',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Manual de instalación</div>
                <div class="boton" onClick="cambiarPagina('versiones',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Versiones anteriores</div>
            </div>
            
            <div id="descarga">
                <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px; ">
                    <span style="color:#023e44"><strong>DESCARGA</strong></span><br/><br/>
                    <div style="background-color:#F7F7F7; width:750px; padding:16px; text-align:justify">
                        <strong>Descarga 1</strong> - <span style="color:#828282">10 de Octubre de 2014</span><br/><br/>
                        <?php
                        if ($_SESSION["ss_key"] == $G_SKEY)
                        {
                        ?>
                        Descarga de proyecto de Bases de Datos con Atributos Difusos de Tipo 2 y Tipo 3.<br/><br/>
                        <div style="padding-left:500px; text-align:right;"><a href="downloads/FuzzyDB_MPDS_Ene_Mar_14_FINAL.zip"><img src="img/descarga_icono.png" width="16" height="16" alt="Descargar" /> Descargar</a><br/></div>
                        <?php
                        }
                        else
                        {
                        ?>
                        Descarga de proyecto de Bases de Datos con Atributos Difusos de Tipo 2 y Tipo 3.<br/><br/>
                        <div style="padding-left:100px; text-align:right;"><img onclick="cambiarTextoDescarga();" src="img/descarga_icono.png" width="16" height="16" alt="Descargar" /> <span onclick="cambiarTextoDescarga();" id="textodescarga">Descargar</span><br/></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            
            <div id="requerimientos" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px; ">
            <span style="color:#023e44"><strong>REQUERIMIENTOS</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
            
            <div id="manual" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px; ">
            <span style="color:#023e44"><strong>MANUAL DE INSTALACIÓN</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
            
            <div id="versiones" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px; ">
            <span style="color:#023e44"><strong>VERSIONES ANTERIORES</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
            
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>
<?php
include ("footer.php");
?>