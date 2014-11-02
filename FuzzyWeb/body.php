<?php
$subsecs = get_subsecciones($seccion);
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
                
                echo "<div id='text".$i."'>";
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