<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Acerca";
$link = "acerca.php";
include_once ('inc/body.inc.php');

?>
