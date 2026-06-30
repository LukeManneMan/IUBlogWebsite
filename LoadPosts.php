<?php

    require "Db.php";

    $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;

    $stmt = $conn->prepare("SELECT * FROM lukeblog.posts LIMIT 3 OFFSET $offset");
    $stmt->execute();
    $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    header('Content-Type: application/json');
    echo json_encode($posts);
?>