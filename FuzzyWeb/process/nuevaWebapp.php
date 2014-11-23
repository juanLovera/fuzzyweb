<?php
/* 
 * nuevaDescarga.php
 * Recibe campos y procesa una nueva descarga.
 * MODO DESARROLLADOR
 */
session_start();
include_once("../inc/includes.inc.php");
comprobar_sesion("U_Desarrollador", "index.php", "U_Administrador");
$nombre = (string)htmlentities($_POST['nombre']);
$descripcion = (string)htmlentities($_POST['descripcion']);
$archivo = (string)htmlentities($_POST['archivo']);
$link_back = (string)htmlentities($_POST['linkback']);
$subsec = (string)htmlentities($_POST['subsec']);
$bloque = (string)htmlentities($_POST['bloque']);

if (empty($nombre) || empty($descripcion) || empty($archivo))
{
    header("Location: ../".$link_back."&e=8");
    exit;
}
if (strlen($nombre) > 40)
{
    header("Location: ../".$link_back."&e=8");
    exit;
}
if (strlen($descripcion) > 270)
{
    header("Location: ../".$link_back."&e=8");
    exit;
}
if (!(@file_get_contents($archivo)))
{
    header("Location: ../".$link_back."&e=9");
    exit;  
}

   $db = conectar_db();
   $coleccion = $db->subseccion; 
   $nuevaDesc = array("nombre" => $nombre,
                      "fecha" => date("d/m/Y"),
                      "descripcion" => $descripcion,
                      "path" => $archivo,
                      "autor" => $_SESSION['id']);
   $filter = array('_id'=> new MongoId($subsec));
   $update = array('$push'=>array('bloque.'.$bloque.'.webapp' =>$nuevaDesc));
   $coleccion->update($filter,$update);
   header("Location: ../".$link_back."&e=ok-w");
   exit;

?>
