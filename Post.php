<!DOCTYPE html>

<body>
    <?php
    require 'Db.php';

    $id = $_GET['id'];
    $sql = $conn->prepare("SELECT * FROM lukeblog.posts WHERE ID = ?");
    $sql->execute([$id]);
    $post = $sql->fetch(PDO::FETCH_ASSOC);
    ?>
    <header>
        <?php
            require 'Header.php';
        ?>
    </header>

    <div class="container-fluid text-center">
        <h1><?= $post['PostTitle'] ?></h1>
    </div>

    <div class="container-fluid text-left">
        <p>Post Created: <?=date('M j Y',strtotime($post['DateCreated'])) ?></p>
    </div>


    <div class="container-fluid text-center">
        <img src="<?= $post['ImgPath'] ?>" alt="<?= $post['PostTitle'] ?>">
        <p><?= $post['PostBody'] ?></p>
    </div>

    <footer>
        <?php require 'Footer.php'; ?>
    </footer>

</body>