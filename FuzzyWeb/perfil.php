<?php
session_start();
include_once("inc/includes.inc.php");
comprobar_sesion("not_public");
include ("header.php");
?>
<script>
seleccionado = "verPerfil";
</script>
<div id="barra_azul" style="background-image:url(img/bg_azul.jpg); height:343px; width:100%; background-repeat: repeat-x; display:table;">
	<div id="marco_centrado2" style="margin-left:auto; margin-right:auto; width:1210px; padding-top:30px; display:table">
		<div style="background-image:url(img/textbox_top.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
        <div id="cuadroblanco" style="background-image:url(img/textbox_middle.png); margin-left:auto; margin-right:auto; width:1200px; min-height:500px; position:relative; display:table">
        	<div id="menuizquierdo" style="width:322px; position: absolute; top: -15px; left:0">
            	<div id="selected" class="boton" onClick="cambiarPagina('verPerfil',this)" style="background-image:url(img/boton_seleccionado.png); font-weight:bold">Ver Perfil</div>
                <div class="boton" onClick="cambiarPagina('modificarPerfil',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Modificar Perfil</div>
                <div class="boton" onClick="cambiarPagina('modificarFoto',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Cambiar Foto</div>
                <div class="boton" onClick="cambiarPagina('modificarCorreo',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Modificar Correo</div>
                <div class="boton" onClick="cambiarPagina('modificarContrasena',this)" onMouseOver="this.style.fontWeight='bold'" onMouseOut="this.style.fontWeight=''">Modificar Contraseña</div>
            </div>
            <div id="verPerfil">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <span style="color:#023e44"><strong>PERFIL</strong><br/><br/></span>
            <div style="border: 1px solid #045d6f; border-radius:5px; height:150px; width:150px"></div>
            <div style="float:right; margin-top: -140px; margin-right: 100px;">
            <table cellpadding="10">
                <tr><td><strong>Nombre: </strong></td><td><?php echo $_SESSION['nombre']; ?></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><?php echo $_SESSION['apellido']; ?></td></tr>
                <tr><td><strong>Correo: </strong></td><td><a href="mailto:<?php echo $_SESSION['email']; ?>"><?php echo $_SESSION['email']; ?></a></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><?php echo $_SESSION['institucion']; ?></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><?php echo $_SESSION['ocupacion']; ?></td><td style="padding-left:50px"><strong>País de residencia: </strong></td><td><?php echo $_SESSION['ubicacion']; ?></td></tr>
                   </table>
            </div>    
            </div>
            </div>
            <div id="modificarPerfil" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <div id="modificarperfil-form">
                <span style="color:#023e44"><strong>MODIFICAR PERFIL</strong><br/><br/></span>
            <form><table cellpadding="10"><tr><td><strong>Nombre: </strong></td><td><input type="text" value="<?php echo $_SESSION['nombre']; ?>" id="nombre" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><input type="text" value="<?php echo $_SESSION['apellido']; ?>" id="apellido" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><input type="text" value="<?php echo $_SESSION['ocupacion']; ?>" id="ocupacion" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><input type="text" value="<?php echo $_SESSION['institucion']; ?>" id="institucion"onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                   <tr><td><strong>País: </strong></td><td><select id="pais" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/>
                                <option value="">Seleccione...</option>
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
                   </table>
                <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarPerfil();" style="margin-left:320px; margin-top:50px;"></a>
                               </form></div></div>
                <div id="modificarperfil-loading" style="padding-left: 220px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarperfil-ok" style="padding-left: 220px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su perfil exitosamente.</strong>
            </div>
            </div>
            
            <div id="modificarFoto" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
                <div id="modificarfoto-form">
            <span style="color:#023e44"><strong>CAMBIAR FOTO</strong></span>
            <br/><br/>Ingrese la nueva foto que desea tener asociada a su cuenta.<br/><br/>
            <form><table cellpadding="10"><tr><td><input type="file" id="foto" onfocus="clearSearch(this);" style="margin-left: 290px;"/></td></tr>
                   
            </table>       
            <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarCorreo();" style="margin-left: 340px; margin-top:15px;"></a></form>
            </div>
            </div>
            <div id="modificarfoto-loading" style="padding-left: 220px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarfoto-ok" style="padding-left: 220px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su foto exitosamente.</strong>
            </div>     
            </div>
 
            
            <div id="modificarCorreo" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
                <div id="modificarcorreo-form">
            <span style="color:#023e44"><strong>MODIFICAR CORREO</strong></span>
            <br/><br/>Ingrese el nuevo correo que desea tener asociado a su cuenta.<br/><br/>
            <form><table cellpadding="10"><tr><td><input type="text" value=<?php echo $_SESSION['email']; ?> id="mail" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px; margin-left: 290px;"/></td></tr>
                   
            </table>       
            <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarCorreo();" style="margin-left: 340px; margin-top:15px;"></a></form>
            </div>
            </div>
            <div id="modificarcorreo-loading" style="padding-left: 220px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarcorreo-ok" style="padding-left: 220px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su correo exitosamente.</strong>
            </div>     
            </div>
 
            <div id="modificarContrasena" style="display:none;">
            <div id="texto" style="width:850px; display:table; font-size:14px; text-align:justify; margin-left:335px;">
            <div id="modificarcontrasena-form">
                <span style="color:#023e44"><strong>MODIFICAR CONTRASEÑA</strong><br/><br/></span>
            Ingrese su nueva contraseña.
            <form><table><tr><td><input type="password" value="" id="contrasena" onfocus="clearSearch(this);" placeholder="Contraseña" style="margin-left: 300px; margin-top:15px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                    <tr><td><input type="password" value="" id="confirmar" placeholder="Confirmar Contraseña" onfocus="clearSearch(this);" style="margin-top:15px; margin-left: 300px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                   
                   </table>
            <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarContrasena();" style="margin-left: 340px; margin-top:30px; border: 0"></a></form>
            </div>
         
            </div>
            <div id="modificarcontrasena-loading" style="padding-left: 220px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarcontrasena-ok" style="padding-left: 220px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su contraseña exitosamente.</strong>
            </div>
             </div>
      </div>
        <div style="background-image:url(img/textbox_bottom.png); margin-left:auto; margin-right:auto; width:1200px; height:16px;"></div>
    </div>
</div>
<?php
include ("footer.php");
?>