<?php
/* 
 * save_admin.php
 * Modifica titulo y html de un bloque.
 * MODO ADMINISTRADOR
 */
session_start();
include_once("../inc/includes.inc.php");
comprobar_sesion("U_Administrador");
$nombre = (string)htmlentities($_POST['nombrebloque']);
$info = (string)set_code($_POST['content']);
$link_back = (string)htmlentities($_POST['linkback']);
$subsec = (string)htmlentities($_POST['subsec']);
$bloque = (string)htmlentities($_POST['bloque']);
$db = conectar_db();
$coleccion = $db->subseccion; 
$filter = array('_id'=> new MongoId($subsec));
$update = array('$set'=>array('bloque.'.$bloque.'.informacion' =>$info,'bloque.'.$bloque.'.nombre' => $nombre));
$coleccion->update($filter,$update);

header("Location: ../".$link_back);
?>