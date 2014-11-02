<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("not_public");

$seccion = "Perfil";
$link = "perfil.php";
include_once ('body.php');

?>
