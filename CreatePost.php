<!DOCTYPE html>

<head>
    <script src="https://cdn.tiny.cloud/1/gqevzyif3ufilfcutx66jpa3ec36x3nkx2fb225cel33r8ui/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    <?php
        require 'Header.php';
        if ($_SESSION['admin'] != true) {
            header("Location: login.php");
            exit();
        }
    ?>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        {
            require 'Db.php';
            $title = $_POST['title'];
            $desc = $_POST['description'];
            $body = $_POST['body'];
            $dateCreated = date('Y-m-d H:i:s');
            $sql = $conn->prepare("insert into lukeblog.posts (PostTitle, ShortDesc, PostBody, DateCreated) values (?, ?, ?, ?)");
            $sql->execute([$title, $desc, $body, $dateCreated]);
        }
    ?>
</head>

<header>

</header>
<body>
    <form action="CreatePost.php" method="POST">
        <label>Enter post title</label>
        <input name="title" placeholder="Title">
        <label>Enter post description</label>
        <input name="description" placeholder="description">
        <label>Post Body</label>
        <textarea name="body" placeholder="Post Body" id="default"></textarea>
        <button>Submit</button>
    </form>

    <script>
        tinymce.init({
            selector: 'textarea#default',
            plugins: 'advlist link image lists'
        });
    </script>

</body>
<footer>
    <?php
        require 'Footer.php';
    ?>
</footer>