<?php
session_start();
include_once("../inc/includes.inc.php");
comprobar_sesion("U_Administrador");
$user = (string)htmlentities($_GET['user']);
$e = (string)htmlentities($_GET['e']);
$p = (string)htmlentities($_GET['p']);
// Conexion a DB
$db = conectar_db();
$coleccion = $db->usuario;
$filtro = array("_id" => new MongoId($user));
$cursor3 = $coleccion->findOne($filtro);
$tipoUsu= $cursor3["tipo"];

if ($e == "1")
{
    if ($p == 1)
    {
        $usertype = "U_Normal";
        $cursor2 = $coleccion->find(array("tipo" => "U_Administrador"));
        $numeroUsuariosAdmin = $cursor2->count();
    }
    elseif ($p == 2)
    {
        $usertype = "U_Desarrollador";
        $cursor2 = $coleccion->find(array("tipo" => "U_Administrador"));
        $numeroUsuariosAdmin = $cursor2->count();
    }
    elseif ($p == 3)
         $usertype = "U_Administrador";
    if ($numeroUsuariosAdmin > 1 || !isset($numeroUsuariosAdmin) || $tipoUsu != "U_Administrador"){
        $newdata = array('$set' => array("tipo" => $usertype));
        $cursor = $coleccion->update($filtro, 
                                 $newdata);
        if (($_SESSION['id'] == new MongoId($user)) && ($p ==2 || $p == 1)){
            header("Location: ../process/signout.php");
        } else {
		if ($usertype == $tipoUsu)
			header("Location: ../usuarios.php?sec=0");
		else
		{
			if ($usertype == "U_Normal")
			{
				$tipo1 = "Participante";
			}
			elseif ($usertype == "U_Desarrollador")
			{
				$tipo1 = "Desarrollador";
			}
			else
			{
				$tipo1 = "Administrador";
			}

			if ($tipoUsu == "U_Normal")
                	{
                        	$tipo2 = "Participante";
                	}
                	elseif ($tipoUsu == "U_Desarrollador")
                	{ 
                        	$tipo2 = "Desarrollador";
                	}
                	else
                	{ 
                        	$tipo2 = "Administrador";
                	}
			$to = $cursor3['correo'];

			if (!mail($to,"fuzzydodb: su tipo de usuario ha cambiado.","Un administrador del sistema fuzzydodb ha cambiado su tipo de usuario de " . $tipo2 . " a " . $tipo1))
				die("Su correo no pudo ser enviado. Intente de nuevo.");
            		header("Location: ../usuarios.php?sec=0&res=ok");
            		exit;
		}
        }
    }  else {
        header("Location: ../usuarios.php?sec=0&res=err");
        exit;
    }

} elseif ($e == "2")
{  if (new MongoId($user) != $_SESSION['id']){ 
        $cursor = $coleccion->remove($filtro, 
                                  array("justOne" => true));
        header("Location: ../usuarios.php?sec=1&res=ok");
    } else {
        header("Location: ../usuarios.php?sec=1&res=err");
    }

} 
?>
