<?php
session_start();
include_once("inc/includes.inc.php");
include ("header.php");
?>
<script>
 <?php
if ($_SESSION["ss_key"] != $G_SKEY)
    echo "seleccionado = 'registro';";
else
    echo "seleccionado = 'contactanos';";

 ?> 
</script>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat:repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
                <?php
                if ($_SESSION["ss_key"] != $G_SKEY)
                {
                ?>
                <div id="selected" class="boton" onClick="cambiarPagina('registro',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Registro</div>
                <div class="boton" onClick="cambiarPagina('recuperarContrasena',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Recuperar Contrase&ntilde;a</div>
            	<div class="boton" onClick="cambiarPagina('contactanos',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Contáctanos</div>
                <?php
                }
                else
                {
                ?>
                <div id="selected" class="boton" onClick="cambiarPagina('contactanos',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Contáctanos</div>
                <?php
                }
                ?>
                <div class="boton" onClick="cambiarPagina('donar',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Donar</div>
                <div class="boton" onClick="cambiarPagina('compartir',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Compartir</div>
            </div>
            
            <div id="registro" <?php if ($_SESSION["ss_key"] == $G_SKEY) echo "style='display:none'"; ?> >
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>REGISTRO</strong><br/><br/></span>
            <div id="registro-form">
            <form><table cellpadding='10'><tr><td><strong>Datos Personales</strong></td></tr>
                    <tr><td>Nombre: </td><td><input type="text" id="nombre" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td><td>Apellido: </td><td><input type="text" id="apellido" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td></tr>
                    <tr><td>Institución: </td><td><input type="text" id="institucion" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td><td>Ocupación: </td><td><input type="text"  id="ocupacion" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                    <tr><td>País de residencia: </td><td><select id="pais" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;">
                                <option value="seleccione">Seleccione...</option>
<option value="AF">Afganistán</option>
<option value="AL">Albania</option>
<option value="DE">Alemania</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AQ">Antártida</option>
<option value="AG">Antigua y Barbuda</option>
<option value="AN">Antillas Holandesas</option>
<option value="SA">Arabia Saudí</option>
<option value="DZ">Argelia</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaiyán</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrein</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BE">Bélgica</option>
<option value="BZ">Belice</option>
<option value="BJ">Benin</option>
<option value="BM">Bermudas</option>
<option value="BY">Bielorrusia</option>
<option value="MM">Birmania</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia y Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BR">Brasil</option>
<option value="BN">Brunei</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="BT">Bután</option>
<option value="CV">Cabo Verde</option>
<option value="KH">Camboya</option>
<option value="CM">Camerún</option>
<option value="CA">Canadá</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CY">Chipre</option>
<option value="VA">Ciudad del Vaticano (Santa Sede)</option>
<option value="CO">Colombia</option>
<option value="KM">Comores</option>
<option value="CG">Congo</option>
<option value="CD">Congo, República Democrática del</option>
<option value="KR">Corea</option>
<option value="KP">Corea del Norte</option>
<option value="CI">Costa de Marfíl</option>
<option value="CR">Costa Rica</option>
<option value="HR">Croacia (Hrvatska)</option>
<option value="CU">Cuba</option>
<option value="DK">Dinamarca</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="EC">Ecuador</option>
<option value="EG">Egipto</option>
<option value="SV">El Salvador</option>
<option value="AE">Emiratos Árabes Unidos</option>
<option value="ER">Eritrea</option>
<option value="SI">Eslovenia</option>
<option value="ES">España</option>
<option value="US">Estados Unidos</option>
<option value="EE">Estonia</option>
<option value="ET">Etiopía</option>
<option value="FJ">Fiji</option>
<option value="PH">Filipinas</option>
<option value="FI">Finlandia</option>
<option value="FR">Francia</option>
<option value="GA">Gabón</option>
<option value="GM">Gambia</option>
<option value="GE">Georgia</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GD">Granada</option>
<option value="GR">Grecia</option>
<option value="GL">Groenlandia</option>
<option value="GP">Guadalupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GY">Guayana</option>
<option value="GF">Guayana Francesa</option>
<option value="GN">Guinea</option>
<option value="GQ">Guinea Ecuatorial</option>
<option value="GW">Guinea-Bissau</option>
<option value="HT">Haití</option>
<option value="HN">Honduras</option>
<option value="HU">Hungría</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IQ">Irak</option>
<option value="IR">Irán</option>
<option value="IE">Irlanda</option>
<option value="BV">Isla Bouvet</option>
<option value="CX">Isla de Christmas</option>
<option value="IS">Islandia</option>
<option value="KY">Islas Caimán</option>
<option value="CK">Islas Cook</option>
<option value="CC">Islas de Cocos o Keeling</option>
<option value="FO">Islas Faroe</option>
<option value="HM">Islas Heard y McDonald</option>
<option value="FK">Islas Malvinas</option>
<option value="MP">Islas Marianas del Norte</option>
<option value="MH">Islas Marshall</option>
<option value="UM">Islas menores de Estados Unidos</option>
<option value="PW">Islas Palau</option>
<option value="SB">Islas Salomón</option>
<option value="SJ">Islas Svalbard y Jan Mayen</option>
<option value="TK">Islas Tokelau</option>
<option value="TC">Islas Turks y Caicos</option>
<option value="VI">Islas Vírgenes (EEUU)</option>
<option value="VG">Islas Vírgenes (Reino Unido)</option>
<option value="WF">Islas Wallis y Futuna</option>
<option value="IL">Israel</option>
<option value="IT">Italia</option>
<option value="JM">Jamaica</option>
<option value="JP">Japón</option>
<option value="JO">Jordania</option>
<option value="KZ">Kazajistán</option>
<option value="KE">Kenia</option>
<option value="KG">Kirguizistán</option>
<option value="KI">Kiribati</option>
<option value="KW">Kuwait</option>
<option value="LA">Laos</option>
<option value="LS">Lesotho</option>
<option value="LV">Letonia</option>
<option value="LB">Líbano</option>
<option value="LR">Liberia</option>
<option value="LY">Libia</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lituania</option>
<option value="LU">Luxemburgo</option>
<option value="MK">Macedonia, Ex-República Yugoslava de</option>
<option value="MG">Madagascar</option>
<option value="MY">Malasia</option>
<option value="MW">Malawi</option>
<option value="MV">Maldivas</option>
<option value="ML">Malí</option>
<option value="MT">Malta</option>
<option value="MA">Marruecos</option>
<option value="MQ">Martinica</option>
<option value="MU">Mauricio</option>
<option value="MR">Mauritania</option>
<option value="YT">Mayotte</option>
<option value="MX">México</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldavia</option>
<option value="MC">Mónaco</option>
<option value="MN">Mongolia</option>
<option value="MS">Montserrat</option>
<option value="MZ">Mozambique</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NI">Nicaragua</option>
<option value="NE">Níger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk</option>
<option value="NO">Noruega</option>
<option value="NC">Nueva Caledonia</option>
<option value="NZ">Nueva Zelanda</option>
<option value="OM">Omán</option>
<option value="NL">Países Bajos</option>
<option value="PA">Panamá</option>
<option value="PG">Papúa Nueva Guinea</option>
<option value="PK">Paquistán</option>
<option value="PY">Paraguay</option>
<option value="PE">Perú</option>
<option value="PN">Pitcairn</option>
<option value="PF">Polinesia Francesa</option>
<option value="PL">Polonia</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="UK">Reino Unido</option>
<option value="CF">República Centroafricana</option>
<option value="CZ">República Checa</option>
<option value="ZA">República de Sudáfrica</option>
<option value="DO">República Dominicana</option>
<option value="SK">República Eslovaca</option>
<option value="RE">Reunión</option>
<option value="RW">Ruanda</option>
<option value="RO">Rumania</option>
<option value="RU">Rusia</option>
<option value="EH">Sahara Occidental</option>
<option value="KN">Saint Kitts y Nevis</option>
<option value="WS">Samoa</option>
<option value="AS">Samoa Americana</option>
<option value="SM">San Marino</option>
<option value="VC">San Vicente y Granadinas</option>
<option value="SH">Santa Helena</option>
<option value="LC">Santa Lucía</option>
<option value="ST">Santo Tomé y Príncipe</option>
<option value="SN">Senegal</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leona</option>
<option value="SG">Singapur</option>
<option value="SY">Siria</option>
<option value="SO">Somalia</option>
<option value="LK">Sri Lanka</option>
<option value="PM">St Pierre y Miquelon</option>
<option value="SZ">Suazilandia</option>
<option value="SD">Sudán</option>
<option value="SE">Suecia</option>
<option value="CH">Suiza</option>
<option value="SR">Surinam</option>
<option value="TH">Tailandia</option>
<option value="TW">Taiwán</option>
<option value="TZ">Tanzania</option>
<option value="TJ">Tayikistán</option>
<option value="TF">Territorios franceses del Sur</option>
<option value="TP">Timor Oriental</option>
<option value="TG">Togo</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad y Tobago</option>
<option value="TN">Túnez</option>
<option value="TM">Turkmenistán</option>
<option value="TR">Turquía</option>
<option value="TV">Tuvalu</option>
<option value="UA">Ucrania</option>
<option value="UG">Uganda</option>
<option value="UY">Uruguay</option>
<option value="UZ">Uzbekistán</option>
<option value="VU">Vanuatu</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="YE">Yemen</option>
<option value="YU">Yugoslavia</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabue</option>
</select></td></tr>
                    <tr><td style="padding-top:50px;"><strong>Datos de la Cuenta</strong></td></tr>
                    <tr><td>E-mail: </td><td><input type="text" id="mail" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td><td>Contraseña: </td><td><input type="password" id="contrasena" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                    <tr><td>Confirmar contraseña: </td><td><input type="password" id="confirmar" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                </table><a href="javascript:void(0)"><img src="img/boton-registrar.png" alt="Registrar" style="margin-top: 50px; margin-left: 350px; border:0" onclick="registrar()"></a></form></div>
            <div id="registro-loading" style="text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="registro-ok" style="display: none; text-align: center">
                <br/><br/><br/><br/><strong>Registro completado.</strong><br/><br/><br/><br/><br/><br/><br/><br/>
            </div>
            </div>
            </div>
            
            <div id="recuperarContrasena" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>RECUPERAR CONTRASE&Ntilde;A</strong><br/><br/></span>
            Para recuperar su contraseña por favor ingrese el correo electrónico asociado a su cuenta.<br/>
            <input type="text" id="correoRecuperarContrasena" onfocus="clearSearch(this);" placeholder="Correo Electr&oacute;nico" style="border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px; margin-left: 300px; margin-top:30px;" />
            <img src="img/boton-recuperar.png" width="99" height="30" alt="recuperar" style="margin-left: 340px; margin-top:15px" />
            </div>
            </div>
            
            <div id="contactanos" <?php if ($_SESSION["ss_key"] != $G_SKEY) echo "style='display:none'"; ?>>
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>CONTÁCTANOS</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
            
            <div id="donar" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>DONAR</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
            
            <div id="compartir" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>COMPARTIR</strong><br/><br/></span>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque
            </div>
            </div>
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>
<?php
include ("footer.php");
?>
