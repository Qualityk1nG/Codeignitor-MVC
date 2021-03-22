<?php
    if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    if (is_numeric($id)){
        echo "<h1>Show only one blog post with id: {$id}</h1>";

    } else {
        header("HTTP/1.0 404 NOT FOUND");
        echo "<h1>We are sorry, page not found</h1>";
    } 
}else {
        echo "<h1>Show all blog posts</h1>";
    }
    