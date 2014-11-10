<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fuzzydoDB</title>
<link href='css/font.css' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
<link href='css/main.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
<?php
if (isset($localcss))
for($i=0; $i< count($localcss); $i++)
{
    echo "<link href=\"".$localcss[$i]."\" rel='stylesheet' type='text/css'>";
}

if (isset($localjs))
for($i=0; $i< count($localjs); $i++)
{
    echo "<script type=\"text/javascript\" src=\"".$localjs[$i]."\"></script>";
}
?></head>

<body>
<div id="top_banner" style="background-image:url(img/bg_banner.jpg); height:148px; width:100%">
    <div id="marco_centrado" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
       <?php
            if ($_SESSION["ss_key"] != $G_SKEY)
            { // Visitante no registrado
            ?>
        <div id="marco_signin" style="width:329px; height: 212px; background-image: url(img/signin_bg.png); top:55px; left:675px; position:absolute; z-index: 100; display: none">
            <div id="form-inicio">
                <form onsubmit="iniciarSesion();return false;">
            <input class="form-control" id="barra_signin_correo" type="text" placeholder="Correo Electr&oacute;nico" style="width:233px; height:25px; margin-left: 25px; margin-top:25px;"/>
            <input class="form-control" id="barra_signin_contrasena" placeholder="Contrase&ntilde;a" type="password" style="width:233px; height:25px; margin-left: 25px; margin-top:17px;"/>
            <div style="font-size:12px; margin-top:5px; margin-left:25px;">
                    <a href="comunidad.php" style="color:#1B1B1B;" >Registrarse</a> 
                &nbsp; -&nbsp;  <a href="comunidad_p.php?sec=1" style="color:#1B1B1B;" >¿Olvid&oacute; su contrase&ntilde;a?</a>
                </div>
            <button type="submit" class="btn btn-custom" style="margin-left: 200px; margin-top:15px;">Iniciar Sesión</button>
            </form>
            </div>
            <div id="signin-loading" style="text-align: center; display: none; padding-top: 60px; font-size: 13px">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="signin-error" style="text-align: center; display: none; font-size: 13px; padding-top: 80px;">
                <span style="color: #a10000"><strong>Los datos ingresados son incorrectos.</strong></span><br/><br/><a href="javascript:void(0)" onclick="$('#signin-error').hide();$('#form-inicio').show();">Volver a intentar</a>
            </div>
        </div>
        <button id="botoniniciarsesion" onclick="abrirSignIn()" class="btn btn-custom" style="position:absolute; left:870px; top:20px;">Iniciar Sesión <span id="iniciarsesionflecha" class="glyphicon glyphicon-chevron-down" style="font-size: 10px; margin-left: 5px;"></span></button>
       
        <?php
           } // Usuario registrado
           else
           {
        ?>
        <div id="signedinuser" style="position:absolute; left:195px; top:20px; width: 800px; font-size: 14px; text-align: right"> <a href="perfil.php" ><?php echo $_SESSION['nombre']; ?></a> <span class="glyphicon glyphicon-user"></span> 
        <?php
        if ($_SESSION['usertype'] == "U_Administrador")
        {
        ?>
        <a class="btn btn-custom" href="usuarios.php" style="margin-left: 11px; color:#FFF;">Gestionar Usuarios</a>
        <?php
        }
        ?>
        <a class="btn btn-custom" href="process/signout.php" style="margin-left: 11px; color:#FFF;" id="botoncerrarsesion">Cerrar Sesión</a></div>
        <?php
           }
        ?>
        <div id="logo" style="background-image:url(img/logo.png); width:231px; height:51px; position:absolute; top: 45px;"></div>
        <div class="input-group" style="position:absolute; left:1010px; top:20px; width:160px;">
        <input id="barra_busqueda" type="text" class="form-control" placeholder="Buscar" style="height: 21px; width: 120px;" />
        <span class="input-group-btn">
          <button class="btn btn-custom" type="button" style="height: 21px"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
      
        <div id="menu" style="position: absolute; left: 263px; top: 84px;"><a href="index.php"><img src="img/menu_03.png" width="71" height="27" alt="Inicio" style="border:0" /></a><a href="acerca.php"><img src="img/menu_04.png" width="97" height="27" alt="Acerca" style="border:0" /></a><a href="descarga.php"><img src="img/menu_05.png" width="114" height="26" alt="Descarga" style="border:0" /></a><a href="api.php"><img src="img/menu_06.png" width="60" height="26" alt="API" style="border:0" /></a><a href="documentacion.php"><img src="img/menu_07.png" width="176" height="26" alt="Documentacion" style="border:0"/></a><a href="pruebas.php"><img src="img/menu_08.png" width="170" height="26" alt="Pruebas en linea" style="border:0"/></a><a href="desempeno.php"><img src="img/menu_09.png" width="127" height="26" alt="Desempeno" style="border:0"/></a><a href="comunidad.php"><img src="img/menu_10.png" width="121" height="26" alt="Contribuye" style="border:0" /></a></div>
  </div>
</div>

