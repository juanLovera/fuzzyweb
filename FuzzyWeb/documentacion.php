<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Documentación";
$link = "documentacion.php";
include_once ('body.php');

?>
