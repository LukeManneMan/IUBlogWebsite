<!DOCTYPE html>
<html>
    <header>
    <?php
        require 'Header.php'
    ?>
    </header>
    <body>
        <h2>Posts</h2>
        
        <?php
            require_once 'Db.php';
            $result = $conn->query('select * from lukeblog.posts');
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<img src=".$row['ImgPath'].">";
                echo "<h3>".$row['PostTitle']."</h3>";
                echo "<p>".$row['ShortDesc']."</p>";
            }
        ?>
        
    </body>
    <footer>
        <?php
            require 'Footer.php'
        ?>
    </footer>