<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("U_Administrador");

$seccion = "Usuarios";
$link = "usuarios.php";
include_once ('inc/body.inc.php');

?>
