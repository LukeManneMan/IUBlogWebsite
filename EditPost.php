<!DOCTYPE html>
<head>
    <script src="https://cdn.tiny.cloud/1/gqevzyif3ufilfcutx66jpa3ec36x3nkx2fb225cel33r8ui/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
</head>
<header>
<?php
    require 'Header.php';
    require 'Db.php';


    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM lukeblog.posts WHERE ID = ?");
    $sql->execute([$id]);
    $post = $sql->fetch(PDO::FETCH_ASSOC);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $content = $_POST['content'];

        $updateSql = $conn->prepare("UPDATE lukeblog.posts SET PostTitle = ?, ShortDesc = ?, PostBody = ? WHERE ID = ?");
        $updateSql->execute([$title, $description, $content, $id]);

        header("Location: EditPost.php?id=" . $id);
        exit();
    }
?>
</header>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="EditPost.php?id=<?= $id ?>">
        <label for="title">Edit Post Title</label>
        <input type="text" id="title" name="title" value="<?php echo $post['PostTitle']; ?>" required>
        <br>
        <label for="description">Edit Post Description</label>
        <input type="text" id="description" name="description" value="<?php echo $post['ShortDesc']; ?>" required>
        <br>
        <label for="content">Edit Post Body</label>
        <textarea id="default" name="content" required><?php echo $post['PostBody']; ?></textarea>
        <br>
        <button type="submit">Update Post</button>
    </form>

    <script>
        tinymce.init({
            selector: 'textarea#default',
            plugins: 'advlist link image lists'
        });
    </script>
</body>