<?php
session_start();
include_once("inc/includes.inc.php");
if(isset($_GET["idUsuario"]))
    $user = get_usuario($_GET["idUsuario"]);
if ($user['foto'] != "")
	$fotou = $user['foto'];
else
	$fotou = "fotoPerfil.png";
?>

<div style="width:750px;display: table">
<div style="border: 1px solid #045d6f; border-radius:5px; height:150px; margin-bottom: 20px; width:150px; margin-left: 20px; margin-top: 20px; float:left"><img src="img/avatar/<?php echo $fotou; ?>" alt="foto" width="150" height="150" /></div>
            <div style="float:left; margin-top: 20px; margin-right: 20px; margin-left: 20px; width:400px;">
            <table cellpadding="10">
                <tr><td><strong>Nombre: </strong></td><td><?php echo $user['nombre']; ?></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><?php echo $user['apellido']; ?></td></tr>
                <tr><td><strong>Correo: </strong></td><td><a href="mailto:<?php echo $user['correo']; ?>"><?php echo $user['correo']; ?></a></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><?php echo $user['institucion']; ?></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><?php echo $user['ocupacion']; ?></td><td style="padding-left:50px"><strong>País de residencia: </strong></td><td><?php echo $user['ubicacion']; ?></td></tr>
                   <tr><td><strong>Tipo de usuario: </strong></td><td><?php if ($user['tipo']=="U_Normal")
                                                                        echo "Usuario Participante";
                                                                        elseif($user['tipo']=="U_Desarrollador")
                                                                        echo "Usuario Desarrollador";
                                                                        else
                                                                        echo "Usuario Administrador"?></td></tr>
                   </table>
            </div>
</div>
