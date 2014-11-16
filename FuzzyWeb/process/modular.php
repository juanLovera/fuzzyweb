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

$subs = array("nombre" => "Introducción",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "INTRODUCCIÓN",
                            "informacion" => "Las bases de datos tradicionales solo manejan datos y condiciones precisos que en muchas ocasiones no representan las necesidades reales de información de los usuarios. La teoría de conjuntos difusos provee un marco matemático y computacional formal para representar las nociones de naturaleza vaga o imprecisa. La incorporación de algunos de 
estos conceptos para el modelado y manipulación de bases de datos dio origen a propuestas de 
modelo relacional difuso [5, 9]. Estas fueron luego generalizadas en GEFRED [19], un modelo 
extendido para bases de datos relacionales difusas. A partir de este se extendió el modelo Entidad Relación y el lenguaje SQL, surgiendo FuzzyEER  y FSQL.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Historia",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "HISTORIA",
                            "informacion" => 
                "El proyecto de <strong>fuzzydoDB</strong> (Fuzzy Domain Ordering Data Base) nació con el objetivo de resolver problemas abiertos del Modelo Relacional Difuso, particularmente vinculados a relaciones de similitud, distribuciones de posibilidad y operaciones con atributos difusos.
                </br></br>Sabemos que una Base de Datos es una colección de relaciones, las cuales son especificadas por esquemas relacionales, donde los componentes de las tuplas tienen un nombre de atributo asociado. Estos atributos son atómicos y pueden tener valores discretos o valores nulos. 
                </br></br>Las relaciones son la estructura principal para la representación de datos en el modelo relacional. Este modelo es basado en la lógica de predicados y en la teoría de conjuntos, además, es el más utilizado en la actualidad para representar problemas reales y administrar datos dinámicamente. Sin embargo, cabe destacar que dicho modelo es limitado en cuanto a expresividad se refiere, pues se basa en la lógica tradicional donde las condiciones sólo pueden tomar dos valores: verdadero o falso. Es por ello que se ha incorporado la lógica difusa en los lenguajes de consulta a bases de datos, tales son las propuestas de FSQL y SQLf.
                </br></br>En una relación difusa, cada tupla está dotada de un grado de membresía. Si en una base de datos relacional aplicamos una consulta con condiciones en lógica difusa, el resultado es una relación difusa.
                </br></br>Para la representación y tratamiento de información imprecisa en el ámbito de las Bases de Datos Relacionales, se han presentado varios modelos, entre ellos los que emplean lógica difusa, o una combinación que incluya la lógica difusa. Uno de ellos es el Modelo GEFRED.
                </br></br>Una base de datos GEFRED tiene requerimientos apreciables de espacio en disco. Las estructuras de almacenamiento físico y recuperación de los manejadores relacionales no son adecuadas a GEFRED. Es necesario definir operadores de consulta para GEFRED, así como los algoritmos que los implementen en forma eficiente. Estas estructuras y operadores tendrían impacto en la optimización de consultas.
                </br></br>Nuestros objetivos:
                    <ul>
                        <li>Diseñar estructuras de almacenamiento físico y de recuperación de los manejadores relacionales, adecuadas al modelo relacional GEFRED.</li>
                        <li>Definir operadores de consulta para GEFRED, así como los algoritmos que los implementen en forma eficiente.</li>
                        <li>Obtener estructuras almacenamiento y operadores que ayuden a optimizar las consultas en bases de datos difusas.</li>
                    </ul>
            
                 </div>",                  
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Miembros",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "MIEMBROS",
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

$subs = array("nombre" => "Tipos de datos difusos",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "TIPOS DE DATOS DIFUSOS",
                            "informacion" => "Para representar datos difusos, se definieron 5 tipos de atributos difusos, basados en la representación de FuzzyEER.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TIPO 1",
                            "informacion" => "Atributos con valores de datos precisos provistos con etiquetas linguísticas, interpretadas como números difusos, con el propósito de ser usadas en condiciones difusas.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TIPO 2",
                            "informacion" => "Incluye distribuciones de posibilidad en un dominio ordenado. Los conjuntos difusos se caracterizan por una función de membresía cuyo rango está en el intervalo real [0, 1], cuánto más se acerca a 1 el grado de membresía de un elemento, éste está más posiblemente (o certeramente) incluido en el conjunto. Así, 0 es la medida de completa de exclusión y 1 la de completa inclusión.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TIPO 3",
                            "informacion" => "Su dominio es un conjunto de etiquetas dotado de una relación difusa de similitud. Un ejemplo de este tipo de dato es los colores,  identificados por sus nombres, ellos tienen una relación de similitud, en el sentido de ser parecidos entre sí.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TIPO 4",
                            "informacion" => "Es similar al tipo 3 pero sin las relaciones de similitud.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                          array("nombre" => "TIPO 5",
                            "informacion" => "Atributos con valores representados por distribuciones de posibilidad sobre un conjunto de etiquetas provistas de una relación de similitud.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())    
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Comparación con otros proyectos",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "COMPARACIÓN CON OTROS PROYECTOS",
                            "informacion" => "Existen varias propuestas para la incorporación de conceptos provenientes de la teoría de conjuntos difusos en SQL, tales como: OMRON, FQUERY, ISKREOT, PFSQL, SOFTSQL, SQLf y FSQL, entre otras. De ellas las más destacadas por su completitud son SQLf y FSQL.<br/><br/>
En lo que concierne a este equipo de trabajo, FSQL es la única de estas propuestas que contempla toda la variedad de datos difusos del modelo FuzzyEER, en particular los datos Tipo 3: etiquetas sobre las cuales se define una relación de similitud. Sin embargo, en el trabajo previo “Consultas con Ordenamiento basado en Similitud” se observó que FSQL tiene una deficiencia en el concepto que se maneja para la relación de similitud y en su forma de manipularla. <br/><br/>
A pesar que FSQL permite la creación de tipos datos difusos y usarlos para definir atributos de las tablas, en definición de este lenguaje no se permite usar un atributo definido como de Tipo 3 en una cláusula GROUP BY. Los autores de FSQL  no indican la razón por la que se impone esta restricción. Puede inferirse del hecho que las operaciones de agrupamiento y ordenamiento en consultas a bases de datos se encuentran estrechamente vinculadas por razones operativas. El hecho de no tener una semántica definida para el ordenamiento de un tipo de datos naturalmente dificultaría no sólo las consultas ordenas, sino también las particionadas. <br/><br/>
Por otro lado, SQLf ha sido más recientemente extendido con una cláusula GROUP BY difusa. Esta extensión trabaja con dominios de atributos clásicos sobre los cuales se define un conjunto de términos lingüísticos que denotan conjuntos difusos de una partición del dominio de los atributos. No consideran el caso de atributos Tipo 3. 
",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Ventajas",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "VENTAJAS",
                            "informacion" => "El lenguaje estándar para bases de datos SQL provee constructores que permiten hacer consultas basadas en el ordenamiento y/o en el particionamiento de las relaciones según los valores de atributos específicos. Si se permiten atributos difusos como los propuestos en el modelo GEFRED, tales constructores de consulta deben extenderse de forma que provean una semántica adecuada en presencia de datos difusos. Sin embargo, la definición de FSQL lo que hace es prohibir que se usen estos atributos en el criterio de ordenamiento o particionamiento en una consulta, lo cual resulta poco satisfactorio. Otras propuestas conocidas de extensión a SQL con conjuntos difusos ni siquiera consideran estos tipos de atributos.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Proyectos anteriores",
              "seccion" => "Acerca",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "PROYECTOS ANTERIORES",
                            "informacion" => "Prototipo para definir, almacenar y consultar una base de datos relacional con atributos difusos. Se implementa como un traductor de SQL extendido con atributos difusos, a SQL entendido por PostgreSQL.<br/><br/>
                             Implementación de una librería para la ejecución de sentencias que involucran datos difusos, una aplicación cliente que simula la consola de MariaDB y una aplicación web que muestra el potencial de las consultas en un contexto de aplicación real como lo es un directorio telefónico de empresas.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Descarga",
              "seccion" => "Descarga",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "DESCARGA",
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

$subs = array("nombre" => "Requerimientos",
              "seccion" => "Descarga",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "REQUERIMIENTOS",
                            "informacion" => "<ul>
	<li>Sistema operativo Linux</li>
	<li>Java JDK</li>
	<li>JavaCC</li>
	<li>Ant</li>
	<li>PostgreSQL 9.3 o más reciente, configurado apropiadamente</li>
	<li>QBossSqlParser (JSqlParser)</li>
	<li>Los siguientes .jar:</li>
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

$subs = array("nombre" => "Manual de instalación",
              "seccion" => "Descarga",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "MANUAL DE INSTALACIÓN",
                                       "informacion" => "A continuación las instrucciones para la instalación del proyecto <strong>fuzzydoDB</strong>:

</br></br><strong>Base de Datos</strong>

</br>
<ol>
	<li>Instalar PostgreSQL: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">sudo apt-get install postgresql</mark></strong> </li></br>
	<li>Crear el usuario fuzzy que usará la base de datos: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">sudo adduser fuzzy</mark></strong> </br></br> Llenar todos los campos con 'fuzzy' e indicar que sea superusuario.</li></br>
	<li>Ingresar a PostgreSQL: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">sudo -u postgres psql</mark></strong> </li></br>
	<li>Crear el usuario dentro de PostgreSQL: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">create user fuzzy with password 'fuzzy' createdb;</mark></strong> </br></br> <u>Nota:</u> El comando debe terminar con punto y coma.</li></br>
	<li>Crear la base de datos fuzzy: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">create database fuzzy;</mark></strong> </br></br> <u>Nota:</u> El comando debe terminar con punto y coma.</li></br>
	<li>Conceder todos los permisos de la base de datos al usuario: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">grant all privileges on database fuzzy to fuzzy;</mark></strong> </br></br> <u>Nota:</u> El comando debe terminar con punto y coma.</li></br>
	<li>Se convierte usuario fuzzy en superusuario:</br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">alter user fuzzy with superuser;</mark></strong> </br></br> <u>Nota:</u> Este paso puede ser omitido si al comando en el paso 4 se añade <strong>--superuser</strong></li></br>
	<li>Salir de PostgreSQL:</br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">\q</mark></strong> </br></br> Ahora se puede ingresar a PostgreSQL como usuario fuzzy: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">sudo -u fuzzy psql</mark></strong></li></br>
	<li>En un terminal ubicarse en el siguiente directorio: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">FuzzyDB/src/sql_scripts/</mark></strong> </br></br> Una vez allí, ejecutar:</br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">sudo -u fuzzy psql</mark></strong></li></br>
	<li>Ejecutar el script <i>create-schema.sql:</i> </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">\i create-schema.sql</mark></strong> </li></br>
</ol>


</br><strong>Proyecto</strong>

</br>
<ol>
	<li>Ejecutar: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">parser.sh</mark></strong> </br></br> El cual se encuentra en el directorio principal fuzzy-client.</li></br>
	<li>Ubicarse en el directorio FuzzyDB y ejecutar: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">ant clean jar</mark></strong> </li></br>
	<li>Ejecutar el proyecto con: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">java -jar dist/FuzzyDB.jar</mark></strong> </br></br> <u>Nota:</u> Si le aparece el siguiente error: </br></br>
	    <div style=\"padding: 25px; width: 687px; height: 320px; background-color: #F0F0F0;\">Exception in thread \"main\" java.lang.NoClassDefFoundError: com/beust/jcommander/ParameterException</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getDeclaredMethods0(Native Method)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.privateGetDeclaredMethods(Class.java:2570)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod0(Class.java:2813)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.Class.getMethod(Class.java:1663)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.getMainMethod(LauncherHelper.java:494)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.launcher.LauncherHelper.checkAndLoadMain(LauncherHelper.java:486)</br>
		Caused by: java.lang.ClassNotFoundException: com.beust.jcommander.ParameterException</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:366)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader$1.run(URLClassLoader.java:355)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.security.AccessController.doPrivileged(Native Method)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.net.URLClassLoader.findClass(URLClassLoader.java:354)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:425)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at sun.misc.Launcher$AppClassLoader.loadClass(Launcher.java:308)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at java.lang.ClassLoader.loadClass(ClassLoader.java:358)</br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... 6 more</br>
		</div></li></br>
		
		Entonces siga las siguientes instrucciones:
		
		</br></br>
		<ol>
			<li>Abrir el proyecto con NetBeans (versión 8.0.1 o más reciente) y realizar un <strong>clean and build</strong>.</li></br>
			<li>Ejecutar el proyecto con: </br></br> <strong>&nbsp;&nbsp;&nbsp; <mark style=\"background-color: #C0C0C0;\">java -jar dist/FuzzyDB.jar</mark></strong> </li>
		</ol>
</ol>

</br>Ahora ya puede proceder a ejecutar instrucciones SQL.
",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);
$subs = array("nombre" => "Versiones anteriores",
              "seccion" => "Descarga",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "VERSIONES ANTERIORES",
                            "informacion" => "No hay versiones anteriores actualmente.",
                        "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "API",
              "seccion" => "API",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "API",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 2",
              "seccion" => "API",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "TIPO 2",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 3",
              "seccion" => "API",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "TIPO 3",
                            "informacion" => "<strong> GROUP BY y HAVING</strong><br/><br/>La sintaxis y semántica que aquí se le da a las consultas basadas en particionamiento (cláusualas GROUP BY y HAVING de SQL) se limita a cuando el criterio 
expresado involucra atributos Tipo 3. Se restringe también al caso en que el atributo toma como valor exactamente una etiqueta.<br/><br/>  

<strong>PARTICIONES DIFUSAS</strong><br/><br/>
<img src=\"img/mascotaAPIInterrogacion.png\" alt=\"Mapache\" height=\"372\" width=\"228\"style=\"float:left; margin-right:10px;\"/>
En los conjuntos clásicos la pertenencia de un elemento a un conjunto es rígida, definida por una función indicatriz cuyo rango es {0,1}, donde el 0 representa
la exclusión, mientras que el 1 la inclusión. Este concepto es flexibilizado en los conjuntos difusos, permitiendo no sólo elementos incluidos y excluidos, 
sino también elementos parcialmente incluidos, con grados en el intervalo (0,1).<br/>

<br/><strong>Definición 1.</strong> Un <strong>conjunto difuso <i>F</i> en un universo X</strong> está definido por una <strong>función de membresía</strong> 
<i>µF:X &#8594; </i> [0,1], donde los elementos tienen pertenencia gradual. Se dice que <i>x</i> &#8712; <i>X</i> tiene <strong>pertenencia total</strong> o está
<strong>completamente incluido</strong> cuando µF(x)=1; en formal dual se dice que está <strong>completamente excluido</strong> cuando <i>µF(x)</i>=0; 
finalmente, está <strong>parcialmente incluido</strong> o <strong>gradualmente incluido</strong> cuando <i>µF(x)</i>&#8712;(0,1).<br/><br/>

Al conjunto formado por los elementos parcialmente incluidos se le conoce como el borde del conjunto difuso, El conjunto de los elementos completamente 
incluidos se les llama el núcleo, Los elementos que no están completamente excluidos conforman el soporte.<br/>

<br/><strong>Definición 2.</strong> Sea <i>F</i> un conjunto difuso <i>F</i> en un universo <i>X</i> , se definen los conjuntos clásicos: 
<strong>núcleo(F)</strong> = { <i>x</i> &#8712; <i>X</i> | <i>µF(x)</i>=1 }; <strong>borde(F)</strong> = { <i>x</i> &#8712; <i>X</i> | 0<<i>µF(x)</i><1 }; y 
<strong>soporte(F)</strong> = { <i>x</i> &#8712; <i>X</i> | <i>µF(x)</i>>0 }.<br/><br/>

Para representar por extensión un conjunto difuso <i>F</i> en el universo <i>X</i>, se usa la notación <i>F</i>={ <i>x<sub>1</sub>/µF(x<sub>1</sub>), 
x<sub>2</sub>/µF(x<sub>2</sub>),..., x<sub>n</sub>/µF(x<sub>n</sub>) </i>} la cual asocia cada elemento <i>x<sub>n</sub></i> con su grado de membresía 
<i>µF(x<sub>i</sub>)</i>. Si un elemento de <i>X</i> no aparece en la representación por extensión de <i>F</i> es porque está completamente excluido. 
Análogamente, para representar por comprensión un conjunto difuso <i>F</i> en el universo <i>X</i>, se usa la notación <i>F</i>={<i> x/µF(x)| x &#8712; X </i>}.
<br/>

<br/><strong>Definición 3.</strong> Sea <i>X</i> un conjunto de valores, <i>S</i> un subconjunto difuso de <i>X</i> &#215; <i>X</i> caracterizado por 
<i>µ<sub>s</sub>:X &#215; X &#8594; </i>[0,1], diremos que <i>S</i> es una <strong>relación difusa de similitud</strong> si y sólo si cumple con las propiedades
de <strong>reflexividad</strong> &#8704;<i>x</i>&#8712;<i>X</i> <i>µ<sub>s</sub>(x,x)</i>=1, <strong>simetría</strong> 
&#8704;<i>x,y,z</i>&#8712;<i>X</i> <i>µ<sub>s</sub>(x,y)</i>=<i>µ<sub>s</sub>(y,x)</i> y <strong>transitividad</strong> 
&#8704;<i>x,y,z&#8712;X</i> ((<i>µ<sub>S</sub>(x,y)</i>=1 &#8743; <i>µ<sub>S</sub>(y,z) = &#946;</i> &#8658; <i>µ<sub>S</sub>(x,z) = &#946;</i>) &#8743; 
(<i>µ<sub>S</sub>(x,y) = &#946;</i> &#8743; <i>µ<sub>S</sub>(y,z) = 1</i> &#8658; <i>µ<sub>S</sub>(x,z) = &#946;</i>)).<br/>

<br/><strong>Definición 4.</strong> Sea <i>X</i> un conjunto de valores, <i>S</i> una relación de similitud difusa en X: <i>S</i> induce una <strong>partición 
difusa</strong> <i>P<sub>S</sub></i> sobre el conjunto de valores <i>X</i>, <i>P<sub>S</sub></i> = { <i>S</i>[<i>x</i>] | <i>x</i> &#8712; <i>X</i> }; a cada 
elemento <i>S</i>[<i>x</i>] de esta partición difusa lo llamamos la <strong>clase difusa</strong> de <i>x</i>, éste es el conjunto difuso descrito por la 
función de membresía <i>µ<sub>S[x]</sub>(y)</i> = <i>µ<sub>S[x]</sub>(x,y)</i>.<br/><br/>

Las cláusulas GROUP BY y HAVING son opcionales y producen una tabla agrupada, que es un conjunto de grupos, derivados durante la evaluación de dichas cláusulas.
Un grupo es un conjunto de filas en las que todos los valores de la(s) columna(s) pertenecientes a la <grouping columns> son iguales. Si no se especifica una 
cláusula GROUP BY el grupo es toda la tabla. Una tabla agrupada puede considerarse como una colección de tablas. Las funciones de agregación operan sobre las 
tablas individuales (o grupos) que están dentro de la tabla agrupada.<br/>

Se dice que una columna referenciada en la cláusula GROUP BY es una columna de agrupamiento. El resultado de la cláusula GROUP BY es una partición de la tabla 
en un conjunto de grupos. El conjunto está formado por el número mínimo de grupos tales que, para cada columna de agrupamiento de cada grupo de más de una fila,
no hay dos valores distintos de esa columna de agrupamiento. Cada fila de un grupo dado contiene los mismos valores en todas las columnas de agrupamiento 
listadas. Cuando una condición de búsqueda es aplicada a un grupo, una referencia a una columna de agrupamiento es una referencia a su valor.<br/>

Cuando se especifica una cláusula HAVING, la tabla agrupada se deriva de la eliminación de los grupos, de la tabla resultante de la cláusula GROUP BY 
previamente especificada, que no cumplen la <group condition>. La cláusula HAVING sólo tiene sentido cuando se ha especificado previamente una cláusula 
GROUP BY, por lo que cada columna referenciada en la <group condition> debe ser una columna de agrupamiento o estar especificada en una función de agregación o
ser una referencia externa.<br/>

Cuando la <group condition> se aplica a un grupo dado, ese grupo es el argumento de la función de agregación contenida en la condición a menos que la columna 
referenciada en la función de agregación sea una referencia externa. Si en la <group condition> aparece una subconsulta, ésta es ejecutada para cada grupo de 
la tabla agrupada. El resultado de la subconsulta es utilizado en la evaluación de la <group condition> para cada grupo dado de la tabla agrupada. Si la 
subconsulta ejecutada contiene una referencia externa a una columna de la tabla agrupada, entonces, la referencia es a los valores de esa columna en el grupo 
dado de dicha tabla.<br/>

<br/><strong>FORMALIZACIÓN DEL RESULTADO PARA LAS CLÁUSULAS GROUP BY Y HAVING</strong><br/><br/>

<strong>Definición 5.</strong> Sea <i>C</i> la consulta SQL (clásico) SELECT <i>c1,c2, ,cn</i> FROM <i>T</i> GROUP BY <i>k1,,ko</i> HAVING <i>cond(Gi)</i> 
donde <i>cj</i> &#8712; { <i>k1,,ko</i> } ó <i>c<sub>j</sub></i> es de la forma <i>agg<sub>j</sub>(a<sub>j</sub>)</i> con <i>agg<sub>j</sub></i> una función 
de agregación. Esta consulta establece la relación de equivalencia <i>&#961;</i> sobre las tuplas de <i>T</i>: <i>&#961;</i>(<i>t<sub>p</sub>,t<sub>q</sub></i>) &#8801; &#8704;<i>r</i>&#8712;{1,,<i>o</i>}(<i>t<sub>p</sub>.k<sub>r</sub> = t<sub>q</sub>.k<sub>r</sub></i>), la relación <i>&#961;</i> induce sobre <i>T</i> una partición clásica <i>P<sub>&#961;</sub></i>. Sea &#915; la proyección de <i>T</i> en los atributos 
<i>k<sub>1</sub>,,k<sub>o</sub></i>, &#915; = { (<i>t.k<sub>1</sub>, t.k<sub>2</sub>, , t.k<sub>o</sub></i>) | <i>t</i> &#8712; <i>T</i> } ={ <i>&#947;<sub>1</sub>, &#947;<sub>2</sub>, , &#947;<sub>l</sub></i> } para <i>i</i>&#8712;{<i>1l</i>} sea <i>G<sub>i</sub></i>&#8712;<i>P<sub>&#961;</sub></i> la clase tal que &#8707;<i>t</i>&#8712;<i>T</i> (<i>&#947;<sub>i</sub></i>=(<i>t.k<sub>1</sub>, t.k<sub>2</sub>, , t.k<sub>o</sub></i>) &#8743; <i>t</i>&#8712;<i>G<sub>i</sub></i>). Entonces, <strong>el 
resultado de <i>C</i> es: <i>resultset</i> (<i>C</i>) ={(<i>v<sub>i1</sub>, v<sub>i2</sub>, , v<sub>in</sub></i>) | <i>i</i>&#8712;{1<i>l</i>} &#8743; <i>cond(G<sub>i</sub>)</i> }</strong>, donde <i>v<sub>ij</sub></i> = &#947;<sub>i</sub>.c<sub>j</sub> si <i>c<sub>j</sub></i>&#8712;{<i>k<sub>1</sub>,,k<sub>o</sub></i>} y <i>v<sub>ij</sub></i> = <i>agg<sub>j</sub></i> {<i>t.a<sub>j</sub></i> | <i>t</i>&#8712;<i>G<sub>i</sub></i> } si <i>c<sub>j</sub></i> = <i>agg<sub>j</sub>(a<sub>j</sub>)</i>. 
Si la cláusula HAVING no se especifica la <i>cond(G<sub>i</sub>)</i>&#8801;true.<br/>

<br/><strong>Definición 6.</strong> Una <strong>consulta de agrupamiento difuso</strong> es una expresión de la forma <strong>SELECT <i>c<sub>1</sub>,c<sub>2</sub>, ,c<sub>n</sub></i> FROM T GROUP BY <i>m<sub>1</sub> k<sub>1</sub>,, m<sub>o</sub></i> ko HC</strong>. 
Donde: <i>T</i> es una expresión SQL que denota una tabla; <i>k<sub>1</sub>,,k<sub>o</sub></i> son atributos de <i>T</i>; cada <i>c<sub>j</sub></i> es tal que <i>c<sub>j</sub></i>&#8712;{<i>k<sub>1</sub>,,k</i>} ó <i>c<sub>j</sub></i>=<i>agg<sub>j</sub>(a<sub>j</sub>)</i> con <i>agg<sub>j</sub></i> una función de 
agregación y <i>a<sub>j</sub></i> atributo de <i>T</i>; <i>HC</i> es la cláusula having, <i>HC</i> = <i>&#949;</i> (el string vacío) ó <i>HC</i> es de la forma HAVING <i>cond</i>, siendo <i>cond</i> una expresión lógica llamada la 
condición de grupo; cada <i>m<sub>i</sub></i>=SIMILAR ó <i>m<sub>i</sub></i>=<i>&#949;</i> (el string vacío), en el caso que <i>m<sub>i</sub></i>=SIMILAR, <i>dom(k<sub>i</sub>)</i> debe ser un dominio difuso <i>&#402;d<sub>i</sub></i> dotado de una relación de 
similitud <i>S<sub>i</sub></i>.<br/>

<br/><strong>Definición 7.</strong> Sea <i>C</i> una consulta de agrupamiento difuso SELECT <i>c<sub>1</sub>,c<sub>2</sub>, ,c<sub>n</sub></i> FROM <i>T</i> GROUP BY <i>m<sub>1</sub> k<sub>1</sub>,, m<sub>o</sub> k<sub>o</sub> HC</i>. Diremos que la <strong>relación difusa 
<i>&#963;</i> establecida por <i>C</i></strong> sobre las tuplas de <i>T</i> es una relación definida mediante la función de membresía: <i>µ<sub>&#963;</sub>(t<sub>p</sub>,t<sub>q</sub>)</i> = min<sub><i>r&#8712;{1,,o}</i></sub> <i>µ<sub>r</sub>(t<sub>p</sub>.k<sub>r</sub>,t<sub>q</sub>.k<sub>r</sub>)</i>, donde para cada <i>m<sub>r</sub></i> la relación <i>µ<sub>r</sub></i> sobre <i>dom(k<sub>r</sub>)</i> se define por los casos siguientes. En el caso que <i>m<sub>r</sub></i>=&#949;<strong>:</strong> si <i>t<sub>p</sub>.k<sub>r</sub>=t<sub>q</sub>.k<sub>r</sub></i> entonces 
<i>µ<sub>r</sub>(t<sub>p</sub>.k<sub>r</sub>,t<sub>q</sub>.k<sub>r</sub>)</i> = 1, si <i>t<sub>p</sub>.k<sub>r</sub></i> &#8800; <i>t<sub>q</sub>.k<sub>r</sub></i> entonces <i>µ<sub>r</sub>(t<sub>p</sub>.k<sub>r</sub>,t<sub>q</sub>.k<sub>r</sub>)</i> = 0. En el caso que <i>m<sub>r</sub></i>=SIMILAR sea <i>dom(k<sub>i</sub>)</i> el dominio difuso <i>&#402;d<sub>i</sub></i> dotado de una relación de 
similitud <i>S<sub>i</sub></i>, entonces <i>µ<sub>r</sub>(t<sub>p</sub>.k<sub>r</sub>,t<sub>q</sub>.k<sub>r</sub>)</i> = <i>µ<sub>Sr</sub>(t<sub>p</sub>.k<sub>r</sub>,t<sub>q</sub>.k<sub>r</sub>)</i>.<br/>

<br/><strong>Definición 8.</strong> Sea <i>C</i> una consulta de agrupamiento difuso SELECT <i>c<sub>1</sub>,c<sub>2</sub>, ,c<sub>n</sub></i> FROM <i>T</i> GROUP BY <i>m<sub>1</sub> k<sub>1</sub>,, m<sub>o</sub> k<sub>o</sub> HC</i>. Sea <i>&#963;</i> la relación de similitud 
difusa establecida por <i>C</i>. El <strong>resultado de <i>C</i> es el conjunto difuso de tuplas <i>resultset</i>(<i>C</i>)={(<i>v<sub>i1</sub>,v<sub>i2</sub>,,v<sub>in</sub> </i>)/<i>µ<sub>i</sub></i> |<i>i</i>&#8712;{1<i>l</i>}}</strong>. Donde <i>l</i> es la cardinalidad de la proyección de T en los atributos <i>k<sub>1</sub>,,k<sub>o</sub></i>, &#915; ={ (<i>t.k<sub>1</sub>,t.k<sub>2</sub>,,t.k<sub>o</sub></i>) | <i>t</i>&#8712;<i>T</i> }, cuya extensión es &#915; ={ <i>&#947;<sub>1</sub>, &#947;<sub>2</sub>, , &#947;<sub>l</sub></i>};
para cada <i>i</i>&#8712;{1<i>l</i>} sea <i>&#964;<sub>i<sub></i>&#8712;<i>T</i> cualquier tupla tal que <i>&#947;<sub>i</sub></i> = (<i>&#947;<sub>i</sub>.k<sub>1</sub>, &#947;<sub>i</sub>.k<sub>2</sub>,,&#947;<sub>i</sub>.k<sub>o</sub></i>), si <i>c<sub>j</sub></i>&#8712;{<i>k<sub>1</sub>,,k<sub>o</sub></i>} entonces <i>v<sub>ij</sub></i> =<i>&#964;<sub>i</sub>.c<sub>j</sub></i> , si <i>c<sub>j</sub></i> es de la forma <i>agg<sub>j</sub>(a<sub>j</sub>)</i> entonces 
<i>v<sub>ij</sub></i> =<i>agg<sub>j</sub></i>{<i>&#964;.a<sub>j</sub> /µ<sub>&#963;[&#964;i]</sub>(&#964;)| &#964;&#8712;&#963;[&#964;<sub>i</sub>]</i>}, si <i>HC</i>=&#949; entonces <i>µ<sub>i</sub></i>=1, si <i>HC</i> es de la forma HAVING <i>cond</i> entonces <i>µ<sub>i</sub></i> = <i>µ(cond(&#963;[&#964;i]))</i>, esto es el grado en que el grupo &#963;[&#964;<sub>i</sub>] satisface la expresión <i>cond</i>.<br/>

<br/><strong>Definición 9.</strong> Sea COUNT(<i>a<sub>j</sub></i>) en una en una consulta de agrupamiento difuso <i>C</i>, con &#963; la relación de similitud difusa establecida por <i>C</i>, &#964;<sub>i</sub> una 
tupla en <i>T</i> la tabla base de <i>C</i>, definimos COUNT(<i>a<sub>j</sub></i>) como <strong>COUNT{<i>&#964;.a<sub>j</sub></i> /<i>µ<sub>&#963;[&#964;i]</sub>(&#964;) | &#964;&#8712;&#963;[&#964;<sub>i</sub>] </i>} = <i>&#8721;{&#956;<sub>&#963;[&#964;i]</sub>(&#964;)</i>| &#964;&#8712;&#963;[&#964;<sub>i</sub>]} (cardinalidad <i>&#8721;count</i>)</strong>.<br/>

<br/><strong>Definición 10.</strong> Sea <i>agg<sub>j</sub>(a<sub>j</sub>)</i> una función de agregación distinta de COUNT(<i>a<sub>j</sub></i>) en consulta de agrupamiento difuso <i>C</i>, con &#963; la relación de 
similitud difusa establecida por <i>C</i>, <i>t<sub>i</sub></i> una tupla en <i>T</i> la tabla base de <i>C</i>, definimos <i>agg<sub>j</sub>(a<sub>j</sub>)</i> como sigue: 
<strong><i>agg<sub>j</sub>{ t.a<sub>j</sub>/&#956;<sub>&#963;[ti]</sub>(t) | t&#8712;&#963;[t<sub>i</sub>] } = agg<sub>j</sub>{ t.a<sub>j</sub> | t&#8712; soporte&#963;[t<sub>i</sub>] }</i></strong>.<br/>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 4",
              "seccion" => "API",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "TIPO 4",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 5",
              "seccion" => "API",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "TIPO 5",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Publicaciones asociadas",
              "seccion" => "Documentación",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "PUBLICACIONES ASOCIADAS",
                            "informacion" => "En esta sección se encuentran todas las publicaciones asociadas al proyecto.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                  array("nombre" => "PAPERS",
                            "informacion" => "<div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">\"Consultas con Agrupamiento basado en Similitud\"<br/><br/><div style=\"padding-left:100px; text-align:right;\"><img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=http://www.scielo.cl/pdf/ingeniare/v22n4/art07.pdf target=\"_blank\"><strong>Ver artículo</strong></a></div></div> </br> <div style=\"background-color:#F0F0F0; width:750px; padding:16px; text-align:justify; margin-bottom: 10px;\">Carrasquel, Soraya; Rodriguez, Rosseline; Tineo, L. \"Consultas con Ordenamiento basado en Similitud\". TELEMATIQUE. 2013. Indexada en el Latindex Catálogo. . Vol. 12, pp. 24 - 45. Disponible en:\"<br/><br/><div style=\"padding-left:100px; text-align:right;\"><img src=\"img/ir_icono.png\" width=\"16\" height=\"16\" alt=\"Ir\" style=\"margin-right: 6px\" /><a href=http://publicaciones.urbe.edu/index.php/telematique/article/view/2255/pdf target=\"_blank\"><strong>Ver artículo</strong></a></div></div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array()),
                  array("nombre" => "INVESTIGACIONES",
                            "informacion" => "-",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Conferencias",
              "seccion" => "Documentación",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "CONFERENCIAS",
                            "informacion" => "-",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Entrevistas",
              "seccion" => "Documentación",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "ENTREVISTAS",
                            "informacion" => "-",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Pruebas en línea",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "PRUEBAS EN LÍNEA",
                            "informacion" => "Mini manual de cómo usar las pruebas en línea.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Pruebas en consola",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "PRUEBAS EN CONSOLA",
                            "informacion" => "<iframe id=\"conso\" style=\"margin-left: auto; margin-right: auto; width: 810px; height: 400px; position: absolute; left: 350px\" src=\"http://localhost/terminal/\"></iframe>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Demostración de funcionamiento",
              "seccion" => "Pruebas en línea",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "DEMOSTRACIÓN DE FUNCIONAMIENTO",
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

$subs = array("nombre" => "Desempeño",
              "seccion" => "Desempeño",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "DESEMPEÑO",
                            "informacion" => "En esta sección se podrán colocar los análisis de desempeño realizados sobre las bases de datos de tipos difusos del proyecto <strong>fuzzydoDB</strong>.",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga_des" => "activated",
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Registro",
              "seccion" => "Comunidad_p",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "REGISTRO",
                            "informacion" => "<div id=\"registro-form\">
            <form><table cellpadding='10'><tr><td><strong>Datos Personales</strong></td></tr>
                    <tr><td>Nombre: </td><td><input type=\"text\" id=\"nombre\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Apellido: </td><td><input class=\"form-control\" type=\"text\" id=\"apellido\" style=\"height:25px; width:200px\" /></td></tr>
                    <tr><td>Institución: </td><td><input type=\"text\" id=\"institucion\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Ocupación: </td><td><input type=\"text\"  id=\"ocupacion\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                    <tr><td>País de residencia: </td><td><select id=\"pais\" class=\"form-control\" style=\"height:25px; width:200px\">
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
                    <tr><td>E-mail: </td><td><input type=\"text\" id=\"mail\" class=\"form-control\" style=\"height:25px; width:200px\" /></td><td>Contraseña: </td><td><input type=\"password\" id=\"contrasena\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                    <tr><td>Confirmar contraseña: </td><td><input type=\"password\" id=\"confirmar\" class=\"form-control\" style=\"height:25px; width:200px\"/></td></tr>
                </table><button type=\"button\" class=\"btn btn-custom\" onclick=\"registrar();\" style=\"margin-left:370px; margin-top:5px;\">Registrar</button></form></div>
            <div id=\"registro-loading\" style=\"text-align: center; display: none; padding-top: 60px;\">
                <img src=\"img/loader.gif\" width=\"32\" height=\"32\" alt=\"\"/><br/><strong>Cargando</strong>
            </div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Recuperar contraseña",
              "seccion" => "Comunidad_p",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "RECUPERAR CONTRASEÑA",
                            "informacion" => "<div id=\"recuperar-form\">
            Para recuperar su contraseña por favor ingrese el correo electrónico asociado a su cuenta.<br/>
            <input type=\"text\" id=\"correoRecuperarContrasena\" placeholder=\"Correo Electr&oacute;nico\" class=\"form-control\" style=\"height:25px; margin-left: 300px; margin-top:30px; width:200px\" />
            <button type=\"button\" class=\"btn btn-custom\" onclick=\"recuperarClave();\" style=\"margin-left:370px; margin-top:10px;\">Enviar</button>
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

$subs = array("nombre" => "Contáctanos",
              "seccion" => "Comunidad",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "CONTÁCTANOS",
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

$subs = array("nombre" => "Donar",
              "seccion" => "Comunidad",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "DONAR",
                            "informacion" => "En esta sección se colocarán alternativas para donar con el desarrollo del proyecto <strong>fuzzydoDB</strong>.
</br></br>
",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Compartir",
              "seccion" => "Comunidad",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "COMPARTIR",
                            "informacion" => "Apóyanos y comparte el proyecto <strong>fuzzydoDB</strong> en tus redes sociales:</br>
<div style=\"text-align:center\">
	</br>&nbsp;&nbsp;&nbsp;<a href=\"javascript:void(0)\"><img class=\"share-btn\" src=\"img/facebook.png\" alt=\"Facebook\" height=\"50px\" onclick=\"fb_share();\" width=\"auto\"></a>
	&nbsp;&nbsp;&nbsp;<a href=\"http://www.twitter.com/share?text=Ingresa%20en%20el%20siguiente%20enlace%20y%20aprende%20acerca%20bases%20de%20datos%20difusas.&url=http://localhost/\" target=\"_blank\"><img src=\"img/twitter.png\" alt=\"Twitter\" height=\"50px\" width=\"auto\">
</div>",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);


$subs = array("nombre" => "Ver perfil",
              "seccion" => "Perfil",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Ver perfil",
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

$subs = array("nombre" => "Modificar perfil",
              "seccion" => "Perfil",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Modificar perfil",
                            "informacion" => '<div id="modificarperfil-form"><form><table cellpadding="10"><tr><td><strong>Nombre: </strong></td><td><input class=\"form-control\" type="text" value="<?php echo $_SESSION[\'nombre\']; ?>" id="nombre" style="height:25px;" /></td><td style="padding-left:50px"><strong>Apellido: </strong></td><td><input class=\"form-control\"  type="text" value="<?php echo $_SESSION[\'apellido\']; ?>" id="apellido" style="height:25px;"/></td></tr>
                   <tr><td><strong>Ocupación: </strong></td><td><input class=\"form-control\" type="text" value="<?php echo $_SESSION[\'ocupacion\']; ?>" id="ocupacion" style="height:25px; "/></td><td style="padding-left:50px"><strong>Institución: </strong></td><td><input class=\"form-control\"  type="text" value="<?php echo $_SESSION[\'institucion\']; ?>" id="institucion" style="height:25px;"/></td></tr>
                   <tr><td><strong>País: </strong></td><td><select class=\"form-control\" id="pais" style="height:25px;"/>
                                <option value="<?php echo $_SESSION[\'ubicacion\']; ?>"><?php echo $_SESSION[\'ubicacion\']; ?></option>
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
                   </table><br/>
                <button type="button" class=\"btn btn-custom\" onclick="modificarPerfil();" style="margin-left:370px; margin-top:5px;">Enviar</button>
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

$subs = array("nombre" => "Cambiar foto",
              "seccion" => "Perfil",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Cambiar foto",
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
if ($_GET[\'paso\'] != 1){?>Ingrese la nueva foto que desea tener asociada a su cuenta.<br/><br/>
            <form  method="post" enctype="multipart/form-data" action="process/crop.php"><table cellpadding=\"10\"><tr><td><input type=\"file\" name=\"preview\" style=\"margin-left: 290px;\"/></td></tr>       
            <input type=\"hidden\" name=\"paso\" value=\"1\">
            </table>
            <button type="submit" class=\"btn btn-custom\" style="margin-left:370px; margin-top:5px;">Subir</button>
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
			<button type="submit" class=\"btn btn-custom\" style="margin-left:370px; margin-top:10px;">Cortar</button>
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

$subs = array("nombre" => "Modificar correo",
              "seccion" => "Perfil",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Modificar correo",
                            "informacion" => '<div id="modificarcorreo-form">
            Ingrese el nuevo correo que desea tener asociado a su cuenta.<br/><br/>
            <form><table cellpadding="10"><tr><td><input type="text" class=\"form-control\" value="<?php echo $_SESSION[\'email\']; ?>" id="mail" style="height:25px; margin-left: 290px; width: 200px;"/></td></tr>
                   
            </table>       
             <button type="button" class=\"btn btn-custom\" onclick="modificarCorreo();" style="margin-left:370px; margin-top:10px;">Modificar</button></form>
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

$subs = array("nombre" => "Modificar contraseña",
              "seccion" => "Perfil",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Modificar contraseña",
                            "informacion" => '<div id="modificarcontrasena-form">Ingrese su nueva contraseña.
            <form><table><tr><td><input class=\"form-control\" type=\"password\" value=\"\" id=\"contrasena\" placeholder=\"Contraseña\" style=\"margin-left: 300px; margin-top:15px; height:25px; width: 200px; \"/></td></tr>
                    <tr><td><input class=\"form-control\" type=\"password\" value=\"\" id=\"confirmar\" placeholder=\"Confirmar Contraseña\" style=\"margin-top:15px; margin-left: 300px; height:25px; width: 200px;\"/></td></tr>
                   
                   </table>
            <button type="button" class=\"btn btn-custom\" onclick="modificarContrasena();" style="margin-left:370px; margin-top:15px;">Modificar</button></form>
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

$subs = array("nombre" => "Cambiar tipo de usuarios",
              "seccion" => "Usuarios",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Cambiar tipo de usuarios",
                            "informacion" => '
<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se ha cambiado el tipo de usuario de forma exitosa.</div>
<?php
}
if ($_GET["res"] == "err")
{
?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se debe tener al menos un usuario de tipo Administrador.</div>
<?php
}
?>
<form action="usuarios.php" method="GET">
<div class="input-group">
      <input type="text" class="form-control" name="mail" style="height:20px; width: 98%" placeholder="Buscar usuario por correo" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-custom" type="button">Buscar</button>
      </span>
    </div>
</form><br/>                           
<table class=\"table\">
<tbody><tr>
<td><strong>#</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Correo</strong></td>
<td><strong>Tipo de usuario</strong></td>
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
<li><a href=\"process/edit_usuario.php?e=1&p=1&user=<?php echo $doc[\'_id\'];?>\">Participante</a></li>
<li><a href=\"process/edit_usuario.php?e=1&p=2&user=<?php echo $doc[\'_id\'];?>\">Desarrollador</a></li>
<li><a href=\"process/edit_usuario.php?e=1&p=3&user=<?php echo $doc[\'_id\'];?>\">Administrador</a></li>
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

$subs = array("nombre" => "Eliminar usuarios",
              "seccion" => "Usuarios",
              "idioma" =>"ESP",
              "bloque" => array(array("nombre" => "Eliminar usuarios",
                            "informacion" => '<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se ha eliminado el usuario forma exitosa.</div>
<?php
}
if ($_GET["res"] == "err")
{
?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>No se puede eliminar a usted mismo.</div>
<?php
}
?>
<form action="usuarios.php" method="GET">
<div class="input-group">
      <input type="text" class="form-control" name="mail" style="height:20px; width: 98%" placeholder="Buscar usuario por correo" />
      <span class="input-group-btn">
        <button type="submit" class="btn btn-custom" type="button">Buscar</button>
      </span>
    </div>
    <input type="hidden" name="sec" value="1">
</form><br/>                           
<table class=\"table\">
<tbody><tr>
<td><strong>#</strong></td>
<td><strong>Nombre</strong></td>
<td><strong>Correo</strong></td>
<td><strong>Eliminar usuario</strong></td>
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
<a href=\"process/edit_usuario.php?e=2&user=<?php echo $doc[\'_id\'];?>\" type="button" class="btn btn-danger" style="color:#FFF">Eliminar</a>
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

$subs = array("nombre" => "Donate",
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
if ($_GET["res"] == "err")
{
?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se debe tener al menos un usuario de tipo Administrador.</div>
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
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se ha cambiado el tipo de usuario de forma exitosa.</div>
<?php
}
if ($_GET["res"] == "err")
{
?>
<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>No se puede eliminar a usted mismo.</div>
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


echo "Ok fino.";
?>