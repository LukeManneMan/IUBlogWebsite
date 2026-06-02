<!DOCTYPE html>
<header>
    <?php
        require 'Header.php';
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
             echo "<li>".$row["ID"]." - ".$row["PostTitle"]."</li>";
        }
    echo "</ul>";
    ?>
    
</body>
<footer>
    <?php
        require 'Footer.php';
    ?>
</footer>