<!DOCTYPE html>
<header>
    <?php
        require 'Header.php';
        if ($_SESSION['admin'] != true) {
            header("Location: login.php");
            exit();
        }
    ?>
</header>
<body>
    <h2>Posts</h2>
    <?php
    require 'Db.php';
    $result = $conn->query('Select * from lukeblog.posts');
    echo "<ul>";
    while($row = $result->fetch(PDO::FETCH_ASSOC))
        {
            echo "<a href='EditPost.php?id=".$row['ID']."'>";        
            echo "<li>".$row["ID"]." - ".$row["PostTitle"]."</li>";
            echo "</a>";
        }
    echo "</ul>";
    ?>
    
</body>
<footer>
    <?php
        require 'Footer.php';
    ?>
</footer>