<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$target_dir = "uploads/";
$target_dir = $target_dir . basename( $_FILES["uploadFile"]["name"]);
$uploadOk=1;

if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $target_dir)) {
    echo "The file ". basename( $_FILES["uploadFile"]["name"]). " has been uploaded.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

?>