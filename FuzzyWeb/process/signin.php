<?php
/* 
 * signup.php
 * Recibe campos y procesa el registro de un nuevo usuario.
 */
session_start();
include_once("../inc/includes.inc.php");

$mail = (string)htmlentities($_GET['mail']);
$contrasena = (string)htmlentities($_GET['contrasena']);

// Se encripta clave
$contrasena = encriptar_pass($contrasena);

if (empty($mail) || empty($contrasena))
{
    die("ERROR");
}

// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;


// Se verifica si el usuario existe
$cursor = $coleccion->findOne(array("correo" => $mail, "contrasena" => $contrasena));
if ($cursor == NULL)
{
    die("ERROR");
}
// Todo OK. Se procede a crear sesion
$_SESSION['ss_key'] = $G_SKEY;
$_SESSION['email'] = $cursor['correo'];
$_SESSION['nombre'] = $cursor['nombre'];
$_SESSION['apellido'] = $cursor['apellido'];
$_SESSION['institucion'] = $cursor['institucion'];
$_SESSION['ocupacion'] = $cursor['ocupacion'];
$_SESSION['ubicacion'] = $cursor['ubicacion'];
$_SESSION['usertype'] = $cursor['tipo'];
if ($cursor['foto'] == NULL)
{
    $_SESSION['pic_id'] = "fotoPerfil.png";
}
 else 
{
    $_SESSION['pic_id'] = $cursor['foto'];
}
$_SESSION['id'] = $cursor['_id'];

echo "OK";
?>
