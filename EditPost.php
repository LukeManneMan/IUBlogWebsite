<?php
require 'Header.php';
require 'Db.php';

$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM lukeblog.posts WHERE ID = ?");
$sql->execute([$id]);
$post = $sql->fetch(PDO::FETCH_ASSOC);
?>