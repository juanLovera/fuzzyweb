<?php
/* 
 * idioma.php
 * Cambia idioma de la pagina
 */
session_start();
include_once("../inc/includes.inc.php");

$link_back = (string)htmlentities($_GET['linkback']);
$idioma = (string)htmlentities($_GET['lang']);

if ($idioma == "ESP")
    $_SESSION['idioma'] = "ESP";
else
    $_SESSION['idioma'] = "ENG";
header("Location: ../".$link_back);
?>
