<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("not_public", "comunidad_p.php");

$seccion = "Comunidad";
$link = "comunidad.php";
include_once ('inc/body.inc.php');

?>
