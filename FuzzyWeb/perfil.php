<?php
session_start();
include_once("inc/includes.inc.php");

comprobar_sesion("not_public");
$localjs = array('js/jquery.Jcrop.js', 'js/crop.js');
$localcss = array('css/jquery.Jcrop.css');
$seccion = "Perfil";
$link = "perfil.php";
include_once ('inc/body.inc.php');

?>
