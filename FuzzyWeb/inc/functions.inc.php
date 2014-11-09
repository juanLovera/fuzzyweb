<?php
/* 
 * functions.inc.php
 * Lista de funciones necesarias para dentro del sitio.
 */

// Crea una conexion con Mongo y devuelve el objeto
function conectar_db()
{
    $db = new MongoClient();
    $db = $db->fuzzy;
    return $db;
}

function encriptar_pass($pass)
{
    return md5("%&/(9".sha1($pass));
}

function get_subsecciones($seccion, $seccion2 = NULL)
{
    $db = conectar_db();
    $coleccion = $db->subseccion;
    $cursor = $coleccion->find(array("seccion" => $seccion));
    $i = 0;
    $cursor->sort(array('_id' => 1));
    foreach ($cursor as $doc)
    {
        $subs[$i] = $doc;
        $i++;
    }
    if ($seccion2 != NULL)
    {
        $cursor = $coleccion->find(array("seccion" => $seccion2));
        foreach ($cursor as $doc)
        {
            $subs[$i] = $doc;
            $i++;
        }      
    }
    return $subs;
}
/*
 * Devuelve true si el usuario inicio sesion y false si no ha iniciado. Ademas 
 * si se pasa $acceso esta verifica que el tipo de usuario sea el correcto y si
 * no lo es, no deja cargar la pagina.
 */
function comprobar_sesion($acceso = "public", $link = "index.php") // $acceso puede ser: public, not_public, U_Normal, ...
{ 
    if ($_SESSION["ss_key"] != $G_SKEY)
        $ini = true;
    else
        $ini = false;
    
    if ($acceso == "public")
        return $ini;
    elseif ($acceso == "not_public" && $ini)
        return $ini;
    
    elseif ($ini && $acceso == $_SESSION["usertype"])
        return $ini;
    else
    {
        header("Location: ".$link);
        exit;
    }
}


//Hola, esta funcion si esta documentada
//Permite encontrar el nombre del usuario
function get_nombreUsuario($id)
{
    //Se conecta a la BD
    $db = conectar_db();
    $coleccion = $db->usuario;


    // Se verifica si el usuario existe
    $cursor = $coleccion->findOne(array("_id" => $id));
    
    // Se retorna el nombre
    return $cursor['nombre']." ".$cursor['apellido'];
}


//Hola, esta funcion si esta documentada
//Permite encontrar el nombre del usuario
function get_usuario($id_Usuario)
{
    //Se conecta a la BD
    $db = conectar_db();
    $coleccion = $db->usuario;


    // Se verifica si el usuario existe
    $cursor = $coleccion->findOne(array("_id" => new MongoId($id_Usuario)));
    
    // Se retorna el nombre
    return $cursor;
}

function image_gd($file,$max_w) 
{ 
	//Separamos las extenciones de archivos para definir el tipo de ext. 
	$extension = explode(".",$file); 
	$ext = count($extension)-1; 
	
	//Determinamos las extenciones permitidas. 
	if($extension[$ext] == "jpg" || $extension[$ext] == "jpeg" || $extension[$ext] == "JPG" || $extension[$ext] == "JPEG") 
	{ 
		$image = imagecreatefromjpeg($file); 
	} 
	else if($extension[$ext] == "gif" || $extension[$ext] == "GIF" )
	{ 
		$image = imagecreatefromgif($file); 
	}	 
	else if($extension[$ext] == "png" || $extension[$ext] == "PNG")
	{ 
		$image = imagecreatefrompng($file); 
	} 
	else 
	{ 
		return false;
	} 

	$thumb_name = substr($file,0,-4);
	$width = imagesx($image);
	$height = imagesy($image);

	if ($width > $max_w) 
	{
		$nueva_anchura = $max_w; 
		$nueva_altura = ($nueva_anchura * $height) / $width ;
	}
	else
	{
		$nueva_anchura = $width; 
		$nueva_altura = $height;
	}

	if (function_exists("imagecreatetruecolor")) 
	{ 
		$thumb = ImageCreateTrueColor($nueva_anchura, $nueva_altura);
	} 

	if (!$thumb) $thumb = ImageCreate($nueva_anchura, $nueva_altura); 

	imagecopyresampled($thumb, $image, 0, 0, 0, 0, $nueva_anchura, $nueva_altura, $width, $height);
	imagejpeg($thumb, $thumb_name.".jpg", 100); 
	imagedestroy($image); 

	return $image; 
} 
?>
