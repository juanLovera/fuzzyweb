<?php
/* 
 * signout.php
 * Destruye sesion.
 */
include_once("../inc/includes.inc.php");
$idioma = $_SESSION['idioma'];
session_destroy();
header("Location: ../");
?>
