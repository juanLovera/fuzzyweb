<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fuzzy USB</title>
<link href='css/font.css' rel='stylesheet' type='text/css'>
<link href='css/main.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>

<body>
<div id="top_banner" style="background-image:url(img/bg_banner.jpg); height:148px; width:100%">
    <div id="marco_centrado" style="margin-left:auto; margin-right:auto; width:1200px; position:relative;">
       <?php
            if ($_SESSION["ss_key"] != $G_SKEY)
            { // Visitante no registrado
            ?>
        <div id="marco_signin" style="width:329px; height: 212px; background-image: url(img/signin_bg.png); top:50px; left:674px; position:absolute; z-index: 100; display: none">
            <div id="form-inicio">
                <form onsubmit="iniciarSesion();return false;">
            <input id="barra_signin_correo" onfocus="clearSearch(this);" type="text" placeholder="Correo Electr&oacute;nico" style="font-size:12px; color:#B1B1B1; background-image:url(img/signin_input.png); width:233px; height:38px; border-width:0; padding-left:8px; padding-right:4px; margin-left: 25px; margin-top:25px; font-size:12px;"/>
            <input id="barra_signin_contrasena" placeholder="Contrase&ntilde;a" onfocus="clearSearch(this);" type="password" style="font-size:12px; color:#B1B1B1; background-image:url(img/signin_input.png); width:233px; height:38px; border-width:0; padding-left:8px; padding-right:4px; margin-left: 25px; margin-top:17px; font-size:12px;"/>
            <div style="font-size:12px; margin-top:5px; margin-left:25px;">
                    <a href="comunidad.php" style="color:#1B1B1B;" >Registrarse</a> 
                &nbsp; -&nbsp;  ¿Olvid&oacute; su contrase&ntilde;a?
                </div>
            <a href="javascript:void(0)"><input type="image" src="img/boton-ingresar.png" width="99" height="30" alt="ingresar" style="margin-left: 205px; margin-top:15px; border:0" /></a>
            </form>
            </div>
            <div id="signin-loading" style="text-align: center; display: none; padding-top: 60px; font-size: 13px">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="signin-error" style="text-align: center; display: none; font-size: 13px; padding-top: 80px;">
                <span style="color: #a10000"><strong>Los datos ingresados son incorrectos.</strong></span><br/><br/><a href="javascript:void(0)" onclick="$('#signin-error').hide();$('#form-inicio').show();">Volver a intentar</a>
            </div>
        </div>
        <img id="botoniniciarsesion" onclick="abrirSignIn()" src="img/boton-iniciarS.png" width="121" height="30" alt="iniciar sesión" style="position:absolute; left:880px; top:20px; cursor: pointer" />
        <?php
           } // Usuario registrado
           else
           {
        ?>
        <div id="signedinuser" style="position:absolute; left:680px; top:25px; width: 200px; font-size: 13px; text-align: right"><a href="perfil.php"><?php echo $_SESSION['nombre']; ?></a></div>
        <a href="process/signout.php"><img id="botoncerrarsesion" src="img/boton-cerrar.png" width="99" height="30" alt="Cerrar sesión" style="position:absolute; left:895px; top:20px;" /></a>
        <?php
           }
        ?>
        <div id="logo" style="background-image:url(img/logo.png); width:138px; height:62px; position:absolute; top: 45px;"></div>
      <input id="barra_busqueda" onfocus="clearSearch(this);" type="text" placeholder="Buscar" style="position:absolute; font-size:12px; color:#B1B1B1; left:1020px; top:20px; background-image:url(img/barra_busqueda.png); width:138px; height:27px; border-width:0; padding-left:4px; padding-right:36px;" />
        <div id="menu" style="position: absolute; left: 263px; top: 84px;"><a href="index.php"><img src="img/menu_03.png" width="71" height="27" alt="Inicio" style="border:0" /></a><a href="acerca.php"><img src="img/menu_04.png" width="97" height="27" alt="Acerca" style="border:0" /></a><a href="descarga.php"><img src="img/menu_05.png" width="114" height="26" alt="Descarga" style="border:0" /></a><a href="api.php"><img src="img/menu_06.png" width="60" height="26" alt="API" style="border:0" /></a><a href="documentacion.php"><img src="img/menu_07.png" width="176" height="26" alt="Documentacion" style="border:0"/></a><a href="pruebas.php"><img src="img/menu_08.png" width="170" height="26" alt="Pruebas en linea" style="border:0"/></a><a href="desempeno.php"><img src="img/menu_09.png" width="127" height="26" alt="Desempeno" style="border:0"/></a><a href="comunidad.php"><img src="img/menu_10.png" width="121" height="26" alt="Contribuye" style="border:0" /></a></div>
  </div>
</div>

