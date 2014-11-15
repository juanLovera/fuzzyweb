<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("../inc/includes.inc.php");

$db = conectar_db();

$coleccion = $db->subseccion;
$coleccion->drop();
$coleccion = $db->subseccion;

$subs = array("nombre" => "Introduction",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "INTRODUCTION",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "History",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "HISTORY",
                            "informacion" => "Under Construction",                  
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Members",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "MEMBERS",
                            "informacion" => "<div style=\"text-align:center;\">
            <strong>GRUPO INVESTIGADOR</strong></br></br>
            <strong>Coordinadores</strong></br>
            Leonid Tineo</br> <i>USB</i> </br></br>
            Carlos I. Lameda M.</br> <i>UNEXPO</i> </br></br></br>
            
            <table style=\"display:inline-block; margin-right: 50px;\">
                <tr><td>
                Jesús Araque</br>
                <i>UNEXPO</i></br></br>
                Soraya Carrasquel</br>
                <i>USB</i></br></br>
                </tr></td>
            </table>
            
            <table style=\"display:inline-block; margin-right: 50px;\">
                <tr><td>
                Roberto Uzcátegui</br>
                <i>UNEXPO</i></br></br>
                David Coronado</br>
                <i>USB</i></br></br>
                </tr></td>
            </table>
            
            <table style=\"display:inline-block;\">
                <tr><td>
                Rosseline Rodríguez </br>
                <i>USB</i></br></br>
                Belkys López </br>
                <i>UCLA</i></br></br>
                </tr></td>
            </table>
            
            </br>Ricardo Monascal</br>
            <i>USB</i></br></br></br>
            
            <strong>ESTUDIANTES</strong></br></br>
            <table style=\"display:inline-block; width: 28%; margin-left: 10px; margin-right: 20px;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Andras Gyomrey</br>
                Bishma Stornelli</br>
                Carlos Timaury</br>
                Sergio Moreau</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%; margin-right: 20px;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Javier Antonini</br>
                Jonathan Melián</br>
                José Goncalves</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%;\">
                <tr><td>
                <strong>Análisis de Desempeño de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Andreina Marcano</br>
                Luis Manuel García</br>
                Patricia Zambrano</br>
                Vanessa Balleste</br></br>
                </tr></td>
            </table>
            
            </br></br>
            
            <table style=\"display:inline-block; width: 28%; margin-left: 10px; margin-right: 20px;\">
                <tr><td>
                <strong>Portal del Proyecto de Consultas a Bases de Datos con Atributos Difusos</strong></br>
                Carla Nardone</br>
                Juan Lovera</br>
                Luis Esparragoza</br>
                Rebecca Porras</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%; margin-right: 20px;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos – Tipo 4</strong></br>
                José Delgado</br>
                José Figueredo</br>
                Stephanie Alibrandi</br></br>
                </tr></td>
            </table>

            <table style=\"display:inline-block; width: 28%;\">
                <tr><td>
                <strong>Implementación de Consultas a Bases de Datos con Atributos Difusos – Tipo 5</strong></br>
                Héctor Domínguez</br>
                José Piñero</br>
                José Sanchez</br>
                Valeria Pestana</br></br>
                </tr></td>
            </table>
 
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));

$coleccion->insert($subs);

$subs = array("nombre" => "Fuzzy data types",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "FUZZY DATA TYPES",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TYPE 1",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TYPE 2",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TYPE 3",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TYPE 4",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TYPE 5",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())    
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Comparison with other proyects",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "COMPARISON WITH OTHER PROYECTS",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Advantages",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "ADVANTAGES",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Past proyects",
              "seccion" => "Acerca",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "PAST PROYECTS",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Downloads",
              "seccion" => "Descarga",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "DOWNLOADS",
                            "informacion" => '',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga_des" => "activated",
                            "descarga" => array(array("nombre" => "Descarga 1",
                            "fecha" => "1/11/2014",
                            "descripcion" => "Descarga de proyecto de Bases de Datos con Atributos Difusos de Tipo 2 y Tipo 3.",
                            "path" => "downloads/FuzzyDB_MPDS_Ene_Mar_14_FINAL.zip")),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Requirements",
              "seccion" => "Descarga",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "REQUIREMENTS",
                            "informacion" => "<ul>
	<li>Sistema operativo Linux</li>
	<li>Java JDK</li>
	<li>JavaCC</li>
	<li>Ant</li>
	<li>PostgreSQL 9.3 or newer, properly configured</li>
	<li>QBossSqlParser (JSqlParser)</li>
	<li>The following .jar:</li>
	<ul>
		<li>Driver JDBC para Postgres</li>
		<li>JUnit</li>
		<li>JCommander</li>
		<li>QueryingBasedOnSimilarities</li>
		<li>Ant-junit</li>
		<li>Commons-lang</li>
		<li>Hamcrest-core</li>
		<li>Jansi</li>
		<li>JLine</li>
		<li>Mysql-connector-java</li>
	</ul>
</ul>
",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Instalation manual",
              "seccion" => "Descarga",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "INSTALATION MANUAL",
                                       "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);
$subs = array("nombre" => "Previous versions",
              "seccion" => "Descarga",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "PREVIOUS VERSIONS",
                            "informacion" => "Under Construction.",
                        "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "API",
              "seccion" => "API",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "API",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Type 2",
              "seccion" => "API",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "TYPE 2",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Type 3",
              "seccion" => "API",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "TYPE 3",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Type 4",
              "seccion" => "API",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "TYPE 4",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Type 5",
              "seccion" => "API",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "TYPE 5",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Associated publications",
              "seccion" => "Documentación",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "ASSOCIATED PUBLICATIONS",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                  array("nombre" => "PAPERS",
                            "informacion" => "\"Consultas con agrupamiento basado en similitud\"<br/><br/><img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=http://www.scielo.cl/pdf/ingeniare/v22n4/art07.pdf><strong>Ver artículo</strong></a>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                  array("nombre" => "INVESTIGACIONES",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Conferences",
              "seccion" => "Documentación",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CONFERENCES",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Interviews",
              "seccion" => "Documentación",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "Interviews",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Online testing",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "ONLINE TESTING",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Console",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CONSOLE",
                            "informacion" => "<iframe id=\"conso\" style=\"margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px\" src=\"http://localhost/terminal/\"></iframe>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Operating demonstration",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "OPERATING DEMONSTRATION",
                            "informacion" => "",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp_des" => "activated",
                            "webapp" => array(array("nombre" => "Aplicación en Django",
                            "fecha" => "2/11/2014",
                            "descripcion" => "Aplicación desarrollada en la Universidad Simón Bolívar para demostrar funcionamiento de ordenamiento y agrupamiento de datos tipo 2.",
                            "path" => "http://localhost:8000/agrupar")))
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Performance",
              "seccion" => "Desempeño",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "PERFORMANCE",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga_des" => "activated",
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Sign up",
              "seccion" => "Comunidad_p",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "SIGN UP",
                            "informacion" => "<div id=\"registro-form\">
            <form><table cellpadding='10'><tr><td><strong>Datos Personales</strong></td></tr>
                    <tr><td>Nombre: </td><td><input type=\"text\" id=\"nombre\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Apellido: </td><td><input type=\"text\" id=\"apellido\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td></tr>
                    <tr><td>Institución: </td><td><input type=\"text\" id=\"institucion\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Ocupación: </td><td><input type=\"text\"  id=\"ocupacion\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td>País de residencia: </td><td><select id=\"pais\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\">
                                <option value=\"\">Seleccione...</option>
<option value=\"Afganistán\">Afganistán</option>
<option value=\"Albania\">Albania</option>
<option value=\"Alemania\">Alemania</option>
<option value=\"Andorra\">Andorra</option>
<option value=\"Angola\">Angola</option>
<option value=\"Anguilla\">Anguilla</option>
<option value=\"Antártida\">Antártida</option>
<option value=\"Antigua y Barbuda\">Antigua y Barbuda</option>
<option value=\"Antillas Holandesas\">Antillas Holandesas</option>
<option value=\"Arabia Saudí\">Arabia Saudí</option>
<option value=\"Argelia\">Argelia</option>
<option value=\"Argentina\">Argentina</option>
<option value=\"Armenia\">Armenia</option>
<option value=\"Aruba\">Aruba</option>
<option value=\"Australia\">Australia</option>
<option value=\"Austria\">Austria</option>
<option value=\"Azerbaiyán\">Azerbaiyán</option>
<option value=\"Bahamas\">Bahamas</option>
<option value=\"Bahrein\">Bahrein</option>
<option value=\"Bangladesh\">Bangladesh</option>
<option value=\"Barbados\">Barbados</option>
<option value=\"Bélgica\">Bélgica</option>
<option value=\"Belice\">Belice</option>
<option value=\"Benin\">Benin</option>
<option value=\"Bermudas\">Bermudas</option>
<option value=\"Bielorrusia\">Bielorrusia</option>
<option value=\"Birmania\">Birmania</option>
<option value=\"Bolivia\">Bolivia</option>
<option value=\"Bosnia y Herzegovina\">Bosnia y Herzegovina</option>
<option value=\"Botswana\">Botswana</option>
<option value=\"Brasil\">Brasil</option>
<option value=\"Brunei\">Brunei</option>
<option value=\"Bulgaria\">Bulgaria</option>
<option value=\"Burkina Faso\">Burkina Faso</option>
<option value=\"Burundi\">Burundi</option>
<option value=\"Bután\">Bután</option>
<option value=\"Cabo Verde\">Cabo Verde</option>
<option value=\"Camboya\">Camboya</option>
<option value=\"Camerún\">Camerún</option>
<option value=\"Canadá\">Canadá</option>
<option value=\"Chad\">Chad</option>
<option value=\"Chile\">Chile</option>
<option value=\"China\">China</option>
<option value=\"Chipre\">Chipre</option>
<option value=\"Ciudad del Vaticano (Santa Sede)\">Ciudad del Vaticano (Santa Sede)</option>
<option value=\"Colombia\">Colombia</option>
<option value=\"Comores\">Comores</option>
<option value=\"Congo\">Congo</option>
<option value=\"Congo, República Democrática del\">Congo, República Democrática del</option>
<option value=\"Corea\">Corea</option>
<option value=\"Corea del Norte\">Corea del Norte</option>
<option value=\"Costa de Marfíl\">Costa de Marfíl</option>
<option value=\"Costa Rica\">Costa Rica</option>
<option value=\"Croacia (Hrvatska)\">Croacia (Hrvatska)</option>
<option value=\"Cuba\">Cuba</option>
<option value=\"Dinamarca\">Dinamarca</option>
<option value=\"Djibouti\">Djibouti</option>
<option value=\"Dominica\">Dominica</option>
<option value=\"Ecuador\">Ecuador</option>
<option value=\"Egipto\">Egipto</option>
<option value=\"El Salvador\">El Salvador</option>
<option value=\"Emiratos Árabes Unidos\">Emiratos Árabes Unidos</option>
<option value=\"Eritrea\">Eritrea</option>
<option value=\"Eslovenia\">Eslovenia</option>
<option value=\"España\">España</option>
<option value=\"Estados Unidos\">Estados Unidos</option>
<option value=\"Estonia\">Estonia</option>
<option value=\"Etiopía\">Etiopía</option>
<option value=\"Fiji\">Fiji</option>
<option value=\"Filipinas\">Filipinas</option>
<option value=\"Finlandia\">Finlandia</option>
<option value=\"Francia\">Francia</option>
<option value=\"Gabón\">Gabón</option>
<option value=\"Gambia\">Gambia</option>
<option value=\"Georgia\">Georgia</option>
<option value=\"Ghana\">Ghana</option>
<option value=\"Gibraltar\">Gibraltar</option>
<option value=\"Granada\">Granada</option>
<option value=\"Grecia\">Grecia</option>
<option value=\"Groenlandia\">Groenlandia</option>
<option value=\"Guadalupe\">Guadalupe</option>
<option value=\"Guam\">Guam</option>
<option value=\"Guatemala\">Guatemala</option>
<option value=\"Guayana\">Guayana</option>
<option value=\"Guayana Francesa\">Guayana Francesa</option>
<option value=\"Guinea\">Guinea</option>
<option value=\"Guinea Ecuatorial\">Guinea Ecuatorial</option>
<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
<option value=\"Haití\">Haití</option>
<option value=\"Honduras\">Honduras</option>
<option value=\"Hungría\">Hungría</option>
<option value=\"India\">India</option>
<option value=\"Indonesia\">Indonesia</option>
<option value=\"Irak\">Irak</option>
<option value=\"Irán\">Irán</option>
<option value=\"Irlanda\">Irlanda</option>
<option value=\"Isla Bouvet\">Isla Bouvet</option>
<option value=\"Isla de Christmas\">Isla de Christmas</option>
<option value=\"Islandia\">Islandia</option>
<option value=\"Islas Caimán\">Islas Caimán</option>
<option value=\"Islas Cook\">Islas Cook</option>
<option value=\"Islas de Cocos o Keeling\">Islas de Cocos o Keeling</option>
<option value=\"Islas Faroe\">Islas Faroe</option>
<option value=\"Islas Heard y McDonald\">Islas Heard y McDonald</option>
<option value=\"Islas Malvinas\">Islas Malvinas</option>
<option value=\"Islas Marianas del Norte\">Islas Marianas del Norte</option>
<option value=\"Islas Marshall\">Islas Marshall</option>
<option value=\"Islas menores de Estados Unidos\">Islas menores de Estados Unidos</option>
<option value=\"Islas Palau\">Islas Palau</option>
<option value=\"Islas Salomón\">Islas Salomón</option>
<option value=\"Islas Svalbard y Jan Mayen\">Islas Svalbard y Jan Mayen</option>
<option value=\"Islas Tokelau\">Islas Tokelau</option>
<option value=\"Islas Turks y Caicos\">Islas Turks y Caicos</option>
<option value=\"Islas Vírgenes (EEUU)\">Islas Vírgenes (EEUU)</option>
<option value=\"Islas Vírgenes (Reino Unido)\">Islas Vírgenes (Reino Unido)</option>
<option value=\"Islas Wallis y Futuna\">Islas Wallis y Futuna</option>
<option value=\"Israel\">Israel</option>
<option value=\"Italia\">Italia</option>
<option value=\"Jamaica\">Jamaica</option>
<option value=\"Japón\">Japón</option>
<option value=\"Jordania\">Jordania</option>
<option value=\"Kazajistán\">Kazajistán</option>
<option value=\"Kenia\">Kenia</option>
<option value=\"Kirguizistán\">Kirguizistán</option>
<option value=\"Kiribati\">Kiribati</option>
<option value=\"Kuwait\">Kuwait</option>
<option value=\"Laos\">Laos</option>
<option value=\"Lesotho\">Lesotho</option>
<option value=\"Letonia\">Letonia</option>
<option value=\"Líbano\">Líbano</option>
<option value=\"Liberia\">Liberia</option>
<option value=\"Libia\">Libia</option>
<option value=\"Liechtenstein\">Liechtenstein</option>
<option value=\"Lituania\">Lituania</option>
<option value=\"Luxemburgo\">Luxemburgo</option>
<option value=\"Macedonia, Ex-República Yugoslava de\">Macedonia, Ex-República Yugoslava de</option>
<option value=\"Madagascar\">Madagascar</option>
<option value=\"Malasia\">Malasia</option>
<option value=\"Malawi\">Malawi</option>
<option value=\"Maldivas\">Maldivas</option>
<option value=\"Malí\">Malí</option>
<option value=\"Malta\">Malta</option>
<option value=\"Marruecos\">Marruecos</option>
<option value=\"Martinica\">Martinica</option>
<option value=\"Mauricio\">Mauricio</option>
<option value=\"Mauritania\">Mauritania</option>
<option value=\"Mayotte\">Mayotte</option>
<option value=\"México\">México</option>
<option value=\"Micronesia\">Micronesia</option>
<option value=\"Moldavia\">Moldavia</option>
<option value=\"Mónaco\">Mónaco</option>
<option value=\"Mongolia\">Mongolia</option>
<option value=\"Montserrat\">Montserrat</option>
<option value=\"Mozambique\">Mozambique</option>
<option value=\"Namibia\">Namibia</option>
<option value=\"Nauru\">Nauru</option>
<option value=\"Nepal\">Nepal</option>
<option value=\"Nicaragua\">Nicaragua</option>
<option value=\"Níger\">Níger</option>
<option value=\"Nigeria\">Nigeria</option>
<option value=\"Niue\">Niue</option>
<option value=\"Norfolk\">Norfolk</option>
<option value=\"Noruega\">Noruega</option>
<option value=\"Nueva Caledonia\">Nueva Caledonia</option>
<option value=\"Nueva Zelanda\">Nueva Zelanda</option>
<option value=\"Omán\">Omán</option>
<option value=\"Países Bajos\">Países Bajos</option>
<option value=\"Panamá\">Panamá</option>
<option value=\"Papúa Nueva Guinea\">Papúa Nueva Guinea</option>
<option value=\"Paquistán\">Paquistán</option>
<option value=\"Paraguay\">Paraguay</option>
<option value=\"Perú\">Perú</option>
<option value=\"Pitcairn\">Pitcairn</option>
<option value=\"Polinesia Francesa\">Polinesia Francesa</option>
<option value=\"Polonia\">Polonia</option>
<option value=\"Portugal\">Portugal</option>
<option value=\"Puerto Rico\">Puerto Rico</option>
<option value=\"Qatar\">Qatar</option>
<option value=\"Reino Unido\">Reino Unido</option>
<option value=\"República Centroafricana\">República Centroafricana</option>
<option value=\"República Checa\">República Checa</option>
<option value=\"República de Sudáfrica\">República de Sudáfrica</option>
<option value=\"República Dominicana\">República Dominicana</option>
<option value=\"República Eslovaca\">República Eslovaca</option>
<option value=\"Reunión\">Reunión</option>
<option value=\"Ruanda\">Ruanda</option>
<option value=\"Rumania\">Rumania</option>
<option value=\"Rusia\">Rusia</option>
<option value=\"Sahara Occidental\">Sahara Occidental</option>
<option value=\"Saint Kitts y Nevis\">Saint Kitts y Nevis</option>
<option value=\"Samoa\">Samoa</option>
<option value=\"Samoa Americana\">Samoa Americana</option>
<option value=\"San Marino\">San Marino</option>
<option value=\"San Vicente y Granadinas\">San Vicente y Granadinas</option>
<option value=\"Santa Helena\">Santa Helena</option>
<option value=\"Santa Lucía\">Santa Lucía</option>
<option value=\"Santo Tomé y Príncipe\">Santo Tomé y Príncipe</option>
<option value=\"Senegal\">Senegal</option>
<option value=\"Seychelles\">Seychelles</option>
<option value=\"Sierra Leona\">Sierra Leona</option>
<option value=\"Singapur\">Singapur</option>
<option value=\"Siria\">Siria</option>
<option value=\"Somalia\">Somalia</option>
<option value=\"Sri Lanka\">Sri Lanka</option>
<option value=\"St Pierre y Miquelon\">St Pierre y Miquelon</option>
<option value=\"Suazilandia\">Suazilandia</option>
<option value=\"Sudán\">Sudán</option>
<option value=\"Suecia\">Suecia</option>
<option value=\"Suiza\">Suiza</option>
<option value=\"Surinam\">Surinam</option>
<option value=\"Tailandia\">Tailandia</option>
<option value=\"Taiwán\">Taiwán</option>
<option value=\"Tanzania\">Tanzania</option>
<option value=\"Tayikistán\">Tayikistán</option>
<option value=\"Territorios franceses del Sur\">Territorios franceses del Sur</option>
<option value=\"Timor Oriental\">Timor Oriental</option>
<option value=\"Togo\">Togo</option>
<option value=\"Tonga\">Tonga</option>
<option value=\"Trinidad y Tobago\">Trinidad y Tobago</option>
<option value=\"Túnez\">Túnez</option>
<option value=\"Turkmenistán\">Turkmenistán</option>
<option value=\"Turquía\">Turquía</option>
<option value=\"Tuvalu\">Tuvalu</option>
<option value=\"Ucrania\">Ucrania</option>
<option value=\"Uganda\">Uganda</option>
<option value=\"Uruguay\">Uruguay</option>
<option value=\"Uzbekistán\">Uzbekistán</option>
<option value=\"Vanuatu\">Vanuatu</option>
<option value=\"Venezuela\">Venezuela</option>
<option value=\"Vietnam\">Vietnam</option>
<option value=\"Yemen\">Yemen</option>
<option value=\"Yugoslavia\">Yugoslavia</option>
<option value=\"Zambia\">Zambia</option>
<option value=\"Zimbabue\">Zimbabue</option>
</select></td></tr>
                    <tr><td style=\"padding-top:50px;\"><strong>Datos de la Cuenta</strong></td></tr>
                    <tr><td>E-mail: </td><td><input type=\"text\" id=\"mail\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\" /></td><td>Contraseña: </td><td><input type=\"password\" id=\"contrasena\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td>Confirmar contraseña: </td><td><input type=\"password\" id=\"confirmar\" style=\"border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                </table><a href=\"javascript:void(0)\"><img src=\"img/boton-registrar.png\" alt=\"Registrar\" style=\"margin-top: 50px; margin-left: 350px; border:0\" onclick=\"registrar()\"></a></form></div>
            <div id=\"registro-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Forgot your password?",
              "seccion" => "Comunidad_p",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "FORGOT YOUR PASSWORD?",
                            "informacion" => "<div id=\"recuperar-form\">
            Para recuperar su contraseña por favor ingrese el correo electrónico asociado a su cuenta.<br/>
            <input type=\"text\" id=\"correoRecuperarContrasena\" onfocus=\"clearSearch(this);\" placeholder=\"Correo Electr&oacute;nico\" style=\"border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px; margin-left: 300px; margin-top:30px;\" />
            <a href=\"javascript:void(0)\" onclick=\"recuperarClave()\"><img src=\"img/boton-recuperar.png\" width=\"99\" height=\"30\" alt=\"recuperar\" style=\"margin-left: 340px; margin-top:15px; border:0\" /></a>
            </div>
            <div id=\"recuperar-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>
            <div id=\"recuperar-ok\" style=\"display: none; text-align: center; padding-top: 60px;\">
                <strong>Se le ha enviado un correo con las instrucciones para recuperar su contraseña.</strong>
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Contact us",
              "seccion" => "Comunidad",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CONTACT US",
                            "informacion" => "<form name=\"contactform\" method=\"post\" action=\"process/send_form_email.php\">
				<input type=\"hidden\" name=\"formpass\" value=\"wough9348y3**\">
		<table width=\"850px\">
			<tr>
				<td valign=\"top\">
					<label for=\"nombre\">Nombre</label>
				</td>
				<td valign=\"top\">
					<input class=\"form-control\" type=\"text\" name=\"nombre\" required maxlength=\"50\" style=\"width: 90%; height:25px;\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"email\">Correo</label>
				</td>
				<td valign=\"top\">
					<input  class=\"form-control\" type=\"text\" name=\"email\" required maxlength=\"80\" style=\"margin-top:10px; height:25px; width: 90%\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"comentarios\">Comentario</label>
				</td>
				<td valign=\"top\">
					<textarea class=\"form-control\"  name=\"comentarios\" required maxlength=\"1000\" cols=\"25\" rows=\"6\" style=\"margin-top:10px; height:60px; width: 90%\"></textarea>
				</td>
			</tr>
		</table>
		
		</br><strong>Todos los campos son obligatorios.</strong>
		
		<div style=\"text-align:center\">
				<button type=\"submit\" class=\"btn btn-custom\">Enviar</button>
		</div>
 
	</form>			

</br></br>
",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "DONATE",
              "seccion" => "Comunidad",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "DONATE",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Share",
              "seccion" => "Comunidad",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "SHARE",
                            "informacion" => "Under Construction.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);


$subs = array("nombre" => "Profile",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "PROFILE",
                            "informacion" => '<div style=\"border: 1px solid #045d6f; border-radius:5px; height:150px; width:150px\"><img src="img/avatar/<?php echo $_SESSION[\'pic_id\']?>" alt="foto" width="150" height="150" /></div>
            <div style=\"float:right; margin-top: -155px; margin-right: -30px; width:700px;\">
            <table cellpadding=\"10\">
                <tr><td><strong>Nombre: </strong></td><td><?php echo $_SESSION[\'nombre\']; ?></td><td style=\"padding-left:50px\"><strong>Apellido: </strong></td><td><?php echo $_SESSION[\'apellido\']; ?></td></tr>
                <tr><td><strong>Correo: </strong></td><td><a href=\"mailto:<?php echo $_SESSION[\'email\']; ?>\"><?php echo $_SESSION[\'email\']; ?></a></td><td style=\"padding-left:50px\"><strong>Institución: </strong></td><td><?php echo $_SESSION[\'institucion\']; ?></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><?php echo $_SESSION[\'ocupacion\']; ?></td><td style=\"padding-left:50px\"><strong>País de residencia: </strong></td><td><?php echo $_SESSION[\'ubicacion\']; ?></td></tr>
                <tr><td><strong>Tipo de usuario: </strong></td><td><?php if ($_SESSION[\'usertype\']=="U_Normal")
                                                                        echo "Usuario Participante";
                                                                        elseif($_SESSION[\'usertype\']=="U_Desarrollador")
                                                                        echo "Usuario Desarrollador";
                                                                        else
                                                                        echo "Usuario Administrador"?></td></tr>   </table>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Edit Profile",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "EDIT PROFILE",
                            "informacion" => '<div id="modificarperfil-form"><form><table cellpadding="10"><tr><td><strong>Nombre: </strong></td><td><input type="text" value="<?php echo $_SESSION[\'nombre\']; ?>" id="nombre" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;" /></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><input type="text" value="<?php echo $_SESSION[\'apellido\']; ?>" id="apellido" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><input type="text" value="<?php echo $_SESSION[\'ocupacion\']; ?>" id="ocupacion" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><input type="text" value="<?php echo $_SESSION[\'institucion\']; ?>" id="institucion"onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/></td></tr>
                   <tr><td><strong>País: </strong></td><td><select id="pais" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;"/>
                                <option value="">Seleccione...</option>
<option value=\"Afganistán\">Afganistán</option>
<option value=\"Albania\">Albania</option>
<option value=\"Alemania\">Alemania</option>
<option value=\"Andorra\">Andorra</option>
<option value=\"Angola\">Angola</option>
<option value=\"Anguilla\">Anguilla</option>
<option value=\"Antártida\">Antártida</option>
<option value=\"Antigua y Barbuda\">Antigua y Barbuda</option>
<option value=\"Antillas Holandesas\">Antillas Holandesas</option>
<option value=\"Arabia Saudí\">Arabia Saudí</option>
<option value=\"Argelia\">Argelia</option>
<option value=\"Argentina\">Argentina</option>
<option value=\"Armenia\">Armenia</option>
<option value=\"Aruba\">Aruba</option>
<option value=\"Australia\">Australia</option>
<option value=\"Austria\">Austria</option>
<option value=\"Azerbaiyán\">Azerbaiyán</option>
<option value=\"Bahamas\">Bahamas</option>
<option value=\"Bahrein\">Bahrein</option>
<option value=\"Bangladesh\">Bangladesh</option>
<option value=\"Barbados\">Barbados</option>
<option value=\"Bélgica\">Bélgica</option>
<option value=\"Belice\">Belice</option>
<option value=\"Benin\">Benin</option>
<option value=\"Bermudas\">Bermudas</option>
<option value=\"Bielorrusia\">Bielorrusia</option>
<option value=\"Birmania\">Birmania</option>
<option value=\"Bolivia\">Bolivia</option>
<option value=\"Bosnia y Herzegovina\">Bosnia y Herzegovina</option>
<option value=\"Botswana\">Botswana</option>
<option value=\"Brasil\">Brasil</option>
<option value=\"Brunei\">Brunei</option>
<option value=\"Bulgaria\">Bulgaria</option>
<option value=\"Burkina Faso\">Burkina Faso</option>
<option value=\"Burundi\">Burundi</option>
<option value=\"Bután\">Bután</option>
<option value=\"Cabo Verde\">Cabo Verde</option>
<option value=\"Camboya\">Camboya</option>
<option value=\"Camerún\">Camerún</option>
<option value=\"Canadá\">Canadá</option>
<option value=\"Chad\">Chad</option>
<option value=\"Chile\">Chile</option>
<option value=\"China\">China</option>
<option value=\"Chipre\">Chipre</option>
<option value=\"Ciudad del Vaticano (Santa Sede)\">Ciudad del Vaticano (Santa Sede)</option>
<option value=\"Colombia\">Colombia</option>
<option value=\"Comores\">Comores</option>
<option value=\"Congo\">Congo</option>
<option value=\"Congo, República Democrática del\">Congo, República Democrática del</option>
<option value=\"Corea\">Corea</option>
<option value=\"Corea del Norte\">Corea del Norte</option>
<option value=\"Costa de Marfíl\">Costa de Marfíl</option>
<option value=\"Costa Rica\">Costa Rica</option>
<option value=\"Croacia (Hrvatska)\">Croacia (Hrvatska)</option>
<option value=\"Cuba\">Cuba</option>
<option value=\"Dinamarca\">Dinamarca</option>
<option value=\"Djibouti\">Djibouti</option>
<option value=\"Dominica\">Dominica</option>
<option value=\"Ecuador\">Ecuador</option>
<option value=\"Egipto\">Egipto</option>
<option value=\"El Salvador\">El Salvador</option>
<option value=\"Emiratos Árabes Unidos\">Emiratos Árabes Unidos</option>
<option value=\"Eritrea\">Eritrea</option>
<option value=\"Eslovenia\">Eslovenia</option>
<option value=\"España\">España</option>
<option value=\"Estados Unidos\">Estados Unidos</option>
<option value=\"Estonia\">Estonia</option>
<option value=\"Etiopía\">Etiopía</option>
<option value=\"Fiji\">Fiji</option>
<option value=\"Filipinas\">Filipinas</option>
<option value=\"Finlandia\">Finlandia</option>
<option value=\"Francia\">Francia</option>
<option value=\"Gabón\">Gabón</option>
<option value=\"Gambia\">Gambia</option>
<option value=\"Georgia\">Georgia</option>
<option value=\"Ghana\">Ghana</option>
<option value=\"Gibraltar\">Gibraltar</option>
<option value=\"Granada\">Granada</option>
<option value=\"Grecia\">Grecia</option>
<option value=\"Groenlandia\">Groenlandia</option>
<option value=\"Guadalupe\">Guadalupe</option>
<option value=\"Guam\">Guam</option>
<option value=\"Guatemala\">Guatemala</option>
<option value=\"Guayana\">Guayana</option>
<option value=\"Guayana Francesa\">Guayana Francesa</option>
<option value=\"Guinea\">Guinea</option>
<option value=\"Guinea Ecuatorial\">Guinea Ecuatorial</option>
<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
<option value=\"Haití\">Haití</option>
<option value=\"Honduras\">Honduras</option>
<option value=\"Hungría\">Hungría</option>
<option value=\"India\">India</option>
<option value=\"Indonesia\">Indonesia</option>
<option value=\"Irak\">Irak</option>
<option value=\"Irán\">Irán</option>
<option value=\"Irlanda\">Irlanda</option>
<option value=\"Isla Bouvet\">Isla Bouvet</option>
<option value=\"Isla de Christmas\">Isla de Christmas</option>
<option value=\"Islandia\">Islandia</option>
<option value=\"Islas Caimán\">Islas Caimán</option>
<option value=\"Islas Cook\">Islas Cook</option>
<option value=\"Islas de Cocos o Keeling\">Islas de Cocos o Keeling</option>
<option value=\"Islas Faroe\">Islas Faroe</option>
<option value=\"Islas Heard y McDonald\">Islas Heard y McDonald</option>
<option value=\"Islas Malvinas\">Islas Malvinas</option>
<option value=\"Islas Marianas del Norte\">Islas Marianas del Norte</option>
<option value=\"Islas Marshall\">Islas Marshall</option>
<option value=\"Islas menores de Estados Unidos\">Islas menores de Estados Unidos</option>
<option value=\"Islas Palau\">Islas Palau</option>
<option value=\"Islas Salomón\">Islas Salomón</option>
<option value=\"Islas Svalbard y Jan Mayen\">Islas Svalbard y Jan Mayen</option>
<option value=\"Islas Tokelau\">Islas Tokelau</option>
<option value=\"Islas Turks y Caicos\">Islas Turks y Caicos</option>
<option value=\"Islas Vírgenes (EEUU)\">Islas Vírgenes (EEUU)</option>
<option value=\"Islas Vírgenes (Reino Unido)\">Islas Vírgenes (Reino Unido)</option>
<option value=\"Islas Wallis y Futuna\">Islas Wallis y Futuna</option>
<option value=\"Israel\">Israel</option>
<option value=\"Italia\">Italia</option>
<option value=\"Jamaica\">Jamaica</option>
<option value=\"Japón\">Japón</option>
<option value=\"Jordania\">Jordania</option>
<option value=\"Kazajistán\">Kazajistán</option>
<option value=\"Kenia\">Kenia</option>
<option value=\"Kirguizistán\">Kirguizistán</option>
<option value=\"Kiribati\">Kiribati</option>
<option value=\"Kuwait\">Kuwait</option>
<option value=\"Laos\">Laos</option>
<option value=\"Lesotho\">Lesotho</option>
<option value=\"Letonia\">Letonia</option>
<option value=\"Líbano\">Líbano</option>
<option value=\"Liberia\">Liberia</option>
<option value=\"Libia\">Libia</option>
<option value=\"Liechtenstein\">Liechtenstein</option>
<option value=\"Lituania\">Lituania</option>
<option value=\"Luxemburgo\">Luxemburgo</option>
<option value=\"Macedonia, Ex-República Yugoslava de\">Macedonia, Ex-República Yugoslava de</option>
<option value=\"Madagascar\">Madagascar</option>
<option value=\"Malasia\">Malasia</option>
<option value=\"Malawi\">Malawi</option>
<option value=\"Maldivas\">Maldivas</option>
<option value=\"Malí\">Malí</option>
<option value=\"Malta\">Malta</option>
<option value=\"Marruecos\">Marruecos</option>
<option value=\"Martinica\">Martinica</option>
<option value=\"Mauricio\">Mauricio</option>
<option value=\"Mauritania\">Mauritania</option>
<option value=\"Mayotte\">Mayotte</option>
<option value=\"México\">México</option>
<option value=\"Micronesia\">Micronesia</option>
<option value=\"Moldavia\">Moldavia</option>
<option value=\"Mónaco\">Mónaco</option>
<option value=\"Mongolia\">Mongolia</option>
<option value=\"Montserrat\">Montserrat</option>
<option value=\"Mozambique\">Mozambique</option>
<option value=\"Namibia\">Namibia</option>
<option value=\"Nauru\">Nauru</option>
<option value=\"Nepal\">Nepal</option>
<option value=\"Nicaragua\">Nicaragua</option>
<option value=\"Níger\">Níger</option>
<option value=\"Nigeria\">Nigeria</option>
<option value=\"Niue\">Niue</option>
<option value=\"Norfolk\">Norfolk</option>
<option value=\"Noruega\">Noruega</option>
<option value=\"Nueva Caledonia\">Nueva Caledonia</option>
<option value=\"Nueva Zelanda\">Nueva Zelanda</option>
<option value=\"Omán\">Omán</option>
<option value=\"Países Bajos\">Países Bajos</option>
<option value=\"Panamá\">Panamá</option>
<option value=\"Papúa Nueva Guinea\">Papúa Nueva Guinea</option>
<option value=\"Paquistán\">Paquistán</option>
<option value=\"Paraguay\">Paraguay</option>
<option value=\"Perú\">Perú</option>
<option value=\"Pitcairn\">Pitcairn</option>
<option value=\"Polinesia Francesa\">Polinesia Francesa</option>
<option value=\"Polonia\">Polonia</option>
<option value=\"Portugal\">Portugal</option>
<option value=\"Puerto Rico\">Puerto Rico</option>
<option value=\"Qatar\">Qatar</option>
<option value=\"Reino Unido\">Reino Unido</option>
<option value=\"República Centroafricana\">República Centroafricana</option>
<option value=\"República Checa\">República Checa</option>
<option value=\"República de Sudáfrica\">República de Sudáfrica</option>
<option value=\"República Dominicana\">República Dominicana</option>
<option value=\"República Eslovaca\">República Eslovaca</option>
<option value=\"Reunión\">Reunión</option>
<option value=\"Ruanda\">Ruanda</option>
<option value=\"Rumania\">Rumania</option>
<option value=\"Rusia\">Rusia</option>
<option value=\"Sahara Occidental\">Sahara Occidental</option>
<option value=\"Saint Kitts y Nevis\">Saint Kitts y Nevis</option>
<option value=\"Samoa\">Samoa</option>
<option value=\"Samoa Americana\">Samoa Americana</option>
<option value=\"San Marino\">San Marino</option>
<option value=\"San Vicente y Granadinas\">San Vicente y Granadinas</option>
<option value=\"Santa Helena\">Santa Helena</option>
<option value=\"Santa Lucía\">Santa Lucía</option>
<option value=\"Santo Tomé y Príncipe\">Santo Tomé y Príncipe</option>
<option value=\"Senegal\">Senegal</option>
<option value=\"Seychelles\">Seychelles</option>
<option value=\"Sierra Leona\">Sierra Leona</option>
<option value=\"Singapur\">Singapur</option>
<option value=\"Siria\">Siria</option>
<option value=\"Somalia\">Somalia</option>
<option value=\"Sri Lanka\">Sri Lanka</option>
<option value=\"St Pierre y Miquelon\">St Pierre y Miquelon</option>
<option value=\"Suazilandia\">Suazilandia</option>
<option value=\"Sudán\">Sudán</option>
<option value=\"Suecia\">Suecia</option>
<option value=\"Suiza\">Suiza</option>
<option value=\"Surinam\">Surinam</option>
<option value=\"Tailandia\">Tailandia</option>
<option value=\"Taiwán\">Taiwán</option>
<option value=\"Tanzania\">Tanzania</option>
<option value=\"Tayikistán\">Tayikistán</option>
<option value=\"Territorios franceses del Sur\">Territorios franceses del Sur</option>
<option value=\"Timor Oriental\">Timor Oriental</option>
<option value=\"Togo\">Togo</option>
<option value=\"Tonga\">Tonga</option>
<option value=\"Trinidad y Tobago\">Trinidad y Tobago</option>
<option value=\"Túnez\">Túnez</option>
<option value=\"Turkmenistán\">Turkmenistán</option>
<option value=\"Turquía\">Turquía</option>
<option value=\"Tuvalu\">Tuvalu</option>
<option value=\"Ucrania\">Ucrania</option>
<option value=\"Uganda\">Uganda</option>
<option value=\"Uruguay\">Uruguay</option>
<option value=\"Uzbekistán\">Uzbekistán</option>
<option value=\"Vanuatu\">Vanuatu</option>
<option value=\"Venezuela\">Venezuela</option>
<option value=\"Vietnam\">Vietnam</option>
<option value=\"Yemen\">Yemen</option>
<option value=\"Yugoslavia\">Yugoslavia</option>
<option value=\"Zambia\">Zambia</option>
<option value=\"Zimbabue\">Zimbabue</option>
</select></td></tr>
                   </table>
                <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarPerfil();" style="margin-left:320px; margin-top:50px;"></a>
                               </form></div>
                <div id="modificarperfil-loading" style="padding-right: 90px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarperfil-ok" style="padding-right: 90px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su perfil exitosamente.</strong>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Edit picture",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "EDIT PICTURE",
                            "informacion" => '<?php 
                                if (isset($_GET[\'er\']))
{
    switch($_GET[\'er\'])
    {
        case 1:
        $mens = "El campo de la foto no puede estar en blanco.";  
        break;
        case 2:
        $mens = "El formato de la foto tiene que ser .png, .jpeg, .gif.";  
        break;
        case 3:
        $mens = "Su foto no puede pesar más de 2MB.";  
        break;
        case 4:
        $mens = "Su foto debe medir al menos 124 x 116 pixeles.";  
        break;
        case 5:
        $mens = "Error. Coordenadas inválidas.";  
        break;
        case 6:
        $mens = "Error. No hay área seleccionada.";  
        break;
        case 7:
        $mens = "Error. Dimensiones inapriopiadas.";  
        break;
        case 8:
        $mens = "Error. Imagen muy pequeña.";  
        break;
        default:
        $mens = "Error desconocido. Por favor intente de nuevo.";  
        break;
    }
    echo "<script>alert(\'".$mens."\');</script>";
}
if ($_GET[\'paso\'] != 1){?>Ingrese la nueva foto que desea tener asociada a su cuenta.<br/><br/>
            <form  method="post" enctype="multipart/form-data" action="process/crop.php"><table cellpadding=\"10\"><tr><td><input type=\"file\" name=\"preview\" style=\"margin-left: 290px;\"/></td></tr>       
            <input type=\"hidden\" name=\"paso\" value=\"1\">
            </table>       
            <a href=\"javascript:void(0)\"><input type=\"image\" src=\"img/Abrir.png\" alt=\"Abrir\" style=\"margin-left: 340px; margin-top:15px;\"></a></form>
            <?php } else {?>	
                        <div style="width:460px; margin-left:auto; margin-right:auto">
                        <img id=\"preview\" src=\"<?php echo $_SESSION[\'upload_temp_name\']?>\" alt=\"your image\" style=\"max-width:800px; max-height:700px; display:block; margin-left:auto; margin-right:auto;\" />
                        </div>    
<form action="process/crop.php" method="post" onsubmit="return checkCoords();">
			<input type="hidden" name="paso" value="2">
                        <input type="hidden" id="xx" name="xx" />
			<input type="hidden" id="yy" name="yy" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />
			<input type="image" src="img/Guardar.png" width="99" height="30" style="display:block; margin-left:auto; margin-right:auto"/>
		</form> <?php }?>
                
            </div>
            <div id=\"modificarfoto-loading\" style=\"padding-right: 90px;text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>
            <div id=\"modificarfoto-ok\" style=\"padding-right: 90px;display: none; text-align: center; padding-top: 60px;\">
                <strong>Se ha actualizado su foto exitosamente.</strong>
            </div><br/><br/><br/>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Edit e-mail",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "EDIT E-MAIL",
                            "informacion" => '<div id="modificarcorreo-form">
            Ingrese el nuevo correo que desea tener asociado a su cuenta.<br/><br/>
            <form><table cellpadding="10"><tr><td><input type="text" value="<?php echo $_SESSION[\'email\']; ?>" id="mail" onfocus="clearSearch(this);" style="border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px; margin-left: 290px;"/></td></tr>
                   
            </table>       
            <a href="javascript:void(0)"><img src="img/boton-modificar.png" alt="Modificar" onclick="modificarCorreo();" style="margin-left: 340px; margin-top:15px;"></a></form>
            </div>
            <div id="modificarcorreo-loading" style="padding-right: 90px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Cargando</strong>
            </div>
            <div id="modificarcorreo-ok" style="padding-right: 90px;display: none; text-align: center; padding-top: 60px;">
                <strong>Se ha actualizado su correo exitosamente.</strong>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Edit password",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "EDIT PASSWORD",
                            "informacion" => '<div id="modificarcontrasena-form">Enter your new password.
            <form><table><tr><td><input type=\"password\" value=\"\" id=\"contrasena\" onfocus=\"clearSearch(this);\" placeholder=\"Password\" style=\"margin-left: 300px; margin-top:15px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td><input type=\"password\" value=\"\" id=\"confirmar\" placeholder=\"Confirm Password\" onfocus=\"clearSearch(this);\" style=\"margin-top:15px; margin-left: 300px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                   
                   </table>
            <a href=\"javascript:void(0)\"><img src=\"img/boton-modificar.png\" alt=\"Modificar\" onclick=\"modificarContrasena();\" style=\"margin-left: 340px; margin-top:30px; border: 0\"></a></form>
            </div>
            <div id=\"modificarcontrasena-loading\" style=\"padding-right: 90px;text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>
            <div id=\"modificarcontrasena-ok\" style=\"padding-right: 90px;display: none; text-align: center; padding-top: 60px;\">
                <strong>Se ha actualizado su contraseña exitosamente.</strong>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "CHANGE USER TYPE",
              "seccion" => "Usuarios",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CHANGE USER TYPE",
                            "informacion" => '
<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Type of user has been changed successfully.</div>
<?php
}
?>
<form action="usuarios.php" method="GET">
<div class="input-group">
      <input type="text" class="form-control" name="mail" style="height:20px; width: 98%" placeholder="Search for user by e-mail" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-custom" type="button">Search</button>
      </span>
    </div>
</form><br/>                           
<table class=\"table\">
<tbody><tr>
<td><strong>#</strong></td>
<td><strong>Name</strong></td>
<td><strong>E-mail</strong></td>
<td><strong>User type</strong></td>
</tr>
<?php
$db = conectar_db();
$coleccion = $db->usuario;
if (isset($_GET[\"mail\"]))
{
	$email = (string)htmlentities($_GET[\"mail\"]);
	$cursor = $coleccion->find(array(\"correo\" => $email));
}
else
	$cursor = $coleccion->find();
$cursor->sort(array(\'nombre\' => 1));
$i=0;
foreach ($cursor as $doc)
{
$i++;
if ($doc[\'tipo\'] == \"U_Normal\")
$usertype = \"Participante\";
elseif ($doc[\'tipo\'] == \"U_Desarrollador\")
$usertype = \"Desarrollador\";
elseif ($doc[\'tipo\'] == \"U_Administrador\")
$usertype = \"Administrador\";
echo \"<tr><td>\".$i.\"</td><td>\".$doc[\'nombre\'].\"
\".$doc[\'apellido\'].\"</td><td>\".$doc[\'correo\'].\"</td>\";
?>
<td>
<div class=\"btn-group\">
  <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
<?php echo $usertype; ?> <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\" role=\"menu\">
<li><a href=\"process/edit_usuario.php?e=1&p=1&user=<?php echo $doc[\'_id\'];?>\">Participant</a></li>
<li><a href=\"process/edit_usuario.php?e=1&p=2&user=<?php echo $doc[\'_id\'];?>\">Developer</a></li>
<li><a href=\"process/edit_usuario.php?e=1&p=3&user=<?php echo $doc[\'_id\'];?>\">Administrator</a></li>
  </ul>
</div>
</td>
<?php
echo \"</tr>\";
}
?>
</tr>
</tbody>
</table>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "DELETE USERS",
              "seccion" => "Usuarios",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "DELETE USERS",
                            "informacion" => '<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>The user has been successfully removed.</div>
<?php
}
?>
<form action="usuarios.php" method="GET">
<div class="input-group">
      <input type="text" class="form-control" name="mail" style="height:20px; width: 98%" placeholder="Search for user by e-mail" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-custom" type="button">Search</button>
      </span>
    </div>
    <input type="hidden" name="sec" value="1">
</form><br/>                           
<table class=\"table\">
<tbody><tr>
<td><strong>#</strong></td>
<td><strong>Name</strong></td>
<td><strong>E-mail</strong></td>
<td><strong>Delete user</strong></td>
</tr>
<?php
$db = conectar_db();
$coleccion = $db->usuario;
if (isset($_GET[\"mail\"]))
{
	$email = (string)htmlentities($_GET[\"mail\"]);
	$cursor = $coleccion->find(array(\"correo\" => $email));
}
else
	$cursor = $coleccion->find();
$cursor->sort(array(\'nombre\' => 1));
$i=0;
foreach ($cursor as $doc)
{
$i++;
if ($doc[\'tipo\'] == \"U_Normal\")
$usertype = \"Participante\";
elseif ($doc[\'tipo\'] == \"U_Desarrollador\")
$usertype = \"Desarrollador\";
elseif ($doc[\'tipo\'] == \"U_Administrador\")
$usertype = \"Administrador\";
echo \"<tr><td>\".$i.\"</td><td>\".$doc[\'nombre\'].\"
\".$doc[\'apellido\'].\"</td><td>\".$doc[\'correo\'].\"</td>\";
?>
<td>
<a href=\"process/edit_usuario.php?e=2&user=<?php echo $doc[\'_id\'];?>\" type="button" class="btn btn-danger" style="color:#FFF">Delete</a>
</td>
<?php
echo \"</tr>\";
}
?>
</tr>
</tbody>
</table>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

echo "Ok fine.";
?>
