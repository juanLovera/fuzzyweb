<?php
session_start();
include_once("../inc/includes.inc.php");
comprobar_sesion("not_public");

if ($_POST['paso']==1){
$file_name = $_FILES['preview']['name'];
$file_temp_name = $_FILES['preview']['tmp_name'];
$file_size = $_FILES['preview']['size'];
$file_type = $_FILES['preview']['type'];

if (empty($file_name)) {
header("Location: ../perfil.php?sec=2&er=1");
exit;
}

if ($file_size > 2097152) {
header("Location: ../perfil.php?sec=2&er=3");
exit;
}
if($file_type != "image/pjpeg" && $file_type != "image/jpeg" && $file_type != "image/png" && $file_type != "image/gif") {
header("Location: ../perfil.php?sec=2&er=2");
exit;
}

$prefijo = md5(uniqid(rand()));
$extension = explode(".",$file_name); 
$ext = count($extension)-1; 
$img= $prefijo.".".strtolower($extension[$ext]);
$imgJPEG= $prefijo.".jpg";
$destino =  "../img/avatar/temp/".$img; // Temporal
$destinoJPEG =  "../img/avatar/temp/".$imgJPEG; // Temporal
if (copy($_FILES['preview']['tmp_name'],$destino))
{
if (image_gd($destino,450))
{
	list($pic_width, $pic_height) = getimagesize($destinoJPEG);
	if ($pic_width < 124 || $pic_height < 116)
	{
		@unlink($destinoJPEG); // Se borra imagen
		if ($extension[$ext] != "jpg" && $extension[$ext] != "JPG")
		@unlink($destino); // Se borra copia en otro formato
		header("Location: ../perfil.php?sec=2&e=4"); //Imagen muy pequena
		exit;
	}
	$_SESSION['upload_temp_name'] = "img/avatar/temp/".$imgJPEG; 
	$_SESSION['upload_w'] = $pic_width;
	$_SESSION['upload_h'] = $pic_height;
	if ($extension[$ext] != "jpg" && $extension[$ext] != "JPG")
		@unlink($destino); // Se borra copia en otro formato
	header("Location: ../perfil.php?sec=2&paso=1");
	exit;
}
else
{
	header("Location: ../perfil.php?sec=2&er=5");
	exit;	
}
}
}
//header("Location: ../perfil.php?sec=2&er=5");
	exit;	

?>
