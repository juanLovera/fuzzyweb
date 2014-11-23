 <form action="process/save_admin.php" method="post" enctype="multipart/form-data" onsubmit="return postForm()">
            <?php
                 
                if ($_GET['edit'] == 1)
                {
                    echo "<strong>Nombre</strong><br/>";
                    echo "<input type=\"text\" class=\"form-control\" name=\"nombrebloque\" style=\"width:815px; height: 20px;\" value=\"".$subsecs[$subs_select]['bloque'][$bloque_select]['nombre']."\" />";
                    echo "<br/><strong>Contenido</strong><br/>";	
                    echo "<textarea id=\"summernote\" name=\"content\" style=\"margin-top:10px;\">";


                    $text = $subsecs[$subs_select]['bloque'][$bloque_select]['informacion'];
                    $text = get_code($text);
                    echo $text; 

                    echo "</textarea>";
                }
                if ($_GET['edit'] == 2)
                {
                    echo "<strong>Nombre</strong><br/>";
                    echo "<input type=\"text\" class=\"form-control\" name=\"nombrebloque\" style=\"width:815px; height: 20px;\" value=\"".$subsecs[-1][$subs_select]['bloque'][$bloque_select]['descarga'][$desc_select]['nombre']."\" />";
                    echo "<br/><strong>Descripción</strong><br/>";	
                    echo "<input type=\"text\" class=\"form-control\" name=\"content\" style=\"width:815px; height: 40px;\" value=\"".$subsecs[-1][$subs_select]['bloque'][$bloque_select]['descarga'][$desc_select]['descripcion']."\" />";
                ?><br/>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="eliminar" value="1"/> Eliminar esta descarga
                    </label>
                </div>
                <?php
                }
                if ($_GET['edit'] == 3)
                {
                    echo "<strong>Nombre</strong><br/>";
                    echo "<input type=\"text\" class=\"form-control\" name=\"nombrebloque\" style=\"width:815px; height: 20px;\" value=\"".$subsecs[-1][$subs_select]['bloque'][$bloque_select]['webapp'][$app_select]['nombre']."\" />";
                    echo "<br/><strong>Descripción</strong><br/>";	
                    echo "<input type=\"text\" class=\"form-control\" name=\"content\" style=\"width:815px; height: 40px;\" value=\"".$subsecs[-1][$subs_select]['bloque'][$bloque_select]['webapp'][$app_select]['descripcion']."\" />";
                    echo "<br/><strong>URL de aplicación</strong><br/>";	
                    echo "<input type=\"text\" class=\"form-control\" name=\"urlapp\" style=\"width:815px; height: 20px;\" value=\"".$subsecs[-1][$subs_select]['bloque'][$bloque_select]['webapp'][$app_select]['path']."\" />";
 
                    ?><br/>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="eliminar" value="1"/> Eliminar esta webapp
                    </label>
                </div>
                <?php
                }
                ?>
                <input type="hidden" name="linkback" value="<?php echo $link."?sec=".$subs_select ?>" />
                <?php
		if ($_GET['edit'] == 1)
		{
		?>
		<input type="hidden" name="subsec" value="<?php echo $subsecs[$subs_select]['_id'] ?>" />
                <?php } else { ?>
		<input type="hidden" name="subsec" value="<?php echo $subsecs[-1][$subs_select]['_id'] ?>" />
		<?php } ?>
		<input type="hidden" name="bloque" value="<?php echo $bloque_select ?>" />
                <input type="hidden" name="edit" value="<?php echo $_GET['edit'] ?>" />
                <input type="hidden" name="desc" value="<?php echo $desc_select; ?>" />
                <input type="hidden" name="app" value="<?php echo $app_select; ?>" />
                <div style="text-align: right; margin-top: 10px; margin-right: 5px;">
                <a href="<?php echo $link."?sec=".$subs_select ?>"><button type="button" class="btn btn-danger">Descartar</button></a>
                <button type="submit" class="btn btn-custom" style="margin-left: 7px;">Guardar</button>
                </div>
                </form>