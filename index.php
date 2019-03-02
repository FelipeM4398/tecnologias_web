<?php
    require_once 'model.php';

    require_once 'controllers.php';

    $uri = $_SERVER['REQUEST_URI'];

    if ($uri == '/tecnologias_web/') {
        listAction();
    } elseif ($uri == '/tecnologias_web/index.php/show?id='.$_GET['id'] 
                    && isset($_GET['id'])) {
        showAction($_GET['id']);
    } else {
        header('Status: 404 Not Found');
        echo '<html><body><h1>Page Not Found</h1></body></html>';
    }
?>