<?php

if ($_SESSION['usertype'] != "U_Administrador")
    die("Debe ser un admin para acceder.");
/*
 * Se muestran error si existen
 */
if (isset($_GET['e']))
{
    switch($_GET['e'])
    {
        case 5:
        $mens = "El nombre de la descarga debe contener menos de 40 caracteres y la descripcion menos de 270. Además, estos no pueden estár vacíos. Por favor intente de nuevo.";  
        break;
        case 8:
        $mens = "El nombre de la Webapp debe contener menos de 40 caracteres y la descripcion menos de 270. Además, ningún campo puede estár vacío. Por favor intente de nuevo.";  
        break;
        case 9:
        $mens = "El URL de la aplicación en línea no parece ser válido. Por favor intente de nuevo.";  
        break;
        case 1:
        $mens = "Debe seleccionar un archivo para subir. Por favor intente de nuevo.";  
        break;
        case 2:
        $mens = "El archivo de debe pesar más de 5MB. Por favor intente de nuevo.";  
        break;
        case 3:
        $mens = "El archivo de debe ser de formato ZIP, RAR o PDF. Por favor intente de nuevo.";  
        break;
        case "ok":
        $mens = "Su descarga ha sido agregada con éxito.";  
        break;
        case "ok-w":
        $mens = "Su aplicación ha sido agregada con éxito.";  
        break;
        default:
        $mens = "Error desconocido. Por favor intente de nuevo.";  
        break;
    }
    echo "<script>alert('".$mens."');</script>";
}
if (!isset($coleccion2))
    $coleccion2 = NULL;
$subsecs = get_subsecciones($seccion, $seccion2, true);
if (isset($_GET['sec']))
    $subs_select = $_GET['sec'];
else
    $subs_select = 0;

if (!is_numeric($subs_select))
    die ("Error catastrofico.");
if ($subs_select < 0 || $subs_select >= count($subsecs))
    die ("Error catastrofico.");

if (isset($_GET['bloque']))
    $bloque_select = $_GET['bloque'];
else
    $bloque_select = 0;

if (!is_numeric($bloque_select))
    die ("Error catastrofico.");
if ($bloque_select < 0 || $bloque_select >= count($subsecs[$subs_select]['bloque']))
    die ("Error catastrofico.");

if (isset($_GET['desc']))
    $desc_select = $_GET['desc'];
else
    $desc_select = 0;

if (!is_numeric($desc_select))
    die ("Error catastrofico.");
if ($desc_select < 0)
    die ("Error catastrofico.");

if (isset($_GET['app']))
    $app_select = $_GET['app'];
else
    $app_select = 0;

if (!is_numeric($app_select))
    die ("Error catastrofico.");
if ($app_select < 0)
    die ("Error catastrofico.");
// Se selecciona el idioma
if ($_SESSION['idioma'] != "ENG")
    $includeslang = "";
else
    $includeslang = "_english";

if ($_GET['AJAX'] != "active")
{

include ("header".$includeslang.".php");
?>
<div id="barra_azul" style="background-image:url(img/barradifuminada.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
                <?php
                for ($i=0; $i<count($subsecs)-1; $i++)
                {
                    if ($i ==  $subs_select)
                        echo "<div id=\"selected\" class=\"subseccionboton\" onClick=\"cambiarPagina('".$i."',this,'".$link."')\" style=\"background-image:url(img/boton_seleccionado.png); font-weight:bold\">".$subsecs[$i]['nombre']."</div>";
                    else   
                        echo "<div class=\"subseccionboton\" onClick=\"cambiarPagina('".$i."',this,'".$link."')\" onMouseOver=\"this.style.fontWeight='bold'\" onMouseOut=\"this.style.fontWeight=''\">".$subsecs[$i]['nombre']."</div>";
                    
                }
                ?>
            	  
            </div>

            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <div id="texto-html">
               
                <?php
                }
                include("./body_admin_inc".$includeslang.".php");
                if ($_GET['edit'] == 1)
                {
                ?>
                <script>
                $('#summernote').summernote({
                    width: 840,
                    height: 300//,
                    //codemirror: { // codemirror options
                      //theme: 'monokai'
                    //}
                  });
                </script>
                <?php
                }

            if ($_GET['AJAX'] != "active")
            {
            ?>
           
      </div>
          <div id="text-form-loading" style="text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
           </div>
                
           
    </div>
    </div>
    <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
</div>
</div>
<?php
include ("footer".$includeslang.".php");
}
?>
