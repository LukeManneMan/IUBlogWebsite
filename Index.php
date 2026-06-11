<!DOCTYPE html>
<html>
    <header>
    <?php
        require 'Header.php'
    ?>
    </header>
    <body>
        <div class="container-fluid text-center">
            <h2>Posts</h2>
        </div>
        
        <?php
            require_once 'Db.php';
            $result = $conn->query('select * from lukeblog.posts');
   
            while($row = $result->fetch(PDO::FETCH_ASSOC))
            {
                echo "<div class='container'>";
                    echo "<div class='row mb-3 justify-content-center post-card'>";
                        echo "<div class='col-3'>";
                            echo "<a href='Post.php?id=".$row['ID']."'>";
                            echo "<img src=".$row['ImgPath'].">";
                        echo "</div>";
                        echo "<div class='col-3'>";
                            echo "<h3>".$row['PostTitle']."</h3>";
                            echo "<p>".$row['ShortDesc']."</p>";
                            echo "</a>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";  
            }
        ?>
        
    </body>
    <footer>
        <?php
            require 'Footer.php'
        ?>
    </footer>