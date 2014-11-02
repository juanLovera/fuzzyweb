<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "API";
$link = "api.php";
include_once ('body.php');

?>
