<?php
    function openDatabaseConnection() {
        $conn = mysqli_connect('localhost', 'root', '', 'prueba');
        $conn -> set_charset('utf8');
        return $conn;
    }

    function closeDatabaseConnection($link) {
        mysqli_close($link);
    }

    function getAllPost() {
        $link = openDatabaseConnection();
        $query = mysqli_query($link, 'SELECT id, title, description FROM post');
        $posts =[];
        while($row = mysqli_fetch_assoc($query)) {
            $posts[] = $row;
        }
        closeDatabaseConnection($link);
        return $posts;
    }

    function getPostById($id) {
        $link = openDatabaseConnection();
        $query = mysqli_query($link, "SELECT * FROM post WHERE id = '$id'");
        $post = mysqli_fetch_assoc($query);
        closeDatabaseConnection($link);
        return $post;
    }

    function newPost($title, $description) {
        $link = openDatabaseConnection();
        if(isset($title) && isset($description)) {
            $query = mysqli_query($link, "INSERT INTO post (title, description)
                                        VALUES ('$title', '$description')");
        } else {
            return null;
        }
        closeDatabaseConnection($link);
    }
?>