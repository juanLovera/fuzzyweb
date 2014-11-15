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
                            "informacion" => '<div id=\"registro-form\">
            <form><table cellpadding=\'10\'><tr><td><strong>Personal Information</strong></td></tr>
                    <tr><td>Name: </td><td><input type=\"text\" id=\"nombre\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Last Name: </td><td><input class=\"form-control\" type=\"text\" id=\"apellido\" style=\"height:25px; width:200px\" /></td></tr>
                    <tr><td>Institution: </td><td><input type=\"text\" id=\"institucion\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Ocupation: </td><td><input type=\"text\"  id=\"ocupacion\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                    <tr><td>Country: </td><td><select id=\"pais\" class=\"form-control\" style=\"height:25px; width:200px\">
                                <option value=\"\">Seleccione...</option>
<option value="United States">United States</option> <option value="United Kingdom">United Kingdom</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="American Samoa">American Samoa</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antarctica">Antarctica</option> <option value="Antigua and Barbuda">Antigua and Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Benin">Benin</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> <option value="Botswana">Botswana</option> <option value="Bouvet Island">Bouvet Island</option> <option value="Brazil">Brazil</option> <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> <option value="Brunei Darussalam">Brunei Darussalam</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Christmas Island">Christmas Island</option> <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> <option value="Cook Islands">Cook Islands</option> <option value="Costa Rica">Costa Rica</option> <option value="Cote D\'ivoire">Cote D\'ivoire</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> <option value="Faroe Islands">Faroe Islands</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Guiana">French Guiana</option> <option value="French Polynesia">French Polynesia</option> <option value="French Southern Territories">French Southern Territories</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Greece">Greece</option> <option value="Greenland">Greenland</option> <option value="Grenada">Grenada</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-bissau">Guinea-bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Korea, Democratic People\'s Republic of\">Korea, Democratic People\'s Republic of</option> <option value=\"Korea, Republic of\">Korea, Republic of</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Lao People\'s Democratic Republic">Lao People\'s Democratic Republic</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macao">Macao</option> <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Martinique">Martinique</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mexico">Mexico</option> <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> <option value="Moldova, Republic of">Moldova, Republic of</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="Netherlands Antilles">Netherlands Antilles</option> <option value="New Caledonia">New Caledonia</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="Norfolk Island">Norfolk Island</option> <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Pitcairn">Pitcairn</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Reunion">Reunion</option> <option value="Romania">Romania</option> <option value="Russian Federation">Russian Federation</option> <option value="Rwanda">Rwanda</option> <option value="Saint Helena">Saint Helena</option> <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> <option value="Saint Lucia">Saint Lucia</option> <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Sao Tome and Principe">Sao Tome and Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Serbia and Montenegro">Serbia and Montenegro</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> <option value="Swaziland">Swaziland</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syrian Arab Republic">Syrian Arab Republic</option> <option value="Taiwan, Province of China">Taiwan, Province of China</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> <option value="Thailand">Thailand</option> <option value="Timor-leste">Timor-leste</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad and Tobago">Trinidad and Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States">United States</option> <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Venezuela">Venezuela</option> <option value="Viet Nam">Viet Nam</option> <option value="Virgin Islands, British">Virgin Islands, British</option> <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> <option value="Wallis and Futuna">Wallis and Futuna</option> <option value="Western Sahara">Western Sahara</option> <option value="Yemen">Yemen</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option> </select></td></tr>
                    <tr><td style=\"padding-top:50px;\"><strong>Account Information</strong></td></tr>
                    <tr><td>E-mail: </td><td><input type=\"text\" id=\"mail\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Password: </td><td><input type=\"password\" id=\"contrasena\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                    <tr><td>Confirm password: </td><td><input type=\"password\" id=\"confirmar\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                </table><button type=\"button\" class=\"btn btn-custom\" onclick=\"registrar();\" style=\"margin-left:370px; margin-top:5px;\">Sign Up</button></form></div>
            <div id=\"registro-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Loading</strong>
            </div>',
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
            To reset your password please enter the email address you use to sign in.<br/>
            <input type=\"text\" id=\"correoRecuperarContrasena\" placeholder=\"E-mail\" class=\"form-control\" style=\"height:25px; margin-left: 300px; margin-top:30px; width:200px\" />
            <button type=\"button\" class=\"btn btn-custom\" onclick=\"recuperarClave();\" style=\"margin-left:370px; margin-top:10px;\">Send</button>
            </div>
            <div id=\"recuperar-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Loading</strong>
            </div>
            <div id=\"recuperar-ok\" style=\"display: none; text-align: center; padding-top: 60px;\">
                <strong>We\'ve sent you an e-mail with instructions on how to reset your password.</strong>
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
					<label for=\"nombre\">Name</label>
				</td>
				<td valign=\"top\">
					<input class=\"form-control\" type=\"text\" name=\"nombre\" required maxlength=\"50\" style=\"width: 90%; height:25px;\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"email\">E-mail</label>
				</td>
				<td valign=\"top\">
					<input  class=\"form-control\" type=\"text\" name=\"email\" required maxlength=\"80\" style=\"margin-top:10px; height:25px; width: 90%\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"comentarios\">Comments</label>
				</td>
				<td valign=\"top\">
					<textarea class=\"form-control\"  name=\"comentarios\" required maxlength=\"1000\" cols=\"25\" rows=\"6\" style=\"margin-top:10px; height:60px; width: 90%\"></textarea>
				</td>
			</tr>
		</table>
		
		</br><strong>All fields are mandatory.</strong>
		
		<div style=\"text-align:center\">
				<button type=\"submit\" class=\"btn btn-custom\">Send</button>
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
                <tr><td><strong>Name: </strong></td><td><?php echo $_SESSION[\'nombre\']; ?></td><td style=\"padding-left:50px\"><strong>Last Name: </strong></td><td><?php echo $_SESSION[\'apellido\']; ?></td></tr>
                <tr><td><strong>E-mail: </strong></td><td><a href=\"mailto:<?php echo $_SESSION[\'email\']; ?>\"><?php echo $_SESSION[\'email\']; ?></a></td><td style=\"padding-left:50px\"><strong>Institution: </strong></td><td><?php echo $_SESSION[\'institucion\']; ?></td></tr>
                   <tr><td><strong>Occupation: </strong></td><td><?php echo $_SESSION[\'ocupacion\']; ?></td><td style=\"padding-left:50px\"><strong>Country: </strong></td><td><?php echo $_SESSION[\'ubicacion\']; ?></td></tr>
                <tr><td><strong>User Type: </strong></td><td><?php if ($_SESSION[\'usertype\']=="U_Normal")
                                                                        echo "Participant";
                                                                        elseif($_SESSION[\'usertype\']=="U_Desarrollador")
                                                                        echo "Developer";
                                                                        else
                                                                        echo "Administrator"?></td></tr>   </table>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Edit profile",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "EDIT PROFILE",
                            "informacion" => '<div id="modificarperfil-form"><form><table cellpadding="10"><tr><td><strong>Name: </strong></td><td><input class=\"form-control\" type="text" value="<?php echo $_SESSION[\'nombre\']; ?>" id="nombre" style="height:25px;" /></td><td style="padding-left:50px"><strong>Last Name: </strong></td><td><input class=\"form-control\"  type="text" value="<?php echo $_SESSION[\'apellido\']; ?>" id="apellido" style="height:25px;"/></td></tr>
                   <tr><td><strong>Occupation: </strong></td><td><input class=\"form-control\" type="text" value="<?php echo $_SESSION[\'ocupacion\']; ?>" id="ocupacion" style="height:25px; "/></td><td style="padding-left:50px"><strong>Institution: </strong></td><td><input class=\"form-control\"  type="text" value="<?php echo $_SESSION[\'institucion\']; ?>" id="institucion" style="height:25px;"/></td></tr>
                   <tr><td><strong>Country: </strong></td><td><select class=\"form-control\" id="pais" style="height:25px;"/>
                                <option value="<?php echo $_SESSION[\'ubicacion\']; ?>"><?php echo $_SESSION[\'ubicacion\']; ?></option>
<option value="United States">United States</option> <option value="United Kingdom">United Kingdom</option> <option value="Afghanistan">Afghanistan</option> <option value="Albania">Albania</option> <option value="Algeria">Algeria</option> <option value="American Samoa">American Samoa</option> <option value="Andorra">Andorra</option> <option value="Angola">Angola</option> <option value="Anguilla">Anguilla</option> <option value="Antarctica">Antarctica</option> <option value="Antigua and Barbuda">Antigua and Barbuda</option> <option value="Argentina">Argentina</option> <option value="Armenia">Armenia</option> <option value="Aruba">Aruba</option> <option value="Australia">Australia</option> <option value="Austria">Austria</option> <option value="Azerbaijan">Azerbaijan</option> <option value="Bahamas">Bahamas</option> <option value="Bahrain">Bahrain</option> <option value="Bangladesh">Bangladesh</option> <option value="Barbados">Barbados</option> <option value="Belarus">Belarus</option> <option value="Belgium">Belgium</option> <option value="Belize">Belize</option> <option value="Benin">Benin</option> <option value="Bermuda">Bermuda</option> <option value="Bhutan">Bhutan</option> <option value="Bolivia">Bolivia</option> <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> <option value="Botswana">Botswana</option> <option value="Bouvet Island">Bouvet Island</option> <option value="Brazil">Brazil</option> <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> <option value="Brunei Darussalam">Brunei Darussalam</option> <option value="Bulgaria">Bulgaria</option> <option value="Burkina Faso">Burkina Faso</option> <option value="Burundi">Burundi</option> <option value="Cambodia">Cambodia</option> <option value="Cameroon">Cameroon</option> <option value="Canada">Canada</option> <option value="Cape Verde">Cape Verde</option> <option value="Cayman Islands">Cayman Islands</option> <option value="Central African Republic">Central African Republic</option> <option value="Chad">Chad</option> <option value="Chile">Chile</option> <option value="China">China</option> <option value="Christmas Island">Christmas Island</option> <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> <option value="Colombia">Colombia</option> <option value="Comoros">Comoros</option> <option value="Congo">Congo</option> <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> <option value="Cook Islands">Cook Islands</option> <option value="Costa Rica">Costa Rica</option> <option value="Cote D\'ivoire">Cote D\'ivoire</option> <option value="Croatia">Croatia</option> <option value="Cuba">Cuba</option> <option value="Cyprus">Cyprus</option> <option value="Czech Republic">Czech Republic</option> <option value="Denmark">Denmark</option> <option value="Djibouti">Djibouti</option> <option value="Dominica">Dominica</option> <option value="Dominican Republic">Dominican Republic</option> <option value="Ecuador">Ecuador</option> <option value="Egypt">Egypt</option> <option value="El Salvador">El Salvador</option> <option value="Equatorial Guinea">Equatorial Guinea</option> <option value="Eritrea">Eritrea</option> <option value="Estonia">Estonia</option> <option value="Ethiopia">Ethiopia</option> <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> <option value="Faroe Islands">Faroe Islands</option> <option value="Fiji">Fiji</option> <option value="Finland">Finland</option> <option value="France">France</option> <option value="French Guiana">French Guiana</option> <option value="French Polynesia">French Polynesia</option> <option value="French Southern Territories">French Southern Territories</option> <option value="Gabon">Gabon</option> <option value="Gambia">Gambia</option> <option value="Georgia">Georgia</option> <option value="Germany">Germany</option> <option value="Ghana">Ghana</option> <option value="Gibraltar">Gibraltar</option> <option value="Greece">Greece</option> <option value="Greenland">Greenland</option> <option value="Grenada">Grenada</option> <option value="Guadeloupe">Guadeloupe</option> <option value="Guam">Guam</option> <option value="Guatemala">Guatemala</option> <option value="Guinea">Guinea</option> <option value="Guinea-bissau">Guinea-bissau</option> <option value="Guyana">Guyana</option> <option value="Haiti">Haiti</option> <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> <option value="Honduras">Honduras</option> <option value="Hong Kong">Hong Kong</option> <option value="Hungary">Hungary</option> <option value="Iceland">Iceland</option> <option value="India">India</option> <option value="Indonesia">Indonesia</option> <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> <option value="Iraq">Iraq</option> <option value="Ireland">Ireland</option> <option value="Israel">Israel</option> <option value="Italy">Italy</option> <option value="Jamaica">Jamaica</option> <option value="Japan">Japan</option> <option value="Jordan">Jordan</option> <option value="Kazakhstan">Kazakhstan</option> <option value="Kenya">Kenya</option> <option value="Kiribati">Kiribati</option> <option value="Korea, Democratic People\'s Republic of\">Korea, Democratic People\'s Republic of</option> <option value=\"Korea, Republic of\">Korea, Republic of</option> <option value="Kuwait">Kuwait</option> <option value="Kyrgyzstan">Kyrgyzstan</option> <option value="Lao People\'s Democratic Republic">Lao People\'s Democratic Republic</option> <option value="Latvia">Latvia</option> <option value="Lebanon">Lebanon</option> <option value="Lesotho">Lesotho</option> <option value="Liberia">Liberia</option> <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> <option value="Liechtenstein">Liechtenstein</option> <option value="Lithuania">Lithuania</option> <option value="Luxembourg">Luxembourg</option> <option value="Macao">Macao</option> <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> <option value="Madagascar">Madagascar</option> <option value="Malawi">Malawi</option> <option value="Malaysia">Malaysia</option> <option value="Maldives">Maldives</option> <option value="Mali">Mali</option> <option value="Malta">Malta</option> <option value="Marshall Islands">Marshall Islands</option> <option value="Martinique">Martinique</option> <option value="Mauritania">Mauritania</option> <option value="Mauritius">Mauritius</option> <option value="Mayotte">Mayotte</option> <option value="Mexico">Mexico</option> <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> <option value="Moldova, Republic of">Moldova, Republic of</option> <option value="Monaco">Monaco</option> <option value="Mongolia">Mongolia</option> <option value="Montserrat">Montserrat</option> <option value="Morocco">Morocco</option> <option value="Mozambique">Mozambique</option> <option value="Myanmar">Myanmar</option> <option value="Namibia">Namibia</option> <option value="Nauru">Nauru</option> <option value="Nepal">Nepal</option> <option value="Netherlands">Netherlands</option> <option value="Netherlands Antilles">Netherlands Antilles</option> <option value="New Caledonia">New Caledonia</option> <option value="New Zealand">New Zealand</option> <option value="Nicaragua">Nicaragua</option> <option value="Niger">Niger</option> <option value="Nigeria">Nigeria</option> <option value="Niue">Niue</option> <option value="Norfolk Island">Norfolk Island</option> <option value="Northern Mariana Islands">Northern Mariana Islands</option> <option value="Norway">Norway</option> <option value="Oman">Oman</option> <option value="Pakistan">Pakistan</option> <option value="Palau">Palau</option> <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> <option value="Panama">Panama</option> <option value="Papua New Guinea">Papua New Guinea</option> <option value="Paraguay">Paraguay</option> <option value="Peru">Peru</option> <option value="Philippines">Philippines</option> <option value="Pitcairn">Pitcairn</option> <option value="Poland">Poland</option> <option value="Portugal">Portugal</option> <option value="Puerto Rico">Puerto Rico</option> <option value="Qatar">Qatar</option> <option value="Reunion">Reunion</option> <option value="Romania">Romania</option> <option value="Russian Federation">Russian Federation</option> <option value="Rwanda">Rwanda</option> <option value="Saint Helena">Saint Helena</option> <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> <option value="Saint Lucia">Saint Lucia</option> <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> <option value="Samoa">Samoa</option> <option value="San Marino">San Marino</option> <option value="Sao Tome and Principe">Sao Tome and Principe</option> <option value="Saudi Arabia">Saudi Arabia</option> <option value="Senegal">Senegal</option> <option value="Serbia and Montenegro">Serbia and Montenegro</option> <option value="Seychelles">Seychelles</option> <option value="Sierra Leone">Sierra Leone</option> <option value="Singapore">Singapore</option> <option value="Slovakia">Slovakia</option> <option value="Slovenia">Slovenia</option> <option value="Solomon Islands">Solomon Islands</option> <option value="Somalia">Somalia</option> <option value="South Africa">South Africa</option> <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> <option value="Spain">Spain</option> <option value="Sri Lanka">Sri Lanka</option> <option value="Sudan">Sudan</option> <option value="Suriname">Suriname</option> <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> <option value="Swaziland">Swaziland</option> <option value="Sweden">Sweden</option> <option value="Switzerland">Switzerland</option> <option value="Syrian Arab Republic">Syrian Arab Republic</option> <option value="Taiwan, Province of China">Taiwan, Province of China</option> <option value="Tajikistan">Tajikistan</option> <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> <option value="Thailand">Thailand</option> <option value="Timor-leste">Timor-leste</option> <option value="Togo">Togo</option> <option value="Tokelau">Tokelau</option> <option value="Tonga">Tonga</option> <option value="Trinidad and Tobago">Trinidad and Tobago</option> <option value="Tunisia">Tunisia</option> <option value="Turkey">Turkey</option> <option value="Turkmenistan">Turkmenistan</option> <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> <option value="Tuvalu">Tuvalu</option> <option value="Uganda">Uganda</option> <option value="Ukraine">Ukraine</option> <option value="United Arab Emirates">United Arab Emirates</option> <option value="United Kingdom">United Kingdom</option> <option value="United States">United States</option> <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> <option value="Uruguay">Uruguay</option> <option value="Uzbekistan">Uzbekistan</option> <option value="Vanuatu">Vanuatu</option> <option value="Venezuela">Venezuela</option> <option value="Viet Nam">Viet Nam</option> <option value="Virgin Islands, British">Virgin Islands, British</option> <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> <option value="Wallis and Futuna">Wallis and Futuna</option> <option value="Western Sahara">Western Sahara</option> <option value="Yemen">Yemen</option> <option value="Zambia">Zambia</option> <option value="Zimbabwe">Zimbabwe</option> </select></td></tr>
                   </table><br/>
                <button type="button" class=\"btn btn-custom\" onclick="modificarPerfil();" style="margin-left:370px; margin-top:5px;">Send</button>
                               </form></div>
                <div id="modificarperfil-loading" style="padding-right: 90px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Loading</strong>
            </div>
            <div id="modificarperfil-ok" style="padding-right: 90px;display: none; text-align: center; padding-top: 60px;">
                <strong>Your profile has been updated successfully.</strong>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Change picture",
              "seccion" => "Perfil",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CHANGE PICTURE",
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
    ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <?php echo $mens; ?>
</div>
<?php
}
if ($_GET[\'paso\'] != 1){?>Upload the new picture to be associated with your account.<br/><br/>
            <form  method="post" enctype="multipart/form-data" action="process/crop.php"><table cellpadding=\"10\"><tr><td><input type=\"file\" name=\"preview\" style=\"margin-left: 290px;\"/></td></tr>       
            <input type=\"hidden\" name=\"paso\" value=\"1\">
            </table>
            <button type="submit" class=\"btn btn-custom\" style="margin-left:370px; margin-top:5px;">Enter</button>
            </form>
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
			<button type="submit" class=\"btn btn-custom\" style="margin-left:370px; margin-top:10px;">Enter</button>
		</form> <?php }?>
                
            </div>
            <div id=\"modificarfoto-loading\" style=\"padding-right: 90px;text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>
            <div id=\"modificarfoto-ok\" style=\"padding-right: 90px;display: none; text-align: center; padding-top: 60px;\">
                <strong>Your picture has been changed successfully.</strong>
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
            Enter your new e-mail.<br/><br/>
            <form><table cellpadding="10"><tr><td><input type="text" class=\"form-control\" value="<?php echo $_SESSION[\'email\']; ?>" id="mail" style="height:25px; margin-left: 290px; width: 200px;"/></td></tr>
                   
            </table>       
             <button type="button" class=\"btn btn-custom\" onclick="modificarCorreo();" style="margin-left:370px; margin-top:10px;">Enter</button></form>
            </div>
            <div id="modificarcorreo-loading" style="padding-right: 90px;text-align: center; display: none; padding-top: 60px;">
                <img src="img/loader.gif" width="32" height="32" alt=""/><br/><strong>Loading</strong>
            </div>
            <div id="modificarcorreo-ok" style="padding-right: 90px;display: none; text-align: center; padding-top: 60px;">
                <strong>Your e-mail has been changed successfully.</strong>
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
            <form><table><tr><td><input class=\"form-control\" type=\"password\" value=\"\" id=\"contrasena\" placeholder=\"Password\" style=\"margin-left: 300px; margin-top:15px; height:25px; width: 200px; \"/></td></tr>
                    <tr><td><input class=\"form-control\" type=\"password\" value=\"\" id=\"confirmar\" placeholder=\"Confirm Password\" style=\"margin-top:15px; margin-left: 300px; height:25px; width: 200px;\"/></td></tr>
                   
                   </table>
            <button type="button" class=\"btn btn-custom\" onclick="modificarContrasena();" style="margin-left:370px; margin-top:15px;">Enter</button></form>
            </div>
            <div id=\"modificarcontrasena-loading\" style=\"padding-right: 90px;text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Loading</strong>
            </div>
            <div id=\"modificarcontrasena-ok\" style=\"padding-right: 90px;display: none; text-align: center; padding-top: 60px;\">
                <strong>Your password has been updated successfully.</strong>
            </div>',
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Change user type",
              "seccion" => "Usuarios",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "CHANGE USER TYPE",
                            "informacion" => '
<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>The user type has been changed successfully.</div>
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

$subs = array("nombre" => "Delete users",
              "seccion" => "Usuarios",
              "idioma" =>"ENG",
              "bloque" => array(array("nombre" => "DELETE USERS",
                            "informacion" => '<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>The user has been deleted successfully.</div>
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
