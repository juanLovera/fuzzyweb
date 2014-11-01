<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
include_once("../inc/includes.inc.php");
$paso = $_GET['paso'];

// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;
$cursor = $coleccion->findOne(array("correo" => $_SESSION['email']));

if ($paso == "1")
{
    $nombre = (string)htmlentities($_GET['nombre']);
    $apellido = (string)htmlentities($_GET['apellido']);
    $ocupacion = (string)htmlentities($_GET['ocupacion']);
    $institucion = (string)htmlentities($_GET['institucion']);
    $pais = (string)htmlentities($_GET['pais']);
    
    if (empty($nombre))
    {
        die("Debe ingresar un Nombre válido.");
    }
    
    if (empty($apellido))
    {
        die("Debe ingresar un Apellido válido.");
    }
    
     if (empty($ocupacion))
    {
        die("Debe ingresar una Ocupación válida.");
    }
    
     if (empty($institucion))
    {
        die("Debe ingresar una Institución válida.");
    }
    
     if (empty($pais))
    {
        die("Debe ingresar un País válido.");
    }   
    
    $newdata = array('$set' => array("nombre" => $nombre, "apellido" => $apellido, "ocupacion" => $ocupacion,
        "institucion" => $institucion, "pais" => $pais));
    $cursor = $coleccion->update(array("correo" => $_SESSION['email']), 
                                 $newdata);
    
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['institucion'] = $institucion;
    $_SESSION['ocupacion'] = $ocupacion;
    $_SESSION['ubicacion'] = $pais;

} elseif ($paso == "2")
{
    $mail = (string)htmlentities($_GET['mail']);
    
     if (empty($mail) || !preg_match("/^[_a-zA-Z0-9-]+(.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*(.[a-zA-Z]{2,3})$/",$mail))
    {
        die("Debe ingresar un Correo válido.");
    }
    $cursor = $coleccion->findOne(array("correo" => $mail));
    if ($cursor != NULL)
    {
        die("El correo ingresado ya está registrado. Por favor, intente con otro.");
    }
    $newdata = array('$set' => array("correo" => $mail));
    $cursor = $coleccion->update(array("correo" => $_SESSION['email']), 
                                 $newdata);

    $_SESSION['email'] = $mail;

} else 
{
    $contrasena = (string)htmlentities($_GET['contrasena']);
    $confirmar = (string)htmlentities($_GET['confirmar']);
    
    if (strlen($contrasena) < 8 || strlen($contrasena) > 12)
    {
        die("La clave debe tener entre 8 y 12 digitos.");
    }
    if ($confirmar != $contrasena)
    {
        die("Las claves introducidas no coinciden.");
    }
    
    $contrasena = encriptar_pass($contrasena);
    $newdata = array('$set' => array("contrasena" => $contrasena));
    $cursor = $coleccion->update(array("correo" => $_SESSION['email']), 
                                 $newdata);
}
echo "OK";
?>