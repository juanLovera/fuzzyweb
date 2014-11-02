<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Descarga";
$link = "descarga.php";
include_once ('body.php');

?>
