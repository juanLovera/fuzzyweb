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
                            "webapp" => NULL),
                          array("nombre" => "Historia",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => NULL,
                            "webapp" => NULL)
                  ));
$coleccion->insert($subs);


echo "Ok fino.";
?>