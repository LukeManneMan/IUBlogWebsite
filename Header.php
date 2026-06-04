    <?php
        session_start();            


    ?>
    <nav>
        <ul>
            <li><a href="Index.php">Posts</a></li>
            <li><a href="About.php">About</a></li>
            <?php
                if (isset($_SESSION["admin"]) && $_SESSION["admin"] == true) 
                {
                    echo '<li><a href="MaintainPosts.php">Maintain Posts</a></li>';
                    echo '<li><a href="CreatePost.php">Create Post</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                } 
                else 
                {
                    echo '<li><a href="login.php">Admin Login</a></li>';
                }
            ?>
        </ul>
    </nav>
    <h1>Luke's Travel Blog</h1>
