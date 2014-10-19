<?php
/* 
 * functions.inc.php
 * Lista de funciones necesarias para dentro del sitio.
 */
define(DB_NAME, "fuzzy"); // Nombre de bd a usar

// Crea una conexion con Mongo y devuelve el objeto
function conectar_db()
{
    $db = new Mongo();
    $db->selectDB(DB_NAME);
    return $db;
}
?>
