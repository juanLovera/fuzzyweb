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
        $_SESSION['pic_id'] = $imgJPEG; 
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

else{
    $pic_id = $_SESSION['upload_temp_name'];
    $x = $_POST['x']; //ux
    $w = $_POST['w']; //ux2
    $y = $_POST['y']; //uy
    $h = $_POST['h']; //uy2
    $uheight = $h;
    $uwidth = $w;
    if (!is_numeric($x) || !is_numeric($w) || !is_numeric($y) || !is_numeric($h)) // Comprobamos que sean cordenadas validas
        die("Coordenadas invalidas");
    if ($uheight == 0 || $uwidth == 0) // Comprobamos que haya seleccionado algo
        die("No hay area seleccionada");
    if ($uwidth / $uheight != 1)
        die("Dimensiones inapriopiadas");
    if ($uwidth <= 50 || $uheight <= 50)
        die("Imagen muy pequena");

    $img_r = imagecreatefromjpeg("../".$pic_id);
    $dst_r = ImageCreateTrueColor(150, 150);
//    $dst_r2 = ImageCreateTrueColor(26, 24);
    
    $ok = imagecopyresampled($dst_r,$img_r,0,0,$x,$y,150,150,$uwidth,$uheight);
    $ok1 = imagejpeg($dst_r, "../img/avatar/".$_SESSION['pic_id'], 100); //?
//    $ok2 = imagecopyresampled($dst_r2,$img_r,0,0,$ux,$uy,26,24,$uheight,$uheight);
//    $ok3 = imagejpeg($dst_r2, GC_PATH_USER_SMALL_AVATAR_PATH.$pic_id.".jpg", 100);
    imagedestroy($img_r);
    @unlink("../".$pic_name);
    
//    if (!$ok)
//        die("OK");
    if(!$ok1)
        die("OK1");
    
    if ($ok && $ok1)
    {
        //Conexion BD
        $db = conectar_db();
        $coleccion = $db->usuario;
        
        $mail = $_SESSION['email'];
        if (empty($mail))
        {
            die("ERROR."); 
        }
        $cursor = $coleccion->findOne(array("correo" => $mail));
        if ($cursor == NULL)
        {
            die("ERROR.");
        }
        @unlink($cursor["foto"]);
        $newdata = array('$set' => array("foto" => $_SESSION['pic_id']));
        $cursor = $coleccion->update(array("correo" => $mail), 
                                 $newdata);
        
        
//        unset($_SESSION['upload_temp_name']);//?
//        unset($_SESSION['upload_w']);//?
//        unset($_SESSION['upload_h']);//?
//        $_SESSION['user_avatar_type'] = 1;//?
        
        echo "we cool";
        header("Location: ../perfil.php"); // Todo salio bien//?
        exit;//?
    }
    else
    {
        die("no lo logre");
//        header("Location: ../perfil.php"); // Error//?
        exit;	
    }
}
    

//header("Location: ../perfil.php?sec=2&er=5");
	exit;	

?>
