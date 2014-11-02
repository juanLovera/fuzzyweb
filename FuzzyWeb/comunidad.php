<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Comunidad";
$link = "comunidad.php";
include_once ('body.php');

?>
