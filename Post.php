<?php
require 'Header.php';
require 'Db.php';

$id = $_GET['id'];
$sql = $conn->prepare("SELECT * FROM lukeblog.posts WHERE ID = ?");
$sql->execute([$id]);
$post = $sql->fetch(PDO::FETCH_ASSOC);
?>

<h1><?= $post['PostTitle'] ?></h1>
<p><?= $post['DateCreated'] ?></p>
<div><?= $post['PostBody'] ?></div>

<?php require 'Footer.php'; ?>