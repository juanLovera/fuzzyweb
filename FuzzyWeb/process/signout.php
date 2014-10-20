<?php
/* 
 * signup.php
 * Recibe campos y procesa el registro de un nuevo usuario.
 */
session_start();
include_once("../inc/includes.inc.php");

session_destroy();

header("Location: ../");
?>
