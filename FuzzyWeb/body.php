<?php
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
$subsecs = get_subsecciones($seccion, $seccion2);
if (isset($_GET['sec']))
    $subs_select = $_GET['sec'];
else
    $subs_select = 0;

if (!is_numeric($subs_select))
    die ("Error catastrofico.");
if ($subs_select < 0 || $subs_select >= count($subsecs))
    die ("Error catastrofico.");

if ($_GET['AJAX'] != "active")
{
include ("header.php");
?>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
                <?php
                for ($i=0; $i<count($subsecs); $i++)
                {
                    if ($i ==  $subs_select)
                        echo "<div id=\"selected\" class=\"boton\" onClick=\"cambiarPagina('".$i."',this,'".$link."')\" style=\"background-image:url(img/boton_seleccionado.png); font-weight:bold\">".$subsecs[$i]['nombre']."</div>";
                    else   
                        echo "<div class=\"boton\" onClick=\"cambiarPagina('".$i."',this,'".$link."')\" onMouseOver=\"this.style.fontWeight='bold'\" onMouseOut=\"this.style.fontWeight=''\">".$subsecs[$i]['nombre']."</div>";
                    
                }
                ?>
            	  
            </div>

            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <div id="texto-html">    
            <?php
            }
            if (count($subsecs[$subs_select]['bloque']) > 1)
            {
               echo "<div id=\"menusuperior\" style=\"position: absolute; top: -5; left: 335px; width:850px;font-size:14px; color:#023e44\">";
               for($i=1; $i < count($subsecs[$subs_select]['bloque']); $i++)
               {
                   echo "<a href='#text".$i."'>".$subsecs[$subs_select]['bloque'][$i]['nombre']."</a>&nbsp;&nbsp; |&nbsp;&nbsp; ";
               }
               echo "</div><div style='padding-top:30px; height:1px;'></div>"; 
               
            }

                
            for($i=0; $i < count($subsecs[$subs_select]['bloque']); $i++)
            {
                
                echo "<div id='text".$i."' style='margin-bottom: 7px;'>";
                if ($i != 0)
                    echo "<a href='#texto-html'><img src='img/up2.png' width='10' heigth='10' alt='Ir al cielo' style='border:0; margin-right: 5px;'/></a>";
                echo "<span style=\"color:#023e44\"><strong>".$subsecs[$subs_select]['bloque'][$i]['nombre']."</strong><br/><br/></span>";
                $filename = (string)time().".php";
                $file = fopen($filename, "w") or die("Error cargando la pagina");
                $text = $subsecs[$subs_select]['bloque'][$i]['informacion'];
                $text = str_replace("\\\"", "\"", $text);
                fwrite($file, $text);
                fclose($file);
                include ($filename);
                if (($i+1) != count($subsecs[$subs_select]['bloque']))
                    echo "<br/><br/><hr/><br/>";
                echo "</div>";
                unlink($filename);
                
                // Modo desarrollador: Agregar descarga
                if ($_SESSION['usertype'] == "U_Desarrollador" && $subsecs[$subs_select]['bloque'][$i]['descarga_des'] == "activated") 
                {
                ?>
                <a href="javascript:void(0)" onclick="$('#agregar-descarga<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Agregar descarga nueva]<br/><br/></a>
                <div id="agregar-descarga<?php echo $subs_select ?>" style="display:none">
                    <div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><form id="nueva_desc" method="post" enctype='multipart/form-data' action="process/nuevaDescarga.php"><table><tr><td style="padding-bottom:25px;"><strong>Agregar Descarga</strong><td></tr><tr><td>Nombre</td><td><input type="text" name="nombre" style="border: 1px solid #045d6f; border-radius:5px; height:25px; width:540px; padding-left:8px;" /></td></tr><tr><td>Descripción</td><td><textarea name="descripcion" style="border: 1px solid #045d6f; border-radius:5px; height:50px; width:540px; padding-left:8px;"></textarea></td></tr><tr><td>* Archivo</td><td><input type="file" name="archivo" /></td></tr></table><br/><span style="font-size:12px;">* El archivo debe ser de formato zip, rar o pdf y debe pesar menos de 5MB.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 690px; margin-right: 6px;" /><a href="javascript:void(0)" onclick="if (confirm('¿Está seguro que desea subir y publicar este archivo?')) document.getElementById('nueva_desc').submit();">Subir</a>
                            <input type="hidden" name="linkback" value="<?php echo $link."?sec=".$subs_select ?>" />
                            <input type="hidden" name="subsec" value="<?php echo $subsecs[$subs_select]['_id'] ?>" />
                            <input type="hidden" name="bloque" value="<?php echo $i ?>" />
                            
                        </form></div>
                </div>
                <?php
                }
                // Modo desarrollador: Agregar webapp
                if ($_SESSION['usertype'] == "U_Desarrollador" && $subsecs[$subs_select]['bloque'][$i]['webapp_des'] == "activated") 
                {
                ?>
                <a href="javascript:void(0)" onclick="$('#agregar-webapp<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Agregar aplicación web nueva]<br/><br/></a>
                <div id="agregar-webapp<?php echo $subs_select ?>" style="display:none">
                    <form method="post" action="process/nuevaWebapp.php" id="nueva_app" ><div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><strong>Agregar demostración de funcionamiento</strong><table cellspacing="6" style="margin-top:25px;"><tr><td>Nombre</td><td><input type="text" name="nombre" style="border: 1px solid #045d6f; border-radius:5px; height:25px; width:560px; padding-left:8px;" /></td></tr><tr><td>Descripción</td><td><textarea name="descripcion" style="border: 1px solid #045d6f; border-radius:5px; height:50px; width:560px; padding-left:8px;"></textarea></td></tr><tr><td>URL *</td><td><input type="text" name="archivo" style="border: 1px solid #045d6f; border-radius:5px; height:25px; width:560px; padding-left:8px;" /></td></tr></table><br/><span style="font-size:12px;">* Este URL debe contener un sitio web que actualmente este usando FuzzydoDB para su funcionamiento interno.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 660px; margin-right: 6px;" /> <a href="javascript:void(0)" onclick="if (confirm('¿Está seguro que desea publicar esta aplicación?')) document.getElementById('nueva_app').submit();">Agregar</a><br/></div>
                            <input type="hidden" name="linkback" value="<?php echo $link."?sec=".$subs_select ?>" />
                            <input type="hidden" name="subsec" value="<?php echo $subsecs[$subs_select]['_id'] ?>" />
                            <input type="hidden" name="bloque" value="<?php echo $i ?>" />
                            
                        </form></div>
                </div>
                <?php
                }
                
                for($j=0; $j < count($subsecs[$subs_select]['bloque'][$i]['descarga']); $j++)
                {
                    echo "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">";
                    echo "<strong>".$subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Publicado por ".get_nombreUsuario($subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['autor'])."</span>"."<br/><br/>";
                    echo $subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";             
                    if ($_SESSION["ss_key"] == $G_SKEY)
                        echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> <a href=\"".$subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['path']."\">Descargar</a>";
                    else
                        echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /><span onclick=\"cambiarTextoDescarga(this);\"><a href=\"javascript:void(0)\">Descargar</a></span>";
                    echo "<br/></div></div>";

                }
                
                for($j=0; $j < count($subsecs[$subs_select]['bloque'][$i]['webapp']); $j++)
                {
                    echo "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">";
                    echo "<strong>".$subsecs[$subs_select]['bloque'][$i]['webapp'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[$subs_select]['bloque'][$i]['webapp'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Publicado por ".get_nombreUsuario($subsecs[$subs_select]['bloque'][$i]['webapp'][$j]['autor'])."</span>"."<br/><br/>";
                    echo $subsecs[$subs_select]['bloque'][$i]['webapp'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";       
                    echo "<img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=\"".$subsecs[$subs_select]['bloque'][$i]['webapp'][$j]['path']."\" target='_blank'>Ir a la aplicación</a>";
                    echo "<br/></div></div>";
                }
               
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
include ("footer.php");
}
?>