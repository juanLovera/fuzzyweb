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
                            "informacion" => "-",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())    
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Comparación con otros proyectos",
              "seccion" => "Acerca",
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
              "bloque" => array(array("nombre" => "VERSIONES ANTERIORES",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "API",
              "seccion" => "API",
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
              "bloque" => array(array("nombre" => "TIPO 3",
                            "informacion" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed tempor mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus odio turpis, porttitor sit amet ante in, hendrerit molestie nibh. Curabitur vitae elit et tellus fringilla commodo. Nulla facilisi. Suspendisse sodales ex elit, in tincidunt urna vulputate nec. Nullam laoreet ligula elit. Nunc et eleifend dui. Praesent leo libero, feugiat eu convallis id, dictum eget orci. Cras semper mi ac suscipit commodo. Vivamus vehicula odio lacus, non tristique ipsum sodales eget.<br/><br/>Suspendisse placerat magna sed commodo efficitur. Ut molestie congue ex, quis porttitor lectus laoreet ut. Integer in lectus diam. In purus justo, tincidunt nec sagittis vitae, venenatis facilisis lorem. Donec imperdiet turpis a eleifend interdum. Etiam mollis malesuada lobortis. Vivamus purus diam, placerat in nisl ac, varius convallis risus. Cras vitae metus vitae eros faucibus eleifend. Cras risus tortor, fringilla nec neque sed, pellentesque tristique dolor. Sed a augue vitae lectus maximus vestibulum. Maecenas consequat nisl lorem, eu porta nisl porttitor et. Aliquam eget ex ac augue finibus volutpat vel in lorem. Aenean metus enim, convallis vel consequat tincidunt, vestibulum quis erat.<br/><br/>Nulla facilisi. Quisque in commodo lorem, non scelerisque elit. Fusce quam sem, porta eu semper eu, pellentesque sit amet nunc. Aliquam id ultrices dui, ac congue lorem. Cras scelerisque a diam ut lobortis. Mauris vulputate nulla magna, sed lacinia lacus pretium vitae. Cras rhoncus eros nulla, et interdum diam ultrices sit amet. Phasellus id orci sed turpis placerat rhoncus ac pharetra lorem. Vivamus lobortis ante consectetur, facilisis diam vel, laoreet libero. Sed tincidunt molestie ex, nec sollicitudin est faucibus eget. Phasellus orci tortor, molestie id justo vel, ultricies hendrerit quam. Nam fringilla orci a neque maximus, vitae efficitur velit condimentum. In condimentum eros purus, imperdiet efficitur arcu efficitur in. Proin elit ante, fringilla et egestas ac, tristique vitae tortor. Sed tincidunt orci vitae diam vestibulum, at molestie lorem pellentesque",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Tipo 4",
              "seccion" => "API",
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
              "bloque" => array(array("nombre" => "PUBLICACIONES ASOCIADAS",
                            "informacion" => "En esta sección se encuentran todas las publicaciones asociadas al proyecto.",
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
                            "informacion" => "-",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Conferencias",
              "seccion" => "Documentación",
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
              "bloque" => array(array("nombre" => "DESEMPEÑO",
                            "informacion" => "ESPACIO PARA LA INFORMACIÓN QUE ENVIARÁ EL EQUIPO DE PRUEBAS DE DESEMPEÑO",
                            "fecha_ultima_mod" => date(),
                            "autor_ultima_mod" => NULL,
                            "descarga_des" => "activated",
                            "descarga" => array(),
                            "webapp" => array())
                  ));
$coleccion->insert($subs);

$subs = array("nombre" => "Registro",
              "seccion" => "Comunidad_p",
              "bloque" => array(array("nombre" => "REGISTRO",
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

$subs = array("nombre" => "Recuperar contraseña",
              "seccion" => "Comunidad_p",
              "bloque" => array(array("nombre" => "RECUPERAR CONTRASEÑA",
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

$subs = array("nombre" => "Contáctanos",
              "seccion" => "Comunidad",
              "bloque" => array(array("nombre" => "CONTÁCTANOS",
                            "informacion" => "<form name=\"contactform\" method=\"post\" action=\"process/send_form_email.php\">
				<input type=\"hidden\" name=\"formpass\" value=\"wough9348y3**\">
		<table width=\"850px\">
			<tr>
				<td valign=\"top\">
					<label for=\"nombre\">Nombre</label>
				</td>
				<td valign=\"top\">
					<input  type=\"text\" name=\"nombre\" required maxlength=\"50\" style=\"width:600px; border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px;\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"email\">Correo</label>
				</td>
				<td valign=\"top\">
					<input  class=\"form-control\" type=\"text\" name=\"email\" required maxlength=\"80\" style=\" width:600px; margin-top:10px; border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:25px; padding-left:8px;\">
				</td>
			</tr>
			
			<tr>
				<td valign=\"top\">
					<label for=\"comentarios\">Comentario</label>
				</td>
				<td valign=\"top\">
					<textarea class=\"form-control\"  name=\"comentarios\" required maxlength=\"1000\" cols=\"25\" rows=\"6\" style=\"margin-top:10px; width:600px;border: 1px solid #045d6f; border-radius:5px; color:#B1B1B1; height:60px; padding-left:8px;\"></textarea>
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
              "bloque" => array(array("nombre" => "Modificar perfil",
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

$subs = array("nombre" => "Cambiar foto",
              "seccion" => "Perfil",
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

$subs = array("nombre" => "Modificar correo",
              "seccion" => "Perfil",
              "bloque" => array(array("nombre" => "Modificar correo",
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

$subs = array("nombre" => "Modificar contraseña",
              "seccion" => "Perfil",
              "bloque" => array(array("nombre" => "Modificar contraseña",
                            "informacion" => '<div id="modificarcontrasena-form">Ingrese su nueva contraseña.
            <form><table><tr><td><input type=\"password\" value=\"\" id=\"contrasena\" onfocus=\"clearSearch(this);\" placeholder=\"Contraseña\" style=\"margin-left: 300px; margin-top:15px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                    <tr><td><input type=\"password\" value=\"\" id=\"confirmar\" placeholder=\"Confirmar Contraseña\" onfocus=\"clearSearch(this);\" style=\"margin-top:15px; margin-left: 300px; border: 1px solid #045d6f; border-radius:5px; height:25px; padding-left:8px;\"/></td></tr>
                   
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

$subs = array("nombre" => "Cambiar tipo de usuarios",
              "seccion" => "Usuarios",
              "bloque" => array(array("nombre" => "Cambiar tipo de usuarios",
                            "informacion" => '
<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se ha cambiado el tipo de usuario de forma exitosa.</div>
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
              "bloque" => array(array("nombre" => "Eliminar usuarios",
                            "informacion" => '<?php
if ($_GET["res"] == "ok")
{
?>
<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>Se ha eliminado el usuario forma exitosa.</div>
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

echo "Ok fino.";
?>
