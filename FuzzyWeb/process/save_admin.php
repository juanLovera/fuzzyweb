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
$edit = (string)htmlentities($_POST['edit']);
$desc = (string)htmlentities($_POST['desc']);
$app = (string)htmlentities($_POST['app']);
$url = (string)htmlentities($_POST['urlapp']);
$eliminar = htmlentities($_POST['eliminar']);
$db = conectar_db();
$coleccion = $db->subseccion; 
$filter = array('_id'=> new MongoId($subsec));
if ($edit == 1)
    $update = array('$set'=>array('bloque.'.$bloque.'.informacion' =>$info,'bloque.'.$bloque.'.nombre' => $nombre));
elseif ($edit == 2)
{
    if ($eliminar == 1)
    {
        $update = array('$unset'=>array('bloque.'.$bloque.'.descarga.'.$desc => 1));
        $coleccion->update($filter,$update);
        $update = array('$pull'=>array('bloque.'.$bloque.'.descarga' => NULL));
    }
    else
        $update = array('$set'=>array('bloque.'.$bloque.'.descarga.'.$desc.".nombre" =>$nombre,'bloque.'.$bloque.'.descarga.'.$desc.".descripcion" => $info));

}
elseif ($edit == 3)
{
    if ($eliminar == 1)
    {
        $update = array('$unset'=>array('bloque.'.$bloque.'.webapp.'.$app => 1));
        $coleccion->update($filter,$update);
        $update = array('$pull'=>array('bloque.'.$bloque.'.webapp' => NULL));
    }
    else
        $update = array('$set'=>array('bloque.'.$bloque.'.webapp.'.$app.".nombre" =>$nombre,'bloque.'.$bloque.'.webapp.'.$app.".descripcion" => $info,'bloque.'.$bloque.'.webapp.'.$app.".path" => $url));
}
else
    die("Oh no. Algo no esta bien.");
$coleccion->update($filter,$update);

header("Location: ../".$link_back);
?>