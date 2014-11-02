<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Comunidad_p";
$seccion2 = "Comunidad";
$link = "comunidad_p.php";
include_once ('body.php');

?>
