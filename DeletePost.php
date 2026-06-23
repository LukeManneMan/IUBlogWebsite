<?php
    session_start();
    require 'Db.php';

    if($_SESSION['admin'] != true) 
    {
        header("Location: login.php");
        exit();
    }

    $id = $_GET['id'];
    $stmt = $conn->prepare("DELETE FROM lukeblog.posts WHERE ID = ?");
    $stmt->execute([$id]);

    header("Location: MaintainPosts.php");
    exit();
?>