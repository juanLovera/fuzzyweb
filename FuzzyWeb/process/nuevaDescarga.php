<?php
/* 
 * nuevaDescarga.php
 * Recibe campos y procesa una nueva descarga.
 */
include_once("../inc/includes.inc.php");

$nombre = (string)htmlentities($_POST['nombre']);
$descripcion = (string)htmlentities($_POST['descripcion']);
$linkback = (string)htmlentities($_POST['linkback']);

if (empty($nombre) || empty($descripcion) || empty($archivo))
{
    die("Debe llenar todos los campos para agregar una descarga.");
}
if (strlen($nombre) > 40)
{
    die("El nombre no debe contener mas de 40 digitos.");
}
if (strlen($descripcion) > 270)
{
    die("La descripcion no debe contener mas de 270 caracteres.");
}

$file_name = $_FILES['archivo']['name'];
$file_temp_name = $_FILES['archivo']['temp_name'];
$file_size = $_FILES['archivo']['size'];
$file_type = $_FILES['archivo']['type'];

if (empty($file_name)) {
header("Location: ../".$link_back."?e=1");
exit;
}

if ($file_size > 2097152) {
header("Location: ../".$link_back."?e=2");
exit;
}

$prefijo = md5(uniqid(rand()));
$extension = explode(".",$file_name); 
$ext = count($extension)-1;

if($ext != "zip" && $ext != "rar" && $ext != "pdf") {
header("Location: ../".$link_back."?e=3");
exit;
}
$img= $prefijo.".".strtolower($extension[$ext]);
$destino =  "/downloads/".$img; // Temporal
if (copy($_FILES['up_avatar']['tmp_name'],$destino))
{
    
}
header("Location: ../".$link_back."?e=4");
// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;

// Se verifica si el email ya existe
$cursor = $coleccion->find(array("correo" => $mail));
$cursor = iterator_to_array($cursor);
if (count($cursor) != 0)
{
    die("El email ingresado ya se encuentra registrado.");
}
// Se encripta clave
$contrasena = encriptar_pass($contrasena);

// Todo OK. Se procede a realizar el registro
$user = array(
    "nombre" => $nombre,
    "apellido" => $apellido,
    "correo" => $mail,
    "tipo" => "U_Normal",
    "ubicacion" => $ubicacion,
    "ocupacion" => $ocupacion,
    "institucion" => $institucion,
    "contrasena" => $contrasena
);

$coleccion->insert($user);
header("Location: signin.php?mail=".$mail."&contrasena=".$confirmar);

?>
