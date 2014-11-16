<?php
/* 
 * signout.php
 * Destruye sesion.
 */
session_start();
include_once("../inc/includes.inc.php");
session_destroy();
header("Location: ../");
?>
