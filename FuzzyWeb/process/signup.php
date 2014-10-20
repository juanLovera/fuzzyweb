<?php
/* 
 * signup.php
 * Recibe campos y procesa el registro de un nuevo usuario.
 */
include_once("../inc/includes.inc.php");

$mail = (string)htmlentities($_GET['mail']);
$nombre = (string)htmlentities($_GET['nombre']);
$apellido = (string)htmlentities($_GET['apellido']);
$contrasena = (string)htmlentities($_GET['contrasena']);
$confirmar = (string)htmlentities($_GET['confirmar']);
$ubicacion = (string)htmlentities($_GET['ubicacion']);
$institucion = (string)htmlentities($_GET['institucion']);
$ocupacion = (string)htmlentities($_GET['ocupacion']);

if (empty($mail) || empty($nombre) || empty($apellido) || empty($contrasena)
    || empty($confirmar) || empty($ubicacion) ||empty($institucion) || 
    empty($ocupacion))
{
    die("Debe llenar todos los campos para completar el registro.");
}
if (strlen($contrasena) < 8 || strlen($contrasena) > 12)
{
    die("La clave debe tener entre 8 y 12 digitos.");
}
if ($confirmar != $contrasena)
{
    die("Las claves introducidas no coinciden.");
}
if (!preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/",$mail))
{
    die("Ha insertado un correo con formato inválido.");
}


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
echo "OK";

?>
