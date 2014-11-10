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
$link_back = (string)htmlentities($_POST['linkback']);
$subsec = (string)htmlentities($_POST['subsec']);
$bloque = (string)htmlentities($_POST['bloque']);

if (empty($nombre) || empty($descripcion))
{
    header("Location: ../".$link_back."&e=5");
    exit;
}
if (strlen($nombre) > 40)
{
    header("Location: ../".$link_back."&e=5");
    exit;
}
if (strlen($descripcion) > 270)
{
    header("Location: ../".$link_back."&e=5");
    exit;
}
$file_name = $_FILES['archivo']['name'];
$file_temp_name = $_FILES['archivo']['tmp_name'];
$file_size = $_FILES['archivo']['size'];
$file_type = $_FILES['archivo']['type'];
if (empty($file_name)) {
header("Location: ../".$link_back."&e=1");
exit;
}
if ($file_size > 5097152) {
header("Location: ../".$link_back."&e=2");
exit;
}
$prefijo = md5(uniqid(rand()));
$extension = explode(".",$file_name); 
$ext = count($extension)-1;
if($extension[$ext] != "zip" && $extension[$ext] != "rar" && $extension[$ext] != "pdf"
    && $extension[$ext] != "ZIP" && $extension[$ext] != "RAR" && $extension[$ext] != "PDF") {
header("Location: ../".$link_back."&e=3");
exit;
}
$img= $prefijo.".".strtolower($extension[$ext]);
$destino =  "../downloads/".$img; // Temporal
if (copy($file_temp_name, $destino))
{
   $db = conectar_db();
   $coleccion = $db->subseccion; 
   $nuevaDesc = array("nombre" => $nombre,
                      "fecha" => date("d/m/Y"),
                      "descripcion" => $descripcion,
                      "path" => $destino,
                      "autor" => $_SESSION['id']);
   $filter = array('_id'=> new MongoId($subsec));
   $update = array('$push'=>array('bloque.'.$bloque.'.descarga' =>$nuevaDesc));
   $coleccion->update($filter,$update);
   header("Location: ../".$link_back."&e=ok");
   exit;
}
header("Location: ../".$link_back."&e=10");
?>