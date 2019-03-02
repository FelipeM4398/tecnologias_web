<?php
    require_once 'model.php';
    newPost($_POST['titulo'], $_POST['descripcion']);
    header('HTTP/1.1 301 Moved Permanently');
    header('Location: /tecnologias_web/');   
?>
