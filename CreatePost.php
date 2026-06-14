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
    <div class="container-fluid text-center">
        <h1>Create Post</h1>
    </div>

    <div class="container">
        <form action="CreatePost.php" method="POST">
            <div>
                <label class="form-label">Enter post title</label>
                <input class="form-control" name="title" placeholder="Title">
            </div>

            <br>
            <div>
                <label class="form-label">Enter post description</label>
                <input class="form-control" name="description" placeholder="description">
            </div>
            <br>
            <div>
                <label class="form-label">Post Body</label>
                <textarea class="form-control" name="body" placeholder="Post Body" id="default"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

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