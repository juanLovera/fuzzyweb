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

function get_subsecciones($seccion)
{
    $db = conectar_db();
    $coleccion = $db->subsecciones;
    $cursor = $coleccion->find(array("seccion" => $seccion));
    $i = 0;
    foreach ($cursor as $doc) {
        $subs[$i] = $doc;
        $i++;
    }
    return $subs;
}
/*
 * Devuelve true si el usuario inicio sesion y false si no ha iniciado. Ademas 
 * si se pasa $acceso esta verifica que el tipo de usuario sea el correcto y si
 * no lo es, no deja cargar la pagina.
 */
function comprobar_sesion($acceso = "public") // $acceso puede ser: public, not_public, U_Normal, ...
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
        header("Location: index.php");
        exit;
    }
}
?>
