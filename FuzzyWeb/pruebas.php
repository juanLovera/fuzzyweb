<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Pruebas en línea";
$link = "pruebas.php";
include_once ('body.php');

?>
