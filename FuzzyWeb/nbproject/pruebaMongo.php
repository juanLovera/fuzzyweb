<?php
   
   $m = new MongoClient();
   echo "Conexion a Mongo realizada!<br>";
   // select a database
   $db = $m->test;
   echo "Base de datos test seleccionada";
?>
