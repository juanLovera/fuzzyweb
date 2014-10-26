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
?>
