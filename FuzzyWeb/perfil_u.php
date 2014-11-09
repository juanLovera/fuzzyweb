<?php
session_start();
include_once("inc/includes.inc.php");
if(isset($_GET["idUsuario"]))
    $user = get_usuario($_GET["idUsuario"]);
?>

<form id="formcorreo" method="GET" action="perfil_u.php" >
    <input type="text" id="idUsuario" name="idUsuario">
    <input type="submit" value="enter">
</form>


<div style="border: 1px solid #045d6f; border-radius:5px; height:150px; width:150px"></div>
            <div style="float:right; margin-top: -140px; margin-right: -30px; width:700px;">
            <table cellpadding="10">
                <tr><td><strong>Nombre: </strong></td><td><?php echo $user['nombre']; ?></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><?php echo $user['apellido']; ?></td></tr>
                <tr><td><strong>Correo: </strong></td><td><a href="mailto:<?php echo $user['correo']; ?>"><?php echo $user['correo']; ?></a></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><?php echo $user['institucion']; ?></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><?php echo $user['ocupacion']; ?></td><td style="padding-left:50px"><strong>País de residencia: </strong></td><td><?php echo $user['ubicacion']; ?></td></tr>
                   </table>
            </div>
