<?php
session_start();
include_once("../inc/includes.inc.php");
comprobar_sesion("U_Administrador");
$user = (string)htmlentities($_GET['user']);
$e = (string)htmlentities($_GET['e']);
$p = (string)htmlentities($_GET['p']);
// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;
$filtro = array("_id" => new MongoId($user));

if ($e == "1")
{
    if ($p == 1)
        $usertype = "U_Normal";
    elseif ($p == 2)
        $usertype = "U_Desarrollador";
    elseif ($p == 3)
         $usertype = "U_Administrador";
    
    $newdata = array('$set' => array("tipo" => $usertype));
    $cursor = $coleccion->update($filtro, 
                                 $newdata);
    header("Location: ../usuarios.php?sec=0&res=ok");

} elseif ($e == "2")
{
   $cursor = $coleccion->remove($filtro, 
                                  array("justOne" => true));
   header("Location: ../usuarios.php?sec=1&res=ok");

} 
?>