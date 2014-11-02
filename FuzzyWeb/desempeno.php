<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("public");

$seccion = "Desempeño";
$link = "desempeno.php";
include_once ('body.php');

?>
