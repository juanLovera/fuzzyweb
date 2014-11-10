<?php

if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == "U_Administrador" && $_GET['edit'] == "1")
{
    $localcss = array("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css", "//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.css", "//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.min.css", "css/summernote.css");
    $localjs = array("//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.min.js", "//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.min.js", "//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.min.js","js/summernote.min.js", "js/admin.js");
    include_once ('body_admin.php');
}
    else
{
    include_once ('body.php');
}