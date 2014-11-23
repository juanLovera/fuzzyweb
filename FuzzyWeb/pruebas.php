<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion();

$seccion = "Pruebas en línea";
$link = "pruebas.php";
include_once ('inc/body.inc.php');

?>
