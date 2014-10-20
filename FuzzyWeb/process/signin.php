<?php
/* 
 * signup.php
 * Recibe campos y procesa el registro de un nuevo usuario.
 */
include_once("../inc/includes.inc.php");

$mail = (string)htmlentities($_GET['mail']);
$contrasena = (string)htmlentities($_GET['contrasena']);


if (empty($mail) || empty($contrasena))
{
    die("Debe ingresar su Email y su contraseña");
}

// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;

// Se encripta clave
$contrasena = encriptar_pass($contrasena);

// Se verifica si el email ya existe
$cursor = $coleccion->find(array("correo" => $mail));
$cursor = iterator_to_array($cursor);
if (count($cursor) != 0)
{
    die("El email ingresado ya se encuentra registrado.");
}

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
echo "OK";

?>
