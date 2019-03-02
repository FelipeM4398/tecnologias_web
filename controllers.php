<?php
    function listAction() {
        $posts = getAllPost();
        require 'templates/list.php';
    }

    /**
     * @param $id
     */
    function showAction($id) {
        $post = getPostById($id);
        require 'templates/show.php';
    }
?>