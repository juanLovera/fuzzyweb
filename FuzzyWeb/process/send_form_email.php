<?php 
session_start();
include_once("../inc/includes.inc.php");

if ($_POST['formpass'] != "wough9348y3**")
	die("No autorizado"); 

$from = $_POST['email']; 
$nombre = $_POST['nombre'];
$comentarios = $_POST['comentarios'];
if (empty($from) || empty($nombre) || empty($comentarios))
{
        header('Location: ../comunidad_p.php?sec=3&res=err');
        exit;
}

if (!preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/",$from))
{
	header('Location: ../comunidad_p.php?sec=3&res=err');
	exit;
}

$db = conectar_db();
$coleccion = $db->usuario;
$cursor = $coleccion->find(array("tipo" => "U_Administrador"));

foreach ($cursor as $doc)
{
        $to = $doc['correo'];
	$message = "Nombre: ".$nombre ."\n\nCorreo: ".$from."\n\nMensaje: " . $comentarios."\n\n\n** Este correo ha sido enviado desde el portal web de FuzzydoDB a todos los administradores del sitio.**";
	@mail($to,"Comentario en el Portal del Proyecto fuzzydoDB",$message);
}

header('Location: ../comunidad_p.php?sec=3&res=ok');

?>
