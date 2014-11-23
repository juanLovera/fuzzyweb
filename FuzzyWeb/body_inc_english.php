 <?php
 if (isset($_GET['e']))
{
    $tipo = "danger";
    switch($_GET['e'])
    {
        case 5:
        $mens = "The name of the download must contain less than 40 characters and the description less than 270. Please try again.";  
        break;
        case 8:
        $mens = "The name of the webapp must contain less than 40 characters and the description less than 270. Please try again.";  
        break;
        case 9:
        $mens = "The app URL doesn't seem to be valid. Please try again.";  
        break;
        case 1:
        $mens = "You must select a file to upload. Please try again.";  
        break;
        case 2:
        $mens = "The file must be less than 5MB. Please try again.";  
        break;
        case 3:
        $mens = "Your file must be .PDF, .RAR or .ZIP. Please try again.";  
        break;
        case "ok":
        $mens = "Your download has been added.";
        $tipo = "success";
        break;
        case "ok-w":
        $mens = "Your app has been added.";
        $tipo = "success";
        break;
        default:
        $mens = "Unknow error. Please try again.";  
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
                    echo "<div style='text-align:right; padding-right:4px;'><a href='?edit=1&sec=".$subs_select."&bloque=".$i."'><button type=\"button\" class=\"btn btn-default\">Edit content</button></a></div>";
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
                <a href="javascript:void(0)" onclick="$('#agregar-descarga<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Add new download]<br/><br/></a>
                <div id="agregar-descarga<?php echo $subs_select ?>" style="display:none">
                    <div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><form id="nueva_desc" method="post" enctype='multipart/form-data' action="process/nuevaDescarga.php"><table><tr><td style="padding-bottom:25px;"><strong>New download</strong><td></tr><tr><td>Name</td><td><input type="text" name="nombre" class="form-control" style="height:25px; width:540px;" /></td></tr><tr><td>Description</td><td><textarea name="descripcion" class="form-control" style="height:50px; width:540px; "></textarea></td></tr><tr><td>* File</td><td><input type="file" name="archivo" /></td></tr></table><br/><span style="font-size:12px;">* The file must be .PDF, .RAR or .ZIP.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 690px; margin-right: 6px;" /><a href="javascript:void(0)" onclick="if (confirm('Are you sure you want to upload this file?')) document.getElementById('nueva_desc').submit();">Add</a>
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
                <a href="javascript:void(0)" onclick="$('#agregar-webapp<?php echo $subs_select ?>').slideDown('fast'); this.style.display='none'">[+ Add new web-app]<br/><br/></a>
                <div id="agregar-webapp<?php echo $subs_select ?>" style="display:none">
                    <form method="post" action="process/nuevaWebapp.php" id="nueva_app" ><div style="background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;"><strong>Add functional demostration</strong><table cellspacing="6" style="margin-top:25px;"><tr><td>Name</td><td><input type="text" name="nombre" class="form-control" style="height:25px; width:560px;" /></td></tr><tr><td>Description</td><td><textarea name="descripcion" class="form-control" style="height:50px; width:560px;"></textarea></td></tr><tr><td>URL *</td><td><input type="text" name="archivo" class="form-control" style="height:25px; width:560px;" /></td></tr></table><br/><span style="font-size:12px;">* The app must be using FuzzydoDB as database handler.</span><br/><img src="img/subir_icono.png" width="16" height="16" alt="Descargar" style="margin-left: 660px; margin-right: 6px;" /> <a href="javascript:void(0)" onclick="if (confirm('Are you sure you want to upload the webapp?')) document.getElementById('nueva_app').submit();">Add</a><br/></div>
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
                    echo "<strong>".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Uploaded by "."<a href=\"javascript:void(0)\" onclick=\"cargarPerfil('".($subsecs[$subs_select]['bloque'][$i]['descarga'][$j]['autor'])."')\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"color:#1B1B1B;\" >".get_nombreUsuario($subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['autor'])."</a></span>"."<br/><br/>";
                    echo $subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";             
                    if ($_SESSION["ss_key"] == $G_SKEY)
                        if ($_SESSION["usertype"] == "U_Administrador")
                            echo "<span class=\"glyphicon glyphicon-pencil\"></span> <a href='?edit=2&sec=".$subs_select."&bloque=".$i."&desc=".$j."''>Edit download</a> - <img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> <a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['path']."\">Download</a>";
                        else
                            echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /> <a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['descarga'][$j]['path']."\" target=\"_blank\">Download</a>";
                    else
                        echo "<img src=\"img/descarga_icono.png\" width=\"16\" height=\"16\" alt=\"Descargar\" style=\"margin-right: 6px\" /><span onclick=\"cambiarTextoDescarga(this);\"><a href=\"javascript:void(0)\">Download</a></span>";
                    echo "<br/></div></div>";

                }
                
                for($j=0; $j < count($subsecs[-1][$subs_select]['bloque'][$i]['webapp']); $j++)
                {
                    echo "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">";
                    echo "<strong>".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['nombre']."</strong> - <span style=\"color:#828282\">".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['fecha']."</span>"."</br><span style=\"font-size:13px\"> Added by "."<a href=\"javascript:void(0)\" onclick=\"cargarPerfil('".($subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['autor'])."')\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\" style=\"color:#1B1B1B;\" >".get_nombreUsuario($subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['autor'])."</a></span>"."<br/><br/>";
                    echo $subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['descripcion']."<br/><br/><div style=\"padding-left:100px; text-align:right;\">";       
                    if ($_SESSION["usertype"] == "U_Administrador")
                        echo "<span class=\"glyphicon glyphicon-pencil\"></span> <a href='?edit=3&sec=".$subs_select."&bloque=".$i."&app=".$j."''>Edit webapp</a> - <img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['path']."\" target='_blank'>Go to the app</a>";
                    else
                        echo "<img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=\"".$subsecs[-1][$subs_select]['bloque'][$i]['webapp'][$j]['path']."\" target='_blank'>Go to the app</a>";
                    echo "<br/></div></div>";
                }
               
            }
            ?>