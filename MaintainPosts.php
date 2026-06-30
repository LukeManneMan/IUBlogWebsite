<!DOCTYPE html>

<body>
    <header>
        <?php
            require 'Header.php';
            if ($_SESSION['admin'] != true) {
                header("Location: login.php");
                exit();
            }
        ?>
    </header>
    <div class="container-fluid text-center">
        <h2>Posts</h2>
    </div>
    <div class="container-fluid text-center">
        <h4>Click on a post to edit it</h4>
    </div>
    
    <?php
    require 'Db.php';
    $result = $conn->query('Select * from lukeblog.posts');
    echo "<div class='container text-center' id='maintain-posts'>";
        echo "<ul>";
        while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<div class='row mb-2 justify-content-center align-items-center'>";
                echo "<div class='col-4 col-md-3'>";
                    echo "<a href='EditPost.php?id=".$row['ID']."'>".$row['ID']."</a>";
                echo "</div>";
                echo "<div class='col-4 col-md-2'>";
                    echo "<a href='EditPost.php?id=".$row['ID']."'>".$row['PostTitle']."</a>";
                echo "</div>";
                echo "<div class='col-4 col-md-3'>";
                    echo "<a href='DeletePost.php?id=".$row['ID']."' class='btn btn-danger btn-sm' onclick=\"return confirm('Are you sure you want to delete this post?')\">Delete</a>";
                echo "</div>";
            echo "</div>";
        }
        echo "</ul>";
    echo "</div>";
    ?>
    
    <footer>
        <?php
            require 'Footer.php';
        ?>
    </footer>
</body>
