<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("../inc/includes.inc.php");

$db = conectar_db();

$coleccion = $db->subseccion;

$subs = array("nombre" => "Introducción",
            "seccion" => "Acerca",
            "bloque" => array("nombre" => "Introducción",
                            "informacion" => ""));
?>