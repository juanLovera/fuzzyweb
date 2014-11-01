<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("../inc/includes.inc.php");

$db = conectar_db();

$coleccion = $db->subseccion;

$subs = array("nombre" => "Introducción",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Introducción",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Historia",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Historia",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Miembros",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Miembros",
                            "informacion" => "<div id=\"texto\" style=\"width:850px; display:table; font-size:14px; text-align:center; margin-left:335px;\">
            <strong>GRUPO INVESTIGADOR</strong></br></br>
            <strong>Coordinadores</strong></br>
            Leonid Tineo</br> <i>USB</i> </br></br>
            Carlos I. Lameda M.</br> <i>UNEXPO</i> </br></br></br>
            
            <table style=\"display:inline-block; margin-right: 50px;\">
                <tr><td>
                Jesús Araque</br>
                <i>UNEXPO</i></br></br>
                Soraya Carrasquel</br>
                <i>USB</i></br></br>
                </tr></td>
            </table>
            
            <table style=\"display:inline-block; margin-right: 50px;\">
                <tr><td>
                Roberto Uzcátegui</br>
                <i>UNEXPO</i></br></br>
                David Coronado</br>
                <i>USB</i></br></br>
                </tr></td>
            </table>
            
            <table style=\"display:inline-block;\">
                <tr><td>
                Rosseline Rodríguez </br>
                <i>USB</i></br></br>
                Belkys López </br>
                <i>UCLA</i></br></br>
                </tr></td>
            </table>
            
            </br>Ricardo Monascal</br>
            <i>USB</i></br></br></br>
            
            <strong>ESTUDIANTES</strong></br></br>
            <table style=\"display:inline-block; width: 28%; margin-left: 10px; margin-right: 20px;\">
                <tr><td>
                <strong>???</strong></br>
                Andras Gyomrey</br>
                Bishma Stornelli</br>
                Carlos Timaury</br>
                Sergio Moreau</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%; margin-right: 20px;\">
                <tr><td>
                <strong>???</strong></br>
                Javier Antonini</br>
                Jonathan Melián</br>
                José Goncalves</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%;\">
                <tr><td>
                <strong>Análisis de Desempeño de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Andreina Marcano</br>
                Luis Manuel García</br>
                Patricia Zambrano</br>
                Vanessa Balleste</br></br>
                </tr></td>
            </table>
            
            </br></br>
            
            <table style=\"display:inline-block; width: 28%; margin-left: 10px; margin-right: 20px;\">
                <tr><td>
                <strong>Portal del Proyecto de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Carla Nardone</br>
                Juan Lovera</br>
                Luis Esparragoza</br>
                Rebecca Porras</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%; margin-right: 20px;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos – Tipo 4</strong></br>
                José Delgado</br>
                José Figueredo</br>
                Stephanie Alibrandi</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos – Tipo 5</strong></br>
                Héctor Domínguez</br>
                José Piñero</br>
                José Sanchez</br>
                Valeria Pestana</br></br>
                </tr></td>
            </table>
 
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));

$coleccion->insert($subs);

$subs = array("nombre" => "Tipos de datos difusos",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Tipos de datos difusos",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                          array("nombre" => "Tipo 1",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                          array("nombre" => "Tipo 2",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                          array("nombre" => "Tipo 3",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                          array("nombre" => "Tipo 4",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                          array("nombre" => "Tipo 5",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)    
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Comparación con otros proyectos",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Comparación con otros proyectos",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Ventajas",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Ventajas",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Proyectos anteriores",
              "seccion" => "Acerca",
              "bloque" => array(array("nombre" => "Proyectos anteriores",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Descarga",
              "seccion" => "Descarga",
              "bloque" => array(array("nombre" => "Descarga",
                            "informacion" => "<div style=\"background-color:#F7F7F7; width:750px; padding:16px; text-align:justify\">
                        <strong>Descarga 1</strong> - <span style=\"color:#828282\">10 de Octubre de 2014</span><br/><br/>
                        <?php
                        if ($_SESSION[\"ss_key\"] == $G_SKEY)
                        {
                        ?>
                        Descarga de proyecto de Bases de Datos con Atributos Difusos de Tipo 2 y Tipo 3.<br/><br/>
                        <div style=\"padding-left:500px; text-align:right;\"><a href=\"downloads/FuzzyDB_MPDS_Ene_Mar_14_FINAL.zip\"><img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> Descargar</a><br/></div>
                        <?php
                        }
                        else
                        {
                        ?>
                        Descarga de proyecto de Bases de Datos con Atributos Difusos de Tipo 2 y Tipo 3.<br/><br/>
                        <div style=\"padding-left:100px; text-align:right;\"><img onclick=\"cambiarTextoDescarga();\" src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /><span onclick=\"cambiarTextoDescarga();\" id=\"textodescarga\"><a href=\"javascript:void(0)\">Descargar</a></span><br/></div>
                        <?php
                        }
                        ?>
                    </div>
                    <p>[+ Agregar descarga]</p>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Requerimientos",
              "seccion" => "Descarga",
              "bloque" => array(array("nombre" => "Requerimientos",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Manual de instalación",
              "seccion" => "Descarga",
              "bloque" => array(array("nombre" => "Manual de instalación",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Versiones anteriores",
              "seccion" => "Descarga",
              "bloque" => array(array("nombre" => "Versiones anteriores",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "API",
              "seccion" => "API",
              "bloque" => array(array("nombre" => "API",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 2",
              "seccion" => "API",
              "bloque" => array(array("nombre" => "Tipo 2",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 3",
              "seccion" => "API",
              "bloque" => array(array("nombre" => "Tipo 3",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 4",
              "seccion" => "API",
              "bloque" => array(array("nombre" => "Tipo 4",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 5",
              "seccion" => "API",
              "bloque" => array(array("nombre" => "Tipo 5",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Publicaciones asociadas",
              "seccion" => "Documentación",
              "bloque" => array(array("nombre" => "Publicaciones asociadas",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                  array("nombre" => "Papers",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL),
                  array("nombre" => "Investigaciones",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Conferencias",
              "seccion" => "Documentación",
              "bloque" => array(array("nombre" => "Conferencias",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Entrevistas",
              "seccion" => "Documentación",
              "bloque" => array(array("nombre" => "Entrevistas",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Pruebas en línea",
              "seccion" => "Pruebas en línea",
              "bloque" => array(array("nombre" => "Pruebas en línea",
                            "informacion" => "Mini manual de cómo usar las pruebas en línea.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Pruebas en consola",
              "seccion" => "Pruebas en línea",
              "bloque" => array(array("nombre" => "Pruebas en consola",
                            "informacion" => "<iframe id=\"conso\" style=\"margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px\" src=\"http://localhost/terminal/\"></iframe>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Demostración de funcionamiento",
              "seccion" => "Pruebas en línea",
              "bloque" => array(array("nombre" => "Demostración de funcionamiento",
                            "informacion" => "<iframe id=\"conso\" style=\"margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px\" src=\"http://localhost:8000/agrupar\"></iframe>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Desempeño",
              "seccion" => "Desempeño",
              "bloque" => array(array("nombre" => "Desempeño",
                            "informacion" => "ESPACIO PARA LA INFORMACIÓN QUE ENVIARÁ EL EQUIPO DE PRUEBAS DE DESEMPEÑO",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Registro",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "Registro",
                            "informacion" => "<div id=\"registro-form\">
            <form><table cellpadding='10'><tr><td><strong>Datos Personales</strong></td></tr>
                    <tr><td>Nombre: </td><td><input type=\"text\" id=\"nombre\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Apellido: </td><td><input type=\"text\" id=\"apellido\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td></tr>
                    <tr><td>Institución: </td><td><input type=\"text\" id=\"institucion\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Ocupación: </td><td><input type=\"text\"  id=\"ocupacion\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td>País de residencia: </td><td><select id=\"pais\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\">
                                <option value=\"\">Seleccione...</option>
<option value=\"Afganistán\">Afganistán</option>
<option value=\"Albania\">Albania</option>
<option value=\"Alemania\">Alemania</option>
<option value=\"Andorra\">Andorra</option>
<option value=\"Angola\">Angola</option>
<option value=\"Anguilla\">Anguilla</option>
<option value=\"Antártida\">Antártida</option>
<option value=\"Antigua y Barbuda\">Antigua y Barbuda</option>
<option value=\"Antillas Holandesas\">Antillas Holandesas</option>
<option value=\"Arabia Saudí\">Arabia Saudí</option>
<option value=\"Argelia\">Argelia</option>
<option value=\"Argentina\">Argentina</option>
<option value=\"Armenia\">Armenia</option>
<option value=\"Aruba\">Aruba</option>
<option value=\"Australia\">Australia</option>
<option value=\"Austria\">Austria</option>
<option value=\"Azerbaiyán\">Azerbaiyán</option>
<option value=\"Bahamas\">Bahamas</option>
<option value=\"Bahrein\">Bahrein</option>
<option value=\"Bangladesh\">Bangladesh</option>
<option value=\"Barbados\">Barbados</option>
<option value=\"Bélgica\">Bélgica</option>
<option value=\"Belice\">Belice</option>
<option value=\"Benin\">Benin</option>
<option value=\"Bermudas\">Bermudas</option>
<option value=\"Bielorrusia\">Bielorrusia</option>
<option value=\"Birmania\">Birmania</option>
<option value=\"Bolivia\">Bolivia</option>
<option value=\"Bosnia y Herzegovina\">Bosnia y Herzegovina</option>
<option value=\"Botswana\">Botswana</option>
<option value=\"Brasil\">Brasil</option>
<option value=\"Brunei\">Brunei</option>
<option value=\"Bulgaria\">Bulgaria</option>
<option value=\"Burkina Faso\">Burkina Faso</option>
<option value=\"Burundi\">Burundi</option>
<option value=\"Bután\">Bután</option>
<option value=\"Cabo Verde\">Cabo Verde</option>
<option value=\"Camboya\">Camboya</option>
<option value=\"Camerún\">Camerún</option>
<option value=\"Canadá\">Canadá</option>
<option value=\"Chad\">Chad</option>
<option value=\"Chile\">Chile</option>
<option value=\"China\">China</option>
<option value=\"Chipre\">Chipre</option>
<option value=\"Ciudad del Vaticano (Santa Sede)\">Ciudad del Vaticano (Santa Sede)</option>
<option value=\"Colombia\">Colombia</option>
<option value=\"Comores\">Comores</option>
<option value=\"Congo\">Congo</option>
<option value=\"Congo, República Democrática del\">Congo, República Democrática del</option>
<option value=\"Corea\">Corea</option>
<option value=\"Corea del Norte\">Corea del Norte</option>
<option value=\"Costa de Marfíl\">Costa de Marfíl</option>
<option value=\"Costa Rica\">Costa Rica</option>
<option value=\"Croacia (Hrvatska)\">Croacia (Hrvatska)</option>
<option value=\"Cuba\">Cuba</option>
<option value=\"Dinamarca\">Dinamarca</option>
<option value=\"Djibouti\">Djibouti</option>
<option value=\"Dominica\">Dominica</option>
<option value=\"Ecuador\">Ecuador</option>
<option value=\"Egipto\">Egipto</option>
<option value=\"El Salvador\">El Salvador</option>
<option value=\"Emiratos Árabes Unidos\">Emiratos Árabes Unidos</option>
<option value=\"Eritrea\">Eritrea</option>
<option value=\"Eslovenia\">Eslovenia</option>
<option value=\"España\">España</option>
<option value=\"Estados Unidos\">Estados Unidos</option>
<option value=\"Estonia\">Estonia</option>
<option value=\"Etiopía\">Etiopía</option>
<option value=\"Fiji\">Fiji</option>
<option value=\"Filipinas\">Filipinas</option>
<option value=\"Finlandia\">Finlandia</option>
<option value=\"Francia\">Francia</option>
<option value=\"Gabón\">Gabón</option>
<option value=\"Gambia\">Gambia</option>
<option value=\"Georgia\">Georgia</option>
<option value=\"Ghana\">Ghana</option>
<option value=\"Gibraltar\">Gibraltar</option>
<option value=\"Granada\">Granada</option>
<option value=\"Grecia\">Grecia</option>
<option value=\"Groenlandia\">Groenlandia</option>
<option value=\"Guadalupe\">Guadalupe</option>
<option value=\"Guam\">Guam</option>
<option value=\"Guatemala\">Guatemala</option>
<option value=\"Guayana\">Guayana</option>
<option value=\"Guayana Francesa\">Guayana Francesa</option>
<option value=\"Guinea\">Guinea</option>
<option value=\"Guinea Ecuatorial\">Guinea Ecuatorial</option>
<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
<option value=\"Haití\">Haití</option>
<option value=\"Honduras\">Honduras</option>
<option value=\"Hungría\">Hungría</option>
<option value=\"India\">India</option>
<option value=\"Indonesia\">Indonesia</option>
<option value=\"Irak\">Irak</option>
<option value=\"Irán\">Irán</option>
<option value=\"Irlanda\">Irlanda</option>
<option value=\"Isla Bouvet\">Isla Bouvet</option>
<option value=\"Isla de Christmas\">Isla de Christmas</option>
<option value=\"Islandia\">Islandia</option>
<option value=\"Islas Caimán\">Islas Caimán</option>
<option value=\"Islas Cook\">Islas Cook</option>
<option value=\"Islas de Cocos o Keeling\">Islas de Cocos o Keeling</option>
<option value=\"Islas Faroe\">Islas Faroe</option>
<option value=\"Islas Heard y McDonald\">Islas Heard y McDonald</option>
<option value=\"Islas Malvinas\">Islas Malvinas</option>
<option value=\"Islas Marianas del Norte\">Islas Marianas del Norte</option>
<option value=\"Islas Marshall\">Islas Marshall</option>
<option value=\"Islas menores de Estados Unidos\">Islas menores de Estados Unidos</option>
<option value=\"Islas Palau\">Islas Palau</option>
<option value=\"Islas Salomón\">Islas Salomón</option>
<option value=\"Islas Svalbard y Jan Mayen\">Islas Svalbard y Jan Mayen</option>
<option value=\"Islas Tokelau\">Islas Tokelau</option>
<option value=\"Islas Turks y Caicos\">Islas Turks y Caicos</option>
<option value=\"Islas Vírgenes (EEUU)\">Islas Vírgenes (EEUU)</option>
<option value=\"Islas Vírgenes (Reino Unido)\">Islas Vírgenes (Reino Unido)</option>
<option value=\"Islas Wallis y Futuna\">Islas Wallis y Futuna</option>
<option value=\"Israel\">Israel</option>
<option value=\"Italia\">Italia</option>
<option value=\"Jamaica\">Jamaica</option>
<option value=\"Japón\">Japón</option>
<option value=\"Jordania\">Jordania</option>
<option value=\"Kazajistán\">Kazajistán</option>
<option value=\"Kenia\">Kenia</option>
<option value=\"Kirguizistán\">Kirguizistán</option>
<option value=\"Kiribati\">Kiribati</option>
<option value=\"Kuwait\">Kuwait</option>
<option value=\"Laos\">Laos</option>
<option value=\"Lesotho\">Lesotho</option>
<option value=\"Letonia\">Letonia</option>
<option value=\"Líbano\">Líbano</option>
<option value=\"Liberia\">Liberia</option>
<option value=\"Libia\">Libia</option>
<option value=\"Liechtenstein\">Liechtenstein</option>
<option value=\"Lituania\">Lituania</option>
<option value=\"Luxemburgo\">Luxemburgo</option>
<option value=\"Macedonia, Ex-República Yugoslava de\">Macedonia, Ex-República Yugoslava de</option>
<option value=\"Madagascar\">Madagascar</option>
<option value=\"Malasia\">Malasia</option>
<option value=\"Malawi\">Malawi</option>
<option value=\"Maldivas\">Maldivas</option>
<option value=\"Malí\">Malí</option>
<option value=\"Malta\">Malta</option>
<option value=\"Marruecos\">Marruecos</option>
<option value=\"Martinica\">Martinica</option>
<option value=\"Mauricio\">Mauricio</option>
<option value=\"Mauritania\">Mauritania</option>
<option value=\"Mayotte\">Mayotte</option>
<option value=\"México\">México</option>
<option value=\"Micronesia\">Micronesia</option>
<option value=\"Moldavia\">Moldavia</option>
<option value=\"Mónaco\">Mónaco</option>
<option value=\"Mongolia\">Mongolia</option>
<option value=\"Montserrat\">Montserrat</option>
<option value=\"Mozambique\">Mozambique</option>
<option value=\"Namibia\">Namibia</option>
<option value=\"Nauru\">Nauru</option>
<option value=\"Nepal\">Nepal</option>
<option value=\"Nicaragua\">Nicaragua</option>
<option value=\"Níger\">Níger</option>
<option value=\"Nigeria\">Nigeria</option>
<option value=\"Niue\">Niue</option>
<option value=\"Norfolk\">Norfolk</option>
<option value=\"Noruega\">Noruega</option>
<option value=\"Nueva Caledonia\">Nueva Caledonia</option>
<option value=\"Nueva Zelanda\">Nueva Zelanda</option>
<option value=\"Omán\">Omán</option>
<option value=\"Países Bajos\">Países Bajos</option>
<option value=\"Panamá\">Panamá</option>
<option value=\"Papúa Nueva Guinea\">Papúa Nueva Guinea</option>
<option value=\"Paquistán\">Paquistán</option>
<option value=\"Paraguay\">Paraguay</option>
<option value=\"Perú\">Perú</option>
<option value=\"Pitcairn\">Pitcairn</option>
<option value=\"Polinesia Francesa\">Polinesia Francesa</option>
<option value=\"Polonia\">Polonia</option>
<option value=\"Portugal\">Portugal</option>
<option value=\"Puerto Rico\">Puerto Rico</option>
<option value=\"Qatar\">Qatar</option>
<option value=\"Reino Unido\">Reino Unido</option>
<option value=\"República Centroafricana\">República Centroafricana</option>
<option value=\"República Checa\">República Checa</option>
<option value=\"República de Sudáfrica\">República de Sudáfrica</option>
<option value=\"República Dominicana\">República Dominicana</option>
<option value=\"República Eslovaca\">República Eslovaca</option>
<option value=\"Reunión\">Reunión</option>
<option value=\"Ruanda\">Ruanda</option>
<option value=\"Rumania\">Rumania</option>
<option value=\"Rusia\">Rusia</option>
<option value=\"Sahara Occidental\">Sahara Occidental</option>
<option value=\"Saint Kitts y Nevis\">Saint Kitts y Nevis</option>
<option value=\"Samoa\">Samoa</option>
<option value=\"Samoa Americana\">Samoa Americana</option>
<option value=\"San Marino\">San Marino</option>
<option value=\"San Vicente y Granadinas\">San Vicente y Granadinas</option>
<option value=\"Santa Helena\">Santa Helena</option>
<option value=\"Santa Lucía\">Santa Lucía</option>
<option value=\"Santo Tomé y Príncipe\">Santo Tomé y Príncipe</option>
<option value=\"Senegal\">Senegal</option>
<option value=\"Seychelles\">Seychelles</option>
<option value=\"Sierra Leona\">Sierra Leona</option>
<option value=\"Singapur\">Singapur</option>
<option value=\"Siria\">Siria</option>
<option value=\"Somalia\">Somalia</option>
<option value=\"Sri Lanka\">Sri Lanka</option>
<option value=\"St Pierre y Miquelon\">St Pierre y Miquelon</option>
<option value=\"Suazilandia\">Suazilandia</option>
<option value=\"Sudán\">Sudán</option>
<option value=\"Suecia\">Suecia</option>
<option value=\"Suiza\">Suiza</option>
<option value=\"Surinam\">Surinam</option>
<option value=\"Tailandia\">Tailandia</option>
<option value=\"Taiwán\">Taiwán</option>
<option value=\"Tanzania\">Tanzania</option>
<option value=\"Tayikistán\">Tayikistán</option>
<option value=\"Territorios franceses del Sur\">Territorios franceses del Sur</option>
<option value=\"Timor Oriental\">Timor Oriental</option>
<option value=\"Togo\">Togo</option>
<option value=\"Tonga\">Tonga</option>
<option value=\"Trinidad y Tobago\">Trinidad y Tobago</option>
<option value=\"Túnez\">Túnez</option>
<option value=\"Turkmenistán\">Turkmenistán</option>
<option value=\"Turquía\">Turquía</option>
<option value=\"Tuvalu\">Tuvalu</option>
<option value=\"Ucrania\">Ucrania</option>
<option value=\"Uganda\">Uganda</option>
<option value=\"Uruguay\">Uruguay</option>
<option value=\"Uzbekistán\">Uzbekistán</option>
<option value=\"Vanuatu\">Vanuatu</option>
<option value=\"Venezuela\">Venezuela</option>
<option value=\"Vietnam\">Vietnam</option>
<option value=\"Yemen\">Yemen</option>
<option value=\"Yugoslavia\">Yugoslavia</option>
<option value=\"Zambia\">Zambia</option>
<option value=\"Zimbabue\">Zimbabue</option>
</select></td></tr>
                    <tr><td style=\"padding-top:50px;\"><strong>Datos de la Cuenta</strong></td></tr>
                    <tr><td>E-mail: </td><td><input type=\"text\" id=\"mail\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Contraseña: </td><td><input type=\"password\" id=\"contrasena\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td>Confirmar contraseña: </td><td><input type=\"password\" id=\"confirmar\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                </table><a href=\"javascript:void(0)\"><img src=\"img/boton-registrar.png\" alt=\"Registrar\" style=\"margin-top: 50px; margin-left: 350px; border:0\" onclick=\"registrar()\"></a></form></div>
            <div id=\"registro-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Recuperar contraseña",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "Recuperar contraseña",
                            "informacion" => "<div id=\"recuperar-form\">
            <br/><br/>Para recuperar su contraseña por favor ingrese el correo electrónico asociado a su cuenta.<br/>
            <input type=\"text\" id=\"correoRecuperarContrasena\" onfocus=\"clearSearch(this);\" placeholder=\"Correo Electr&oacute;nico\" style=\"border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px; margin-left: 300px; margin-top:30px;\" />
            <a href=\"javascript:void(0)\" onclick=\"recuperarClave()\"><img src=\"img/boton-recuperar.png\" width=\"99\" height=\"30\" alt=\"recuperar\" style=\"margin-left: 340px; margin-top:15px; border:0\" /></a>
            </div>
            <div id=\"recuperar-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>
            <div id=\"recuperar-ok\" style=\"display: none; text-align: center; padding-top: 60px;\">
                <strong>Se le ha enviado un correo con las instrucciones para recuperar su contraseña.</strong>
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Contáctanos",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "Contáctanos",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Donar",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "Donar",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Compartir",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "Compartir",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);

echo "Ok fino.";
?>