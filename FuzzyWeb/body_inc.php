 <?php
 if (isset($_GET['e']))
{
    $tipo = "danger";
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
        $mens = "El archivo debe pesar menos de 5MB. Por favor intente de nuevo.";  
        break;
        case 3:
        $mens = "El archivo de debe ser de formato ZIP, RAR o PDF. Por favor intente de nuevo.";  
        break;
        case "ok":
        $mens = "Su descarga ha sido agregada con éxito.";
        $tipo = "success";
        break;
        case "ok-w":
        $mens = "Su aplicación ha sido agregada con éxito.";
        $tipo = "success";
        break;
        default:
        $mens = "Error desconocido. Por favor intente de nuevo.";  
        break;
    }
    ?>
    <div class="alert alert-<?php echo $tipo; ?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <?php echo $mens; ?>
</div>
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
                if ($_SESSION['usertype'] == "U_Administrador")
                    echo "<div style='text-align:right; padding-right:4px;'><a href='?edit=1&sec=".$subs_select."&bloque=".$i."'><button type=\"button\" class=\"btn btn-default\">Editar bloque</button></a></div>";
                if ($i != 0)
                    echo "<a href='#texto-html'><img src='img/up2.png' width='10' heigth='10' alt='Ir al cielo' style='border:0; margin-right: 5px;'/></a>";
                echo "<span style=\"color:#023e44\"><strong>".$subsecs[$subs_select]['bloque'][$i]['nombre']."</strong><br/><br/></span>";
                $filename = (string)time().".php";
                $file = fopen($filename, "w") or die("Error cargando la pagina");
                $text = $subsecs[$subs_select]['bloque'][$i]['informacion'];
                $text = stripcslashes($text);
                fwrite($file, $text);
                fclose($file);
                include ($filename);
                if (($i+1) != count($subsecs[$subs_select]['bloque']))
                    echo "<br/><br/><hr/><br/>";
                echo "</div>";
                unlink($filename);
                
                // Modo desarrollador: Agregar descarga
                if (($_SESSION['usertype'] == "U_Desarrollador" || $_SESSION['usertype'] == "U_Administrador") && $subsecs[$subs_select]['bloque'][$i]['descarga_des'] == "activated") 
                {
                ?>
                <a href="javascript:void(0)" onclick="$('#agregar-descarga<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Agregar descarga nueva]<br/><br/></a>
                <div id="agregar-descarga<?php echo $subs_select ?>" style="display:none">
                    <div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><form id="nueva_desc" method="post" enctype='multipart/form-data' action="process/nuevaDescarga.php"><table><tr><td style="padding-bottom:25px;"><strong>Agregar Descarga</strong><td></tr><tr><td>Nombre</td><td><input type="text" name="nombre" class="form-control" style="height:25px; width:540px;" /></td></tr><tr><td>Descripción</td><td><textarea name="descripcion" class="form-control" style="height:50px; width:540px; "></textarea></td></tr><tr><td>* Archivo</td><td><input type="file" name="archivo" /></td></tr></table><br/><span style="font-size:12px;">* El archivo debe ser de formato zip, rar o pdf y debe pesar menos de 5MB.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 690px; margin-right: 6px;" /><a href="javascript:void(0)" onclick="if (confirm('¿Está seguro que desea subir y publicar este archivo?')) document.getElementById('nueva_desc').submit();">Subir</a>
                            <input type="hidden" name="linkback" value="<?php echo $link."?sec=".$subs_select ?>" />
                            <input type="hidden" name="subsec" value="<?php echo $subsecs[-1][$subs_select]['_id'] ?>" />
                            <input type="hidden" name="bloque" value="<?php echo $i ?>" />
                            
                        </form></div>
                </div>
                <?php
                }
                // Modo desarrollador: Agregar webapp
                if (($_SESSION['usertype'] == "U_Desarrollador" || $_SESSION['usertype'] == "U_Administrador") && $subsecs[$subs_select]['bloque'][$i]['webapp_des'] == "activated") 
                {
                ?>
                <a href="javascript:void(0)" onclick="$('#agregar-webapp<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Agregar aplicación web nueva]<br/><br/></a>
                <div id="agregar-webapp<?php echo $subs_select ?>" style="display:none">
                    <form method="post" action="process/nuevaWebapp.php" id="nueva_app" ><div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><strong>Agregar demostración de funcionamiento</strong><table cellspacing="6" style="margin-top:25px;"><tr><td>Nombre</td><td><input type="text" name="nombre" class="form-control" style="height:25px; width:560px;" /></td></tr><tr><td>Descripción</td><td><textarea name="descripcion" class="form-control" style="height:50px; width:560px;"></textarea></td></tr><tr><td>URL *</td><td><input type="text" name="archivo" class="form-control" style="height:25px; width:560px;" /></td></tr></table><br/><span style="font-size:12px;">* Este URL debe contener un sitio web que actualmente este usando FuzzydoDB para su funcionamiento interno.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 660px; margin-right: 6px;" /> <a href="javascript:void(0)" onclick="if (confirm('¿Está seguro que desea publicar esta aplicación?')) document.getElementById('nueva_app').submit();">Agregar</a><br/></div>
                            <input type="hidden" name="linkback" value="<?php echo $link."?sec=".$subs_select ?>" />
                            <input type="hidden" name="subsec" value="<?php echo $subsecs[-1][$subs_select]['_id']; ?>" />
                            <input type="hidden" name="bloque" value="<?php echo $i ?>" />
                            
                        </form></div>
                </div>
                <?php
                }
                
                for($j=0; $j < count($subsecs[-1][$subs_select]['bloque'][$i]['descarga']); $j++)
                {
                    echo "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">";
                    echo "<strong>".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Publicado por "."<a href=\"javascript:void(0)\" onclick=\"cargarPerfil('".($subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['autor'])."')\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"color:#1B1B1B;\" >".get_nombreUsuario($subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['autor'])."</a></span>"."<br/><br/>";
                    echo $subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";             
                    if ($_SESSION["ss_key"] == $G_SKEY)
                        if ($_SESSION["usertype"] == "U_Administrador")
                            echo "<span class=\"glyphicon glyphicon-pencil\"></span> <a href='?edit=2&sec=".$subs_select."&bloque=".$i."&desc=".$j."''>Editar descarga</a> - <img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> <a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['path']."\">Descargar</a>";
                        else
                            echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> <a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['path']."\" target=\"_blank\">Descargar</a>";
                    else
                        echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /><span onclick=\"cambiarTextoDescarga(this);\"><a href=\"javascript:void(0)\">Descargar</a></span>";
                    echo "<br/></div></div>";

                }
                
                for($j=0; $j < count($subsecs[-1][$subs_select]['bloque'][$i]['webapp']); $j++)
                {
                    echo "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">";
                    echo "<strong>".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Publicado por "."<a href=\"javascript:void(0)\" onclick=\"cargarPerfil('".($subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['autor'])."')\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"color:#1B1B1B;\" >".get_nombreUsuario($subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['autor'])."</a></span>"."<br/><br/>";
                    echo $subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";       
                    if ($_SESSION["usertype"] == "U_Administrador")
                        echo "<span class=\"glyphicon glyphicon-pencil\"></span> <a href='?edit=3&sec=".$subs_select."&bloque=".$i."&app=".$j."''>Editar webapp</a> - <img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['path']."\" target='_blank'>Ir a la aplicación</a>";
                    else
                        echo "<img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['path']."\" target='_blank'>Ir a la aplicación</a>";
                    echo "<br/></div></div>";
                }
               
            }
            ?>