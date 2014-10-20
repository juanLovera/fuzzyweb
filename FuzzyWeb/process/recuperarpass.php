<?php
/* 
 * recuperarpass.php
 * Recibe email y envia correo para recuperar password
 */
include_once("../inc/includes.inc.php");

$mail = (string)htmlentities($_GET['mail']);
$paso = $_GET['paso'];

// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;

if (empty($mail))
{
    die("Debe ingresar un correo válido.");
}

// Se verifica si el usuario existe
$cursor = $coleccion->findOne(array("correo" => $mail));
if ($cursor == NULL)
{
    die("No se ha encontrado el correo especificado.");
}
$confirmacion = encriptar_pass($cursor['contrasena']);

if ($paso == 1)
{
    // Todo OK. Se procede a enviar correo de confirmacion
    // Codigo de recuperacion es pass encriptado
    $asunto = "Recupera tu clave de FuzzyDB";
    $mensaje = "Hemos recibido una solicitud para recuperar tu clave de la comunidad FuzzyDB.\n\n";
    $mensaje .= "Haz click en el siguiente link para crear una contraseña nueva:\n";
    $mensaje .= "http://localhost/recuperar.php?mail=".$mail."&con=".$confirmacion;
    $mensaje .= "\n\nHaz caso omiso de este correo si no lo solicitaste.";
    if (mail($mail, $asunto, $mensaje))
    {
        die ("OK");
    }

    echo "No se pudo enviar el correo de recuperación. Por favor, inténtelo de nuevo.";
}
else
{
    if ($confirmacion != $_GET['conf'])
    {
        die("Código de confirmación inválido.");
    }
    if (strlen($contrasena) < 8 || strlen($contrasena) > 12)
    {
        die("La clave debe tener entre 8 y 12 digitos.");
    }
    if ($confirmar != $contrasena)
    {
        die("Las claves introducidas no coinciden.");
    }
    $contrasena = encriptar_pass($cursor['contrasena']);
    $cursor = $coleccion->update(array("correo" => $mail), 
                                 array("contrasena" => $contrasena));
    echo "OK";
}
?>
