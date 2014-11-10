<?php 

if ($_POST['formpass'] != "wough9348y3**")
	die("No autorizado"); 

// AQUI FALTA COLOCAR CORREO
$to = "rebe.porras@gmail.com";
$from = $_POST['email']; 
$nombre = $_POST['nombre'];
$comentarios = $_POST['comentarios'];

if (empty($from) || empty($nombre) || empty($comentarios))
	die("Debe llenar todos los campos.");
	
if (!preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/",$from))
	die("El correo electrónico ingresado tiene un formato incorrecto. Este debe ser de la forma 'usuario@host.com'. Por favor, intente de nuevo.");
	
$message = $nombre . "\n\n" . $comentarios;
$headers = "From:" . $from;

// AQUI FALTA COLOCAR CORREO
if (!mail($to,"Comentario en el Portal del Proyecto fuzzydoDB",$message,$headers))
	die("Su correo no pudo ser enviado. Intente de nuevo.");

// AQUI FALTA LLAMAR A UNA PAGINA QUE AGRADEZCA COMENTARIO
header('Location: ../index.php');

?>