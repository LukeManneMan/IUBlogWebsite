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
                    echo '<button type="button">Logout</button>';
                    //luke fix this shit
                    echo '<a href="authenticate.php?logout">Logout</a>';
                } 
                else 
                {
                    echo '<li><a href="login.php">Admin Login</a></li>';
                }
            ?>
        </ul>
    </nav>
    <h1>Luke's Travel Blog</h1>
